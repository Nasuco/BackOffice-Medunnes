<?php

namespace App\Http\Controllers\backend;

use App\Models\Spesialis;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class SpesialisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $spesialis = DB::table('spesialis')->get();
        return view('backend.spesialis.list_spesialis', ['spesialis' => $spesialis]);
    }

    public function create()
    {
        return view('backend.dokter.create_dokter');
    }

    public function store(Request $request): RedirectResponse
    {
        //upload image
        $image = $request->file('img_spesialis');
        $path = 'asset/' . $image->getClientOriginalName();
        Storage::disk('public')->put($path, file_get_contents($image));

        //create post
        Spesialis::create([
            'nama_spesialis' => $request->nama_spesialis,
            'img_spesialis'     => $path
        ]);

        //redirect to index
        return redirect()->route('spesialis.index')->with(['success' => 'Spesialis Berhasil Ditambahkan!']);

    }

    public function destroy(int $id)
    {
        Spesialis::destroy($id);
        return redirect('/list_spesialis')->with('message_delete', 'Spesialis berhasil dihapus!');
    }

    // // create spesialis
    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('backend.spesialis.create_spesialis');
    // }

    // /**
    //  * store
    //  *
    //  * @param  mixed $request
    //  * @return RedirectResponse
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     //validate form
    //     $this->validate($request, [
    //         'nama_spesialis' => 'required',
    //         'img_spesialis'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
    //     ]);

    //     //upload image
    //     $image = $request->file('img_spesialis');
    //     $image->storeAs('public', $image->hashName());

    //     //create post
    //     Spesialis::create([
    //         'nama_spesialis' => $request->nama_spesialis,
    //         'img_spesialis'     => $image->hashName()
    //     ]);

    //     //redirect to index
    //     return redirect()->route('spesialis.store')->with(['success' => 'Data Berhasil Disimpan!']);
    // }

}
