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
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>
@endsection
