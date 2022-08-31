<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\KeranjangModel;
use App\ObatModel;
use App\PasienModel;

class keranjang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = PasienModel::all();
        $obat = ObatModel::all();
        $keranjang = KeranjangModel::all();

        return view('tindakan.index', compact('keranjang', 'obat', 'pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = ObatModel::all();
        $keranjang = KeranjangModel::all();
        return view('Keranjang.keranjang', compact('keranjang', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KeranjangModel::create([
            'id_obat' => $request->id_obat,
            'jumlah' => $request->jumlah
            // 'total' => $request->total
        ]);

        // return redirect('/tindakan')->with('success', 'Permintaan anda sedang di proses!');
        $keranjang = KeranjangModel::with('obat')->get();
        // $obat = ObatModel::all();
        // dd($keranjang[0]->obat->nama_obat/);
        // return redirect('tindakan/lanjuttindakan');
        return view('Keranjang.tambah_keranjang', compact('keranjang'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = ObatModel::all();
        $keranjang = KeranjangModel::find($id);
        return view('Keranjang.edit', compact('obat', 'keranjang'));

        // $keranjang = KeranjangModel::with('obat')->get();
        // return view('Keranjang.edit', compact('keranjang','keranjangs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keranjang = KeranjangModel::find($id);
        $keranjang->id_obat = $request->id_obat;
        $keranjang->jumlah = $request->jumlah;
        $keranjang->save();

        return redirect('/keranjang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = KeranjangModel::find($id);
        $keranjang->delete();

        return redirect('/keranjang');
    }
}