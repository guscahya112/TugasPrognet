<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_mahasiswa = mahasiswa::with('prodi')->get();
        return view('Mahasiswa.view',compact('all_mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $prodi = prodi::all();
        return view('Mahasiswa.tambah', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $mhs = new mahasiswa();
            
            $mhs->nama = $request->nama;
            $mhs->nim = $request->nim;
            $mhs->jenis_kelamin = $request->jenis_kelamin;
            $mhs->alamat = $request->alamat;
            $mhs->id_prodi = $request->id_prodi;
            $mhs->save(); 
            return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswa::with('prodi')->find($id);
        return view('Mahasiswa.tampilkan', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $mahasiswa = mahasiswa::find($id);
        return view('Mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $mahasiswa = mahasiswa::find($id);
         $mahasiswa->id = $request->id;
         $mahasiswa->nama = $request->nama;
         $mahasiswa->nim = $request->nim;
         $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
         $mahasiswa->alamat = $request->alamat;
         $mahasiswa->id_prodi= $request->id_prodi;
         $mahasiswa->save();
                return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
         $mahasiswa->delete();
            return redirect('/mahasiswa');
    }
}
