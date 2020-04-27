<?php

namespace App\Http\Controllers;

use App\tb_dosen;
use App\tb_mahasiswa;
use App\tb_matakuliaah;
use App\tb_prodi;
use Illuminate\Http\Request;

class TbDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_dosen = tb_dosen::all();
        return view('Dosen.dosen', compact('all_dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dosen.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new tb_dosen;
        $dosen->id_prodi = $request->id_prodi;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = tb_dosen::find($id);
        return view('Dosen.tampilkan', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $tb_dosen = tb_dosen::find($id);
          return view('Dosen.editmk',compact('tb_dosen'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen = tb_dosen::find($id);
        $dosen->id_prodi = $request->id_dosen;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama;
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tb_mahasiswa = tb_mahasiswa::where('id_pa', '=', $id)->delete();
        $matkul = tb_matakuliaah::where('id_dosen', $id)->delete();
        $dosen = tb_dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }
}
