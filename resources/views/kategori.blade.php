@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Kategori</span>
    </div>
    <div class="input_btn">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddKategori">
            Tambah Kategori
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
    <!-- Modal Add Kategori-->
    <div class="modal fade" id="modalAddKategori" tabindex="-1" aria-labelledby="KategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="KategoriModalLabel">Form Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/kategori/store" enctype="multipart/form-data" method="POST">
                
                    @csrf
                
                    <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" required autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Kategori-->
    @foreach($kategori as $d)

    <div class="modal fade" id="modalEditKategori{{ $d->id }}" tabindex="-1" aria-labelledby="KategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="KategoriModalLabel">Form Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/kategori/{{ $d->id }}/update" enctype="multipart/form-data" method="POST">
                
                    @csrf
                
                    <div class="modal-body">

                        <input type="hidden" value="{{ $d->id }}" name="id" required>
                    
                        <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{ $d->nama_kategori }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @endforeach
        <!-- Modal Hapus Kategori-->
        @foreach($kategori as $g)

        <div class="modal fade" id="modalHapusKategori{{ $g->id }}" tabindex="-1" aria-labelledby="KategoriModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="KategoriModalLabel">Hapus Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    
                    <form action="/kategori/{{ $g->id }}/destroy" enctype="multipart/form-data" method="GET">
                    
                        @csrf
                    
                        <div class="modal-body">
    
                            <input type="hidden" value="{{ $g->id }}" name="id" required>
                        
                            <div class="form-group">
                                <h4>Apakah anda yakin ingin menghapus data ini?</h4>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    
        @endforeach
    <!--Table Input Start-->
    <div class="input_table">
        <table class="table table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1; @endphp
                @foreach($kategori as $row)
                <tr>
                    <td scope="col">{{ $no++ }}</td>
                    <td scope="col">{{ $row->nama_kategori }}</td>
                    <td><a href="#modalEditKategori{{ $row->id }}" data-bs-toggle="modal" class="btn btn-primary btn-xs"><i class="bx bx-edit"></i>Edit</a>
                        <a href="#modalHapusKategori{{ $row->id }}" data-bs-toggle="modal" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    <!--Table Input Stop-->
    @endsection