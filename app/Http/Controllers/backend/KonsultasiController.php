<?php

namespace App\Http\Controllers\backend;

use Barryvdh\DomPDF\PDF;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\LogOptions;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Traits\LogsActivity;

class KonsultasiController extends Controller
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded();
        // Chain fluent methods for configuration options
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $konsultasi = DB::table('konsultasi')->get();
        return view('backend.konsultasi.list_konsultasi', ['konsultasi' => $konsultasi]);
    }

    // destroy
    public function destroy(int $id)
    {
        Konsultasi::destroy($id);
        return redirect('/list_konsultasi')->with('message_delete', 'Konsultasi berhasil dihapus!');
    }

    // public function cetak_pdf()
    // {
    // 	$konsultasi = Konsultasi::all();
 
    // 	$pdf = PDF::loadview('konsultasi_pdf',['konsultasi'=>$konsultasi]);
    // 	return $pdf->download('laporan-konsultasi.pdf');
    // }
}
