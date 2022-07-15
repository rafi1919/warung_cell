@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Admin</span>
    </div>
    <div class="input_btn">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Admin
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
    {{-- alert --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- Modal Admin Store-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/register" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Admin</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Admin" required value="{{ old('name') }}" autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Admin</label>
                            <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Jakajoko@joki.com" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Admin Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal">Form Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post" id="editForm">

                    @csrf

                <div class="modal-body">
    
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Admin</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Admin</label>
                            <input type="email" name="email"  class="form-control" id="email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--Table Input Start-->
    <div class="input_table">
        <table class="table table-bordered table-hover">
            <thead class="table-header">
                <tr>
                    <th scope="col">Id Admin</th>
                    <th scope="col">Nama Admin</th>
                    <th scope="col">Email Admin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($data_admin as $item)
                <tr>
                    <td scope="row">{{ $no++ }}</td>
                    <th scope="row">{{ $item->name }}</th>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a class="btn btn-primary" href="/editadmin/{{ $item->id }}">
                        <i class="bx bx-edit"></i>Edit
                    </a>
                        <a href="/deletedata/{{ $item->id }}" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
</section>
    <!--Table Input Stop-->
    @endsection