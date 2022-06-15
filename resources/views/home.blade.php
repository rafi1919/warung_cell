@extends('layouts.main')

@section('main-sec')
  <div class="home-section">
    <div class="home-content">
      <i class="bx bx-menu"></i>
      <span class="text">Dashboard</span>
    </div>

    <!----======== BOXES KONTEN ======== -->
    <div class="dash-content">
      <div class="overview">

        <div class="boxes">
          <div class="box box1">
            <i class="uil uil-bill"></i>
            <span class="text">Total Pendapatan</span>
            <span class="number">50.000</span>
          </div>
          <div class="box box2">
            <i class="uil uil-shopping-basket"></i>
            <span class="text">Stok Tersedia</span>
            <span class="number">142</span>
          </div>
          <div class="box box3">
            <i class="uil uil-invoice"></i>
            <span class="text">Barang Keluar</span>
            <span class="number">32</span>
          </div>
        </div>

      </div>
      <!----======== BOXES KONTEN STOP ======== -->
      <div class="activity">
        <div class="home-content">
          <span class="text">Data Admin</span>
        </div>
        <!----======== TABEL DATA ADMIN ======== -->
      </div>
      <div class="input_table activity">
        <table class="table table-bordered table-hover">
          <thead class="table-header">
            <tr>
              <th scope="col">Id Admin</th>
              <th scope="col">Nama Admin</th>
              <th scope="col">Email</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">A001</th>
              <td>Lama Ga Jumpa</td>
              <td>lamajugaya@elon.com</td>
              <td>
                <button type="button" class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-primary">Edit</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!----======== TABEL DATA ADMIN STOP ======== -->
      <div class="activity">
        <div class="home-content">
          <span class="text">Aktivitas Admin</span>
        </div>
        <!----======== TABEL AKTIVITAS ADMIN ======== -->
      </div>
      <div class="input_table activity">
        <table class="table table-bordered table-hover">
          <thead class="table-header">
            <tr>
              <th scope="col">Id Admin</th>
              <th scope="col">Nama Admin</th>
              <th scope="col">Waktu Login</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">A001</th>
              <td>Lama Ga Jumpa</td>
              <td>2022-5-21</td>
              <td>lamajugaya@elon.com</td>
              <td>Aktif</td>
              <td>
                <button type="button" class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-primary">Edit</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!----======== TABEL AKTIVITAS ADMIN STOP ======== -->
    </div>
  </div>
@endsection
