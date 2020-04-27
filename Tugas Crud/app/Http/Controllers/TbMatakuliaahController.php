<?php

namespace App\Http\Controllers;

use App\tb_matakuliaah;
use App\tb_dosen;
use App\tb_prodi;
use App\tb_kurikulum;
use DB;
use Illuminate\Http\Request;

class TbMatakuliaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_tb_matakuliaah = tb_matakuliaah::with('tb_dosen', 'tb_kurikulum', 'tb_prodi')->get();
        return view('Matakuliah.tb_matakuliaah',compact('all_tb_matakuliaah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosens = tb_dosen::all();
        $kurikulums = tb_kurikulum::all();
        $prodis = tb_prodi::all();
        return view('Matakuliah.tambah', compact('dosens', 'kurikulums', 'prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $mk = new tb_matakuliaah;
            $mk->kode_matakuliah = $request->kode_matakuliah;
            $mk->nama_matakuliah = $request->nama_matakuliah;
            $mk->sks = $request->sks;
            $mk->semester = $request->semester;
            $mk->id_kurikulum = $request->id_kurikulum;
            $mk->id_dosen = $request->id_dosen;
            $mk->id_prodi = $request->id_prodi;

            $mk->save();
            return redirect('/matakuliaah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_matakuliaah  $tb_matakuliaah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tb_matakuliaah = tb_matakuliaah::find($id)->first();
       $tb_dosen = tb_dosen::all();
       $tb_prodi = tb_prodi::all();
       $tb_kurikulum = tb_kurikulum::all();
       
         return view('Matakuliah.tampilkan', compact('tb_matakuliaah','tb_prodi','tb_kurikulum','tb_dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_matakuliaah  $tb_matakuliaah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $kurikulums = tb_kurikulum::all();
        $dosens = tb_dosen::all();
        $prodis = tb_prodi::all();
        $matakuliaah = tb_matakuliaah::find($id);
         return view('Matakuliah.editmk', compact('matakuliaah', 'dosens', 'prodis', 'kurikulums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_matakuliaah  $tb_matakuliaah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $matakuliaah = tb_matakuliaah::find($id);
        $matakuliaah->kode_matakuliah = $request->kode_matakuliah;
        $matakuliaah->nama_matakuliah = $request->nama_matakuliah;
        $matakuliaah->sks = $request->sks;
        $matakuliaah->semester = $request->semester;
        $matakuliaah->id_kurikulum = $request->id_kurikulum;
        $matakuliaah->id_dosen = $request->id_dosen;
        $matakuliaah->id_prodi = $request->id_prodi;
        $matakuliaah->save();
        return redirect('/matakuliaah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_matakuliaah  $tb_matakuliaah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matakuliaah = tb_matakuliaah::find($id);
        $matakuliaah->delete();
        return redirect('/matakuliaah');
    }
}
