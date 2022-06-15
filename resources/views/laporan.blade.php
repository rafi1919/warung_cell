@extends('layouts.main')
@section('main-sec')
<div class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Laporan Transaksi</span>
    </div>
    <!-- Search Button -->
    <div class="input-group">
        <div class="col-xs-3"><input type="search" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
        </div>
        <div class="src_btn"79><button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
    <!--Table Input Start-->
    <div class="input_table">
        <table class="table table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Keluar</th>
                    <th scope="col">Id Barang</th>
                    <th scope="col">Id User</th>
                    <th scope="col">Jumlah Barang Keluar</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>001</td>
                    <th>B001</th>
                    <td>A001</td>
                    <td>80</td>
                    <td>80</td>
                    <td><a href="#" class="btn btn-primary btn-xs"><i class="bx bx-edit"></i>Edit</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--Table Input Stop-->
</div>
@endsection