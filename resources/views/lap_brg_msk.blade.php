@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Laporan Barang Masuk</span>
    </div>
    <div class="input_btn">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCetak">
            Cetak Data
        </button>
    </div>
    <!-- Search Button -->
    <div class="input-group">
        <div class="col-xs-3"><input type="search" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
        </div>
        <div class="src_btn"><button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
    </div>
    <!--Table Input Start-->
    <div class="input_table">
        <table  class="table table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Barang Masuk</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($brg_msk as $row)
                <tr>
                    <td>{{  $no++ }}</td>
                    <td>{{ $row->no_brg_msk }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->nama_kategori }}</td>
                    <td>{{ date('d F Y', strtotime($row->tgl_brg_msk)) }}</td>
                    <td>Rp. {{ number_format($row->harga) }}</td>
                    <td>{{ $row->jml_brg_msk }} Pcs</td>
                    <td>Rp. {{ number_format($row->total) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    <!--Table Input Stop-->
    <!-- Tambah Stok modal -->
    <div class="modal fade" id="modalCetak" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal">Cetak Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/lap_brg_msk/cetak_brg_msk" enctype="multipart/form-data" method="GET" target="_blank">

                    @csrf

                <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" name="tgl_mulai" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cetak Data</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endsection