<?php

namespace App\Http\Controllers\Dashboard\User;

use Illuminate\Http\Request;
use File;
use Message;

use App\User;
use App\Category;
use App\Product;

use App\Awesome\Traits\Controllers\User\CompetitionTrait;
use App\Http\Requests\Uploads\UserProductUploadRequest;

use App\Http\Controllers\Controller;

class UserUploadController extends Controller
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
        $this->message = $message->setBase('messages.ctrl.user_upload');
        $this->user = auth()->user();
        $this->initialization();
    }

    /**
     * Show the form for product upload.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        $check = $this->atLeatHasBeenRegistered();
        if ("" != $check) {
            return redirect($check);
        }

        if (! $this->onlyGrantedCompetitions()) {
            return abort(401);
        }

        $pageTitle = "Upload Karya";
        $competitions = $this->toObject($this->getGrantedCompetitionForUser(2));
        $product = $this->user->product()->first();

        return view('dashboard.user.competitions.product_upload', compact('pageTitle', 'competitions', 'product'));
    }

    /**
     * Store a newly uploaded product in storage.
     *
     * @param  App\Http\Requests\Uploads\UserProductUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function postProduct(UserProductUploadRequest $request, Product $product)
    {
        $file = $request->file('karya');
        $note = $request->get('karya_note');
        $competition_id = $request->get('competition_id');
        $error = $success = false;

        if (! in_array($competition_id, $this->getGrantedCompetitionForUser(1))) {
            $error = true;
        }

        if (!$error) {
            $fileName = strtolower(trim(
                str_random(10) . '-' . $file->getClientOriginalName()
            ));

            $imgSize = $file->getClientSize();
            $ext = strtolower($file->getClientOriginalExtension());
            $dir = 'uploads/karya';
            $path = $dir . '/' . $fileName;
            $pathFull = public_path($dir . '/' . $fileName);
            $upload = $file->move($dir, $fileName);

            if ($upload) {
                $success = true;
                $prev_product = $this->user->product()->where('category_id', $competition_id)->first();

                $detail = [
                    'name'          => $fileName,
                    'url'           => $path,
                    'note'          => $note,
                ];

                if ($prev_product == null)  {
                    $product = $product->newInstance($detail);
                    $product->user_id = $this->user->id;
                    $product->category_id = $competition_id;
                    $product->save();
                } else {
                    File::delete($prev_product->url);
                    $product = $this->user->product()->find($prev_product->id);
                    $detail['user_id'] = $this->user->id;
                    $detail['category_id'] = $competition_id;
                    $product->update($detail);
                }
            } else {
                $error = true;
            }
        }

        if ($success && !$error) {
            alert()->success($this->message->shout('product.success'))->persistent("Close");
            return redirect('/dashboard/users');
        } else {
            alert()->error($this->message->shout('product.error'))->persistent("Close");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified image from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->user->product()->findOrFail($id);
        File::delete($product->url);
        $product->delete();
        alert()->success('File karya berhasil di hapus.')->persistent("Close");

        return redirect('/dashboard/users');
    }

    public function getGrantedCompetitionForUser($key)
    {
        $ret1 = [];
        $ret2 = [];
        $userCompetitions = $this->user->category()->get();

        $i = 0;
        foreach ($this->grantedForProduct as $V) {
            foreach($userCompetitions as $Z) {
                if ($V->id == $Z->id) {
                    $ret1[$i] = $Z->id;
                    $ret2[$i] = [
                        'id'    => $Z->id,
                        'name'  => $Z->name,
                    ];
                    $i++;
                    break;
                }
            }
        }

        if ($key == 1) return $ret1;

        return $ret2;
    }

}
