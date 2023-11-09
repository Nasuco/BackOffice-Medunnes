<?php

namespace App\Http\Controllers\Backend;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rating;
use Illuminate\View\View;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $data = Dokter::all();
        // return view('backend.dokter.list_dokter', compact('data'));
        // $konsultasi = Konsultasi::all();
        // $dokter = DB::table('user_dokter')->get();
        $dokter = Dokter::with('konsultasi', 'rating')->get();
        return view('backend.dokter.list_dokter', compact('dokter'));
    }

    public function create()
    {
        return view('backend.dokter.create_dokter');
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     //upload image
    //     $image = $request->file('img_dokter');
    //     $path = 'asset/' . $image->getClientOriginalName();
    //     Storage::disk('public')->put($path, file_get_contents($image));


    //     Dokter::create([
    //         'user_id' => $request->user_id,
    //         'nama_dokter' => $request->nama_dokter,
    //         'nim' => $request->nim,
    //         'poli_id' => $request->poli_id,
    //         'img_dokter' => $path,
    //         'alamat' => $request->alamat,
    //         'no_tlp' => $request->no_tlp,
    //         'tempat_kerja' => $request->tempat_kerja,
    //         'tahun_lulus' => $request->tahun_lulus,
    //         'tgl_mulai_aktif' => $request->tgl_mulai_aktif,
    //         'alumni_kampus' => $request->alumni_kampus,
    //         'no_reg' => $request->no_reg,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'status' => $request->status
    //     ]);
    //     return redirect()->route('listdokter')->with('success', 'dokter berhasil ditambahkan!');

    // }

    public function store(Request $request): RedirectResponse
    {
        //upload image
        $image = $request->file('img_dokter');
        $path = 'asset/' . $image->getClientOriginalName();
        Storage::disk('public')->put($path, file_get_contents($image));


        Dokter::create([
            'user_id' => $request->user_id,
            'title_depan' => $request->title_depan,
            'nama_dokter' => $request->nama_dokter,
            'title_belakang' => $request->title_belakang,
            'spesialis_id' => $request->spesialis_id,
            'img_dokter' => $path,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'tempat_kerja' => $request->tempat_kerja,
            'tahun_lulus' => $request->tahun_lulus,
            'tgl_mulai_aktif' => $request->tgl_mulai_aktif,
            'alumni_kampus' => $request->alumni_kampus,
            'no_reg' => $request->no_reg,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status
        ]);
        return redirect()->route('listdokter')->with('success', 'Dokter berhasil ditambahkan!');

    }

    public function edit($id)
	{
        $dokter = Dokter::find($id);
        // dd($dokter);
        return view('backend.dokter.update_dokter', compact('dokter'));

	}
    
    public function update(Request $request, $id)
    {
        $dokter = Dokter::find($id);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('img_dokter')) {
            $image = $request->file('img_dokter');
            $image->storeAs('public/asset', $image->hashName());
            $dokter->img_dokter = 'asset/' . $image->hashName();
        }

        // Update data lainnya
       // Update data lainnya
       $dokter->user_id = $request->user_id;
       $dokter->title_depan = $request->title_depan;
       $dokter->nama_dokter = $request->nama_dokter;
       $dokter->title_belakang = $request->title_belakang;
       $dokter->spesialis_id = $request->spesialis_id;
       $dokter->alamat = $request->alamat;
       $dokter->no_tlp = $request->no_tlp;
       $dokter->tempat_kerja = $request->tempat_kerja;
       $dokter->tahun_lulus = $request->tahun_lulus;
       $dokter->tgl_mulai_aktif = $request->tgl_mulai_aktif;
       $dokter->alumni_kampus = $request->alumni_kampus;
       $dokter->no_reg = $request->no_reg;
       $dokter->jenis_kelamin = $request->jenis_kelamin;
       $dokter->status = $request->status;

       $dokter->save();

        return redirect()->route('listdokter')->with('message', 'dokter berhasil diupdate!');
    }


    public function show(Request $request, $id)
    {
        $dokter = Dokter::find($id);
        $dokter->show($request->all());
        return view('backend.dokter.show_dokter', compact('dokter'));
    }

    public function destroy($id)
    {
        Dokter::destroy($id);
        return redirect('/list_dokter')->with('message_delete', 'dokter berhasil dihapus!');
    }

    public function getHistory($id)
    {
        $dokter = Dokter::findOrFail($id);
        $konsultasi = Konsultasi::where('dokter_id', $id)->get();

        return view('backend.dokter.history_dokter', compact('dokter', 'konsultasi', 'pasien'));
    }

    public function showRatingForm($id)
    {
        $dokter = Dokter::findOrFail($id);
        
        $rating = Rating::where('dokter_id', $id)->latest()->first();

        return view('backend.dokter.rating_dokter', compact('dokter', 'rating'));
    }



    public function storeRating(Request $request, $id)
    {
        $request->validate([
            'profesionalisme' => 'required|numeric|min:1|max:5',
            'konten' => 'required|numeric|min:1|max:5',
            'komunikasi' => 'required|numeric|min:1|max:5',
            'global_rating' => 'required|numeric|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        // Process and store the rating data
        $dokter = Dokter::findOrFail($id);

        $rating = new Rating();
        $rating->profesionalisme = $request->input('profesionalisme');
        $rating->konten = $request->input('konten');
        $rating->komunikasi = $request->input('komunikasi');
        $rating->global_rating = $request->input('global_rating');
        $rating->feedback = $request->input('feedback');
        $rating->dokter_id = $dokter->id_dokter; // Use the correct column name
        $rating->save();
        $rating->load('dokter'); // Mengambil relasi dokter yang terhubung dengan rating

        return redirect()->back()->with('success', 'Rating successfully submitted.')->with('rating', $rating);

    }


}
