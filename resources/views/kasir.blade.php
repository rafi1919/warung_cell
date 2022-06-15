    @extends('layouts.main')
    
    
    @section('main-sec')
    <div class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
            <span class="text">Kasir</span>
        </div>

        <!----===== Kasir Konten ===== -->

        <div class="kasir-content">

            <!----===== Input Kasir ===== -->

            <div class="form-group id">
                <span class="text">ID Barang</span>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>B001</option>
                    <option>B002</option>
                    <option>B003</option>
                    <option>B004</option>
                    <option>B005</option>
                </select>
                <div class="ket namabarang">
                    <span class="text">#namabarang </span>
                </div>
                <div class="ket sisabarang">
                    <span class="text">Sisa #</span>
                </div>
            </div>

            <div class="form-group jumlah">
                <span class="text jumlah">Jumlah Barang</span>
                <input type="number" class="form-control" id="input_jumlah_barang" min="1" max="100"
                    placeholder="1-100">
                <button type="button" class="btn btn-success tambah">Tambah</button>
                <button type="button" class="btn btn-success bayar">Bayar</button>
                <div class="text totalbayar">#Total Bayar</div>
            </div>

            <!----===== Table Kasir ===== -->

            <div class="input_table kasir">
                <table class="table table-bordered table-hover kasir">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">Id Nota</th>
                            <th scope="col">Id Admin</th>
                            <th scope="col">Id Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection