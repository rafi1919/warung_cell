    @extends('layouts.main')
    
    @section('main-sec')
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Barang Masuk</span>
        </div>
        <div class="input_btn">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="input_nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="input_nama_barang" placeholder="Permen Relaxa">
                        </div>
                        <div class="mb-3">
                            <label for="input_jumlah_barang" class="form-label">Jumlah Barang</label>
                            <input type="number" class="form-control" id="input_jumlah_barang" min="1" max="100"
                                placeholder="1-100">
                        </div>
                        <div class="mb-3">
                            <label for="input_tanggal_masuk" class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="input_tanggal_barang" placeholder="2022-03-01">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Table Input Start-->
        <div class="input_table">
            <table class="table table-bordered table-hover">
                <thead class="table-header">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Masuk</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Id User</th>
                        <th scope="col">Jumlah Barang Masuk</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">001</td>
                        <th scope="row">B001</th>
                        <td> A5\0001</td>
                        <td>3</td>
                        <td>40</td>
                        <td><a href="#" class="btn btn-primary btn-xs"><i class="bx bx-edit"></i>Edit</a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--Table Input Stop-->
        @endsection