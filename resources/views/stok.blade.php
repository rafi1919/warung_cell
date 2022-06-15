    @extends('layouts.main')
    
    @section('main-sec')
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Stok barang</span>
        </div>
        <!-- Search Button -->
        <div class="input-group">
            <div class="col-xs-3">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
            </div>
            <div class="src_btn">
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </div>
        <!--Table Input Start-->
        <div class="input_table">
            <table class="table table-bordered table-hover">
                <thead class="table-header">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="row">B001</th>
                        <td>Minyak Goreng</td>
                        <td>Pcs</td>
                        <td>Kebutuhan Hidup</td>
                        <td>10000</td>
                        <td>10</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="bx bx-edit"></i>Edit</a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--Table Input Stop-->
    </section>
    @endsection