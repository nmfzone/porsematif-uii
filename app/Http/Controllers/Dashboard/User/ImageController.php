<?php

namespace App\Http\Controllers\Dashboard\User;

use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $image = $image->where('type', 'LIKE', '%Bukti Pembayaran%')
                    ->orWhere('type', 'LIKE', '%Surat Pernyataan%')
                    ->findOrFail($id);
        File::delete($image->url);
        $image->delete();
        alert()->success('File berhasil di hapus.')->persistent("Close");

        return redirect('/dashboard/users');
    }
}
