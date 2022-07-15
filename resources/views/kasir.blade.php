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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </div>
    @endsection