<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pasien;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pasiens = DB::table('user_pasien')->get();
        return view('backend.pasien.list_pasien', ['pasiens' => $pasiens]);
    }

    public function store(Request $request): RedirectResponse
    {
        Pasien::create($request->all());
        return redirect()->route('listpasien')->with('success', 'Pasien berhasil ditambahkan!');

    }

    public function edit($id)
	{
        $pasiens = Pasien::find($id);
        return view('backend.pasien.edit_pasien', compact('pasien'));

	}


    public function update(Request $request, $id)
    {
        $pasiens = Pasien::find($id);
        $pasiens->update($request->all());

        // $pasiens->status = $request->status;

        // $pasiens->save();

        return redirect()->route('listpasien')->with('success', 'Status berhasil diupdate!');
    }

    // public function updateStatus(Request $request, $id)
    // {
    //     $pasien = Pasien::find($id);
    //     $pasien->status = $request->input('status');
    //     $pasien->save();

    //     return redirect()->back()->with('success', 'Status pasien berhasil diubah');
    // }
}
