<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Input;
use App\Models\Output;
use App\Models\User;
use App\Models\Kategori;

class LaporanController extends Controller
{
    public function lap_user()
    {
        $user = User::all();

        return view('/lap_user', compact('user'));
    }

    public function cetak_user()
    {
        $user = User::all();

        return view('/cetak_user', compact('user'));
    }

    public function lap_kategori()
    {
        $kategori = Kategori::all();

        return view('/lap_kategori', compact('kategori'));
    }

    public function cetak_kategori()
    {
        $kategori = Kategori::all();

        return view('/cetak_kategori', compact('kategori'));
    }

    public function lap_barang()
    {
        $barang = Barang::join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('barang.*', 'kategori.nama_kategori')
            ->get();

        return view('/lap_barang', compact('barang'));
    }

    public function cetak_barang()
    {
        $barang = Barang::join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('barang.*', 'kategori.nama_kategori')
            ->get();

        return view('/cetak_barang', compact('barang'));
    }

    public function lap_brg_msk()
    {
        $brg_msk = Input::join('barang', 'barang.id', '=', 'brg_msk.id_barang')
            ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('brg_msk.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
            ->get();

        return view('/lap_brg_msk', compact('brg_msk'));
    }

    public function cetak_brg_msk(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_selesai = $request->tgl_selesai;

        if ($tgl_mulai and $tgl_selesai) {
            $brg_msk = Input::join('barang', 'barang.id', '=', 'brg_msk.id_barang')
                ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
                ->select('brg_msk.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
                ->whereBetween('brg_msk.tgl_brg_msk', [$tgl_mulai, $tgl_selesai])
                ->get();

            $sum_total = Input::whereBetween('tgl_brg_msk', [$tgl_mulai, $tgl_selesai])
                ->sum('total');
        } else {
            $brg_msk = Input::join('barang', 'barang.id', '=', 'brg_msk.id_barang')
                ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
                ->select('brg_msk.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
                ->get();
        }

        return view('/cetak_brg_msk', compact('brg_msk', 'sum_total', 'tgl_mulai', 'tgl_selesai'));
    }

    public function lap_brg_klr()
    {
        $brg_klr = Output::join('barang', 'barang.id', '=', 'brg_klr.id_barang')
            ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
            ->select('brg_klr.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
            ->get();

        return view('/lap_brg_klr', compact('brg_klr'));
    }

    public function cetak_brg_klr(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_selesai = $request->tgl_selesai;

        if ($tgl_mulai and $tgl_selesai) {
            $brg_klr = Output::join('barang', 'barang.id', '=', 'brg_klr.id_barang')
                ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
                ->select('brg_klr.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
                ->whereBetween('brg_klr.tgl_brg_klr', [$tgl_mulai, $tgl_selesai])
                ->get();

            $sum_total = Output::whereBetween('tgl_brg_klr', [$tgl_mulai, $tgl_selesai])
                ->sum('total');
        } else {
            $brg_klr = Output::join('barang', 'barang.id', '=', 'brg_klr.id_barang')
                ->join('kategori', 'kategori.id', '=', 'barang.id_kategori')
                ->select('brg_klr.*', 'kategori.nama_kategori', 'barang.harga', 'barang.nama_barang')
                ->get();
        }

        return view('/cetak_brg_klr', compact('brg_klr', 'sum_total', 'tgl_mulai', 'tgl_selesai'));
    }
}
