<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
//use App\Awesome\Contracts\Controllers\User\UserContract;
use Message;

use App\User;
use App\Image;

use App\Http\Requests\Pendaftaran\CreatePendaftaranRequest;

class PendaftaranController extends Controller
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

    private $image;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Message $message, Image $image)
    {
        $this->message = $message->setBase('messages.ctrl.pendaftaran');
        $this->user = auth()->user();
        $this->image = $image;
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
     * Store a newly created user in storage.
     *
     * @param  App\Http\Requests\Users\CreateUserRequest  $request
     * @param  App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePendaftaranRequest $request)
    {
        $path = "uploads/bukti/";

        $image = $request->file('image');
        $imageName = strtolower(trim(
            str_random(100) . '-' . $image->getClientOriginalName()  . '.' . $image->getClientOriginalExtension()
        ));

        $upload = $image->move($path, $imageName);

        if ($upload) {
            $this->image = new Image();
            $this->image->name = $imageName;
            $this->image->url = $path . $imageName;
            $this->image->user_id = $this->user->id;
            $this->image->type = "Bukti Pendaftaran Web Development";
            $this->image->save();

            alert()->success($this->message->shout('store.success'))->persistent("Close");
            return redirect('/dashboard/pendaftaran');
        }

        alert()->error($this->message->shout('store.error'))->persistent("Close");
        return redirect()->back();
    }

}
