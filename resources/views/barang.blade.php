    @extends('layouts.main')
    
    @section('main-sec')
    <section class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Stok barang</span>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary AddStok" data-bs-toggle="modal" data-bs-target="#modalAddBarang">
            Tambah Stok Barang
        </button>
        <!-- Tambah Stok modal -->
        <div class="modal fade" id="modalAddBarang" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Form Tambah Stok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/barang/store" enctype="multipart/form-data" method="POST">
    
                        @csrf
    
                    <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <label for="#">Kategori</label>
                                <select name="id_kategori" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Harga</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Harga" name="harga" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Stok</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Pcs</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Stok" name="stok" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Kategori-->
    @foreach($barang as $d)

    <div class="modal fade" id="modalEditBarang{{ $d->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Edit Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/barang/{{ $d->id }}/update" enctype="multipart/form-data" method="POST">
                
                    @csrf
                
                    <div class="modal-body">
                        <input type="hidden" value="{{ $d->id }}" name="id">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $d->nama_barang }}" class="form-control" placeholder="Nama Barang" required autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <label for="#">Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <option value="{{ $d->id_kategori }}">{{ $d->nama_kategori }}</option>
                                @foreach($kategori as $p)
                                <option value="{{ $p->id }}">{{ $p->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                </div>
                                <input type="number" class="form-control" value="{{ $d->harga }}" placeholder="Harga" name="harga" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Stok</label>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Pcs</span>
                                </div>
                                <input type="number" class="form-control" value="{{ $d->stok }}" placeholder="Stok" name="stok" required>
                            </div>
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
        <!-- Modal Hapus Barang-->
        @foreach($barang as $g)

        <div class="modal fade" id="modalHapusBarang{{ $g->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
    
                    <form action="/barang/{{ $g->id }}/destroy" enctype="multipart/form-data" method="GET">
                    
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
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($barang as $row)
                    <tr>
                        <td scope="col">{{ $no++ }}</td>
                        <td scope="col">{{ $row->nama_barang }}</td>
                        <td scope="col">{{ $row->nama_kategori }}</td>
                        <td scope="col">Rp {{ number_format($row->harga) }}</td>
                        <td scope="col">{{ $row->stok }} Pcs</td>
                        <td>
                            <a href="#modalEditBarang{{ $row->id }}" data-bs-toggle="modal" class="btn btn-primary btn-xs"><i class="bx bx-edit"></i>Edit</a>
                            <a href="#modalHapusBarang{{ $row->id }}" data-bs-toggle="modal" class="btn btn-danger btn-xs"><i class="bx bx-trash"></i>Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <!--Table Input Stop-->
    </section>
    @endsection