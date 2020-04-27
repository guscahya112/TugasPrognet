<?php

namespace App\Http\Controllers;

use App\tb_mahasiswa;
use App\tb_prodi;
use App\tb_dosen;
use Illuminate\Http\Request;

class TbMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_mahasiswa = tb_mahasiswa::with('pa', 'prodi')->get();
        return view('Mahasiswa.mahasiswa',compact('all_mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = tb_dosen::all();
        $prodi = tb_prodi::all();
        return view('Mahasiswa.tambah', compact('dosen', 'prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $mhs = new tb_mahasiswa();
            $mhs->id_prodi = $request->id_prodi;
            $mhs->nama = $request->nama;
            $mhs->nim = $request->nim;
            $mhs->alamat = $request->alamat;
            $mhs->email = $request->email;
            $mhs->tempat_lahir = $request->tempat_lahir;
            $mhs->tanggal_lahir = $request->tanggal_lahir;
            $mhs->id_pa = $request->id_prodi;
            $mhs->save(); 
            return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_mahasiswa  $tb_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = tb_mahasiswa::find($id);
        $prodi = tb_prodi::all();
        $dosen = tb_dosen::all();
        return view('Mahasiswa.tampilkan', compact('mahasiswa', 'prodi', 'dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_mahasiswa  $tb_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_mahasiswa = tb_mahasiswa::find($id);
        return view('Mahasiswa.editmk', compact('tb_mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_mahasiswa  $tb_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $mahasiswa = tb_mahasiswa::find($id);
         $mahasiswa->id = $request->id;
         $mahasiswa->id_prodi= $request->id_prodi;
         $mahasiswa->nim = $request->nim;
         $mahasiswa->nama = $request->nama;
         $mahasiswa->alamat = $request->alamat;
         $mahasiswa->email = $request->email;
         $mahasiswa->tempat_lahir= $request->tempat_lahir;
         $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
         $mahasiswa->id_pa = $request->id_pa;
         $mahasiswa->save();
                return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_mahasiswa  $tb_mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tb_mahasiswa = tb_mahasiswa::find($id);
         $tb_mahasiswa->delete();
            return redirect('/mahasiswa');
    }
}
