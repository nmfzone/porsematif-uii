<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
//use App\Awesome\Contracts\Controllers\User\UserContract;
use App\Awesome\Traits\Controllers\User\CompetitionTrait;
use Message;

use App\User;
use App\Category;
use App\Image;
use App\UserCategory;

use App\Http\Requests\Competitions\CompetitionRegistrationRequest;
use App\Http\Requests\Competitions\AddCompetitionRequirementsRequest;

use Symfony\Component\Process\Process;

class CompetitionRegistrationController extends Controller
{

    use CompetitionTrait;

    /**
     * The loader implementation.
     *
     * @var \App\Services\MessagesTranslator
     */
    protected $message;

    /**
     * The authenticated user.
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message->setBase('messages.ctrl.competition_registration');
        $this->user = auth()->user();
    }

    /**
     * Display a listing of the user.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = $this->message->shout('index.title');

        return view('dashboard.user.pendaftaran.create', compact('pageTitle'));
    }

    /**
     * Display a competition registration form.
     *
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function register(Category $category, UserCategory $userCategory)
    {
        $pageTitle = $this->message->shout('register.title');
        $internal_competitions = $category->where('type', 'Internal')->get();
        $exsternal_competitions = $category->where('type', 'External')->get();
        $user_competitions = $this->user->category()->get();

        $i = 0;
        $user_registered_competitions= [];
        foreach ($user_competitions as $data) {
            $user_registered_competitions[$i++] = $data->id;
        }

        return view(
            'dashboard.user.competitions.competition_registration',
            compact(
                'pageTitle',
                'internal_competitions',
                'exsternal_competitions',
                'user_registered_competitions'
            )
        );
    }

    /**
     * Store the user selected competitions in storage.
     *
     * @param App\Http\Requests\Competitions\CompetitionRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(CompetitionRegistrationRequest $request, Category $category, UserCategory $userCategory)
    {
        $checked_competition = $request->get('competition');
        $user_competition = $userCategory->where('user_id', $this->user->id)->get();

        foreach ($checked_competition as $id) {
            if (!$category->find($id)) {
                alert()->error("Maaf ada kesalahan sistem :(")->persistent("Close");
                return redirect()->back();
            }
        }

        $user_cat = [];
        $i = 0;
        foreach ($user_competition as $data) {
            if (!in_array($data->category_id, $checked_competition)) {
                if ($data->verified == 1) {
                    return redirect()->back()
                        ->withErrors([
                            'competition' => $this->message->shout('register.error'),
                        ]);
                }
                $userCategory->destroy($data->id);
            } else {
                $user_cat[$i++] = $data->category_id;
            }
        }

        foreach($checked_competition as $id) {
            if (!in_array($id, $user_cat)) {
                $userCategory->create([
                    'user_id'       => $this->user->id,
                    'category_id'   => $id
                ]);
            }
        }

        alert()->success($this->message->shout('register.success'))->persistent("Close");

        return redirect()->back();
    }

    public function addCompetitionRequirements(Image $image)
    {
        $check = $this->atLeatHasBeenRegistered();
        if ("" != $check) {
            return redirect($check);
        }
        $pageTitle = "Lengkapi Persyaratan";

        $buktiPembayaran = $image->where('type', 'Bukti Pembayaran')->where('user_id', $this->user->id)->get();

        return view('dashboard.user.competitions.add_comp_requirements', compact('pageTitle', 'buktiPembayaran'));
    }

    public function postCompetitionRequirements(AddCompetitionRequirementsRequest $request,
        Image $image)
    {
        $data = [
            [
                'title' => 'Bukti Pembayaran',
                'name'  => 'pembayaran',
                'path'  => 'uploads/bukti',
                'note'  => 'pem_note',
            ],
            [
                'title' => 'Surat Pernyataan',
                'name'  => 'surat_pernyataan',
                'path'  => 'uploads/surat_pernyataan',
                'note'  => 'surper_note',
            ]
        ];

        $success = false;
        foreach($data as $dt) {
            $reqImage = $request->file($dt['name']);
            $note = $request->get($dt['note']);
            if ($reqImage != null) {
                $imageName = strtolower(trim(
                    str_random(10) . '-' . $reqImage->getClientOriginalName()
                ));

                $imgSize = $reqImage->getClientSize();
                $ext = strtolower($reqImage->getClientOriginalExtension());
                $path = $dt['path'] . '/' . $imageName;
                $pathFull = public_path($dt['path'] . '/' . $imageName);
                $upload = $reqImage->move($dt['path'], $imageName);

                if ($upload) {
                    $success = true;
                    list($width, $height) = getimagesize($pathFull);
                    $resize = 100-((($width+$height)/200)+10);
                    $resize = $resize <= 10 ? 10 : $resize;
                    $resize = $resize >= 80 ? 80 : $resize;

                    if ($ext == "png") {
                        $process = new Process('pngquant -o "'. $pathFull .'" --force --quality=50 "'. $pathFull .'"');
                        $process->run();
                    } else {
                        if ($imgSize >= 400000) {
                            $process = new Process('convert "'. $pathFull .'" -resize '. $resize .'% -quality 40 "'. $pathFull . '"');
                            $process->run();
                        }
                    }

                    $image = new Image();
                    $image->name = $imageName;
                    $image->url = $path;
                    $image->user_id = $this->user->id;
                    $image->type = $dt['title'];
                    $image->note = $note;
                    $image->wMoreH = $width >= $height ? 1 : 0;
                    $image->save();
                } else {
                    alert()->error("Gambar " . $dt['title'] . " gagal di upload. Kesalahan sistem!")->persistent("Close");
                    return redirect()->back();
                }
            }
        }

        if ($success) {
            alert()->success($this->message->shout('upload.success'))->persistent("Close");
            return redirect('/dashboard/users');
        } else {
            alert()->error($this->message->shout('upload.empty'))->persistent("Close");
            return redirect()->back();
        }
    }

}
