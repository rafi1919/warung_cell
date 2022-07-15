<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;
use App\Models\Barang;
use App\Models\Kategori;

date_default_timezone_set('Asia/Jakarta');

class InputController extends Controller
{
    public function index()
    {
        $brg_msk = Input::join('barang', 'barang.id', '=', 'brg_msk.id_barang')
            ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('brg_msk.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
            ->get();

        $barang = Barang::all();

        return view('/input', compact('barang', 'brg_msk'));
    }

    public function create()
    {
        $barang =  Barang::all();

        return view('/inputbtn', compact('barang'));
    }

    public function ajax(Request $request)
    {
        $id_barang['id_barang'] = $request->id_barang;
        $ajax_barang            = Barang::where('id', $id_barang)->get();

        return view('/ajax', compact('ajax_barang'));
    }

    public function store(Request $request)
    {
        Input::create([
            'no_brg_msk' => $request->no_brg_msk,
            'id_barang' => $request->id_barang,
            'tgl_brg_msk' => $request->tgl_brg_msk,
            'nama_barang' => $request->nama_barang,
            'jml_brg_msk' => $request->jml_brg_msk,
            'total' => $request->total,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $barang = Barang::find($request->id_barang);

        $barang->stok += $request->jml_brg_msk;
        $barang->save();

        return redirect('/input')->with('success', 'Data Berhasil Disimpan');
    }
}
