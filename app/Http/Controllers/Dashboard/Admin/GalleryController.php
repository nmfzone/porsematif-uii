<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use File;
use Message;

use App\User;
use App\Category;
use App\Image;
use App\UserCategory;

use App\Http\Requests\Galleries\GalleryUploadsRequest;

use Symfony\Component\Process\Process;

class GalleryController extends Controller
{
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
        $this->message = $message->setBase('messages.ctrl.gallery');
        $this->user = auth()->user();
    }

    /**
     * Display a listing of the image.
     *
     * @param  App\Image  $$image
     * @return \Illuminate\Http\Response
     */
    public function index(Image $image)
    {
        $pageTitle = "Gallery";

        $galleries = $image->where('type', 'LIKE', '%Gallery Porsematif%')->get();

        return view('dashboard.admin.galleries.index', compact('pageTitle', 'galleries'));
    }

    /**
     * Display a listing of the image.
     *
     * @param  App\Image  $$image
     * @return \Illuminate\Http\Response
     */
    public function create(Image $image)
    {
        return $this->index($image);
    }

    public function store(GalleryUploadsRequest $request, Image $image)
    {
        $reqImage = $request->file('galleries');
        $years = $request->get('years');
        $note = $request->get('note');

        $dir = "uploads/gallery";
        $originalName = $reqImage->getClientOriginalName();
        $imageName = strtolower(trim(
            str_random(20) . '-' . $reqImage->getClientOriginalName()
        ));

        $imgSize = $reqImage->getClientSize();
        $ext = strtolower($reqImage->getClientOriginalExtension());
        $path = $dir . '/' . $imageName;
        $pathFull = public_path($dir . '/' . $imageName);
        $upload = $reqImage->move($dir, $imageName);

        if ($upload) {
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
            $image->type = "Gallery Porsematif " . $years;
            $image->note = $note;
            $image->wMoreH = $width >= $height ? 1 : 0;
            $image->save();

            alert()->success($this->message->shout('store.success'))->persistent("Close");

            return redirect('dashboard/protected/galleries');
        }

        alert()->error("Gambar " . $originalName . " gagal di upload. Kesalahan sistem!")->persistent("Close");

        return redirect()->back();
    }

    public function edit()
    {
        return abort(404);
    }

    /**
     * Remove the specified image from storage.
     *
     * @param  int  $id
     * @param  App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Image $image)
    {
        $image = $image->where('type', 'LIKE', '%Gallery Porsematif%')->findOrFail($id);
        File::delete($image->url);
        $image->delete();
        alert()->success('File berhasil di hapus.')->persistent("Close");

        return redirect('/dashboard/protected/galleries');
    }

}
