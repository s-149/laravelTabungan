<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rekapitulasitabungan;
use App\Models\siswa;
use App\Models\User;
use App\Models\tabunganmasuk;
use App\Models\tabungankeluar;

class RekapitulasitabunganController extends Controller
{
    public function index()
    {

        return view('page.rekapitulasitabungan.index', [
            'title' => 'Rekapitulasi',
            'siswa' => siswa::all(),
            // 'tabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->get(),
            // 'totaltabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->sum('masuk'),
            // 'tabungankeluar' => tabungankeluar::where('siswa_id', $id)->get(),
            // 'totaltabungankeluar' => tabungankeluar::where('siswa_id', $id)->sum('keluar')
        ]);

        //  $siswa = User::all();
        //  $tabunganmasuk = tabunganmasuk::all();
        //  $tabungankeluar = tabungankeluar::all();

        //  foreach ($siswa as $siswa){

        //  }

        // return view('page.rekapitulasitabungan.index', [
        //     'title' => 'Rekapitulasi',
        //     'user' => User::all(),
        //     'siswa' => siswa::all(),
        //     'tabunganmasuk' => tabunganmasuk::all(),
        //     'tabungankeluar' => tabungankeluar::all()
        // ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page.siswa.show', [
            'title' => 'Read',
            'siswa' => siswa::find($id),
            'tabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->get(),
            'totaltabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->sum('masuk'),
            'tabungankeluar' => tabungankeluar::where('siswa_id', $id)->get(),
            'totaltabungankeluar' => tabungankeluar::where('siswa_id', $id)->sum('keluar')
        ]);
    } 
    public function cetak()
    {
        return view('page.rekapitulasitabungan.cetak', [
            'title' => 'Cetak Data',
            'siswa' => siswa::all()
        ]);
    }
}
         