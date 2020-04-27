<?php

namespace App\Http\Controllers;

use App\tb_krs;
use App\tb_mahasiswa;
use App\tb_penawaranmk;

use Illuminate\Http\Request;

class TbKrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $all_krs = tb_krs::all();
        return view('KRS.krs', compact('all_krs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa    = tb_mahasiswa::all();
        $penawaranmk  = tb_penawaranmk::all();
        return view('KRS.tambah', compact('mahasiswa', 'penawaranmk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $krs = new tb_krs;
        $krs->id_mahasiswa = $request->id_mahasiswa;
        $krs->nip_penawaran_mk = $request->tb_penawaran_mk;
        $krs->nilai_huruf = $request->nilai_huruf;
        $krs->save();
        return redirect('/krs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_krs  $tb_krs
     * @return \Illuminate\Http\Response
     */
    public function show(tb_krs $tb_krs)
    {
        
        return view('KRS.tampilkan', compact('tb_krs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_krs  $tb_krs
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_krs $tb_krs)
    {
        
          return view('KRS.editmk',compact('tb_krs'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_krs  $tb_krs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_krs $tb_krs)
    {
        $krs = tb_krs::find($id);
        $krs->id_mahasiswa = $request->id_mahasiswa;
        $krs->id_penawarn_mk = $request->id_penawarn_mk;
        $krs->nilai_huruf = $request->nilai_huruf;
        $krs->save();
        return redirect('/tb_krs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_krs  $tb_krs
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_krs $tb_krs)
    {
          $krs->delete();
            return redirect('/tb_krs');
    }
}
