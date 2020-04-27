<?php

namespace App\Http\Controllers;

use App\tb_penawaranmk;
use App\tb_prodi;
use App\tb_matakuliaah;
use Illuminate\Http\Request;

class TbPenawaranmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_penawaranmk =tb_penawaranmk::all();
        return view('PenawaranMK.index',compact('all_penawaranmk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = tb_prodi::all();
        $matakuliah =tb_matakuliaah::all();
        return view('PenawaranMK.tambah',compact('prodi','matakuliah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $mk = new tb_penawaranmk;
            $mk->tahun_ajaran = $request->tahun_ajaran;
            $mk->semester = $request->semester;
            $mk->id_prodi = $request->id_prodi;
            $mk->id_matakuliah= $request->id_matakuliah;
            $mk->kelas= $request->kelas;
            $mk->save();
            return redirect('/penawaranmk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_penawaranmk  $tb_penawaranmk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $penawaranmk = tb_penawaranmk::find($id);
         return view('PenawaranMK.tampilkan',compact('penawaranmk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_penawaranmk  $tb_penawaranmk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_penawaranmk = tb_penawaranmk::find($id);
        $prodi = tb_prodi::all();
        $matakuliah = tb_matakuliaah::all();
         return view('PenawaranMK.editmk',compact('tb_penawaranmk','prodi','matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_penawaranmk  $tb_penawaranmk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_penawaranmk $tb_penawaranmk)
    {
                $tb_penawaranmk->tahun_ajaran = $request->tahun_ajaran;
                $tb_penawaranmk->semester = $request->semester;
                $tb_penawaranmk->id_prodi= $request->id_prodi;
                $tb_penawaranmk->id_matakuliah = $request->id_matakuliah;
                $tb_penawaranmk->kelas = $request->kelas;

                $tb_penawaranmk->save();
                return redirect('/penawaranmk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_penawaranmk  $tb_penawaranmk
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_penawaranmk $tb_penawaranmk,$id)
    {
        $penawaran = tb_penawaranmk::find($id);
        $penawaran->delete();
        $tb_penawaranmk->delete();
            return redirect('/penawaranmk');
    }
}
