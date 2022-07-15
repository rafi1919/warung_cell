@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Laporan Kategori</span>
    </div>
    <div class="input_btn">
        <!-- Button trigger modal -->
        <a href="/lap_kategori/cetak_kategori" target="_blank" class="btn btn-primary">
            Cetak Data
        </a>
    </div>
    <!-- Search Button -->
    <div class="input-group">
        <div class="col-xs-3"><input type="search" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
        </div>
        <div class="src_btn"><button type="button" class="btn btn-outline-primary">search</button>
        </div>
    </div>
    <!--Table Input Start-->
    <div class="input_table">
        <table class="table table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach($kategori as $row)
                <tr>
                    <td scope="col">{{ $no++ }}</td>
                    <td scope="col">{{ $row->nama_kategori }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    <!--Table Input Stop-->
    @endsection