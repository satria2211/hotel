<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kamar;


class ControllerRoom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(kamar $kamar)
    {
        // $kamar  = DB::table('tb_kamar')->get();
        $kamar = kamar::all();
        return view('admin.kamar.kamar', ['kamar' => $kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        kamar::create([
            'jenis_kamar' => $request->jenis_kamar,
            'harga_kamar' => $request->harga_kamar,
            'foto_kamar' => $request->foto_kamar,
            'fasilitas' => $request->fasilitas,
        ]);
        // kamar::create($request->all());
        return redirect('/kamar')->with('status', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kamar $kamar)
    {
        $kamar = kamar::all();
        return view('admin.kamar.kamar', ['kamar' => $kamar]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $kamar = DB::table('tb_kamar')->where('id_kamar', $id)->get();
       return view('admin/kamar/ubah', ['kamar' => $kamar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tb_kamar')->where('id', $request->id)->update([
            'jenis_kamar' => $request->jenis_kamar,
            'harga_kamar' => $request->harga_kamar,
            'foto_kamar' => $request->foto_kamar,
            'fasilitas' => $request->fasilitas
        ]);
        return redirect('/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        kamar::find($id)->delete();
        
        return redirect('/kamar')->with('success', 'Data Telah dihapus');
       
    }

     public function destroy(kamar $kamar)
    {
        DB::table('tb_kamar')->where('id', $id)->delete();
        // $kamar = kamar::all();
        return redirect('/kamar');
    }
}
