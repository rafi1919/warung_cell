<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Output;
use App\Models\Barang;
use App\Models\Kategori;


class OutputController extends Controller
{
    public function index()
    {
        $brg_klr = Output::join('barang', 'barang.id', '=', 'brg_klr.id_barang')
            ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('brg_klr.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
            ->get();

        $barang = Barang::all();

        return view('/output', compact('barang', 'brg_klr'));
    }

    public function create()
    {
        $barang =  Barang::all();

        return view('/outputbtn', compact('barang'));
    }

    public function ajax(Request $request)
    {
        $id_barang['id_barang'] = $request->id_barang;
        $ajax_barang            = Barang::where('id', $id_barang)->get();

        return view('/ajax', compact('ajax_barang'));
    }

    public function store(Request $request)
    {
        $barang = Barang::find($request->id_barang);

        if ($barang->stok < $request->jml_brg_klr) {
            return redirect('/output/create')->with('Error', 'Jumlah Barang Keluar Melebihi Stok');
        } else {
            Output::create([
                'no_brg_klr' => $request->no_brg_klr,
                'id_barang' => $request->id_barang,
                'tgl_brg_klr' => $request->tgl_brg_klr,
                'nama_barang' => $request->nama_barang,
                'jml_brg_klr' => $request->jml_brg_klr,
                'total' => $request->total,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $barang->stok -= $request->jml_brg_klr;
            $barang->save();

            return redirect('/output')->with('success', 'Data Berhasil Disimpan');
        }
    }
}
