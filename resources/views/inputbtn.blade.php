@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">

    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Barang Masuk</span>
    </div>

    <!----===== Kasir Konten ===== -->

    <div class="kasir-content">

        <!----===== Input Kasir ===== -->
        <form action="/input/store" method="POST" enctype="multipart/form-data">
        
            @csrf

        <div class="form-group id">
            <span class="text">No Barang Masuk</span>
            <input type="text" class="form-control" name="no_brg_msk" placeholder="Nomor Barang Masuk" required>
        </div>

        <div class="form-group id">
            <span class="text">Tanggal Masuk</span>
            <input type="date" class="form-control" name="tgl_brg_msk" required>
        </div>

        <div class="form-group id">
            <span class="text">Nama Barang</span>
            <select class="form-control" name="id_barang" id="id_barang" required>
                <option value="" hidden="">-- Pilih Barang --</option>
                @foreach($barang as $d)
                <option value="{{ $d->id }}">{{ $d->nama_barang }}</option>
                @endforeach
            </select>
        </div>

        <div id="detail_barang"></div>

        <div class="form-group id">
            <span class="text">Jumlah Barang</span>
            <input type="number" class="form-control" name="jml_brg_msk" id="jml_brg_msk" placeholder="Pcs" required>
        </div>

        <div class="form-group id">
            <span class="text">Total Harga</span>
            <input type="text" class="form-control" id="total" name="total"
                placeholder="Total Harga" required readonly>

            <button type="submit" class="btn btn-success tambah">Tambah</button>
            <a href="/input" class="btn btn-danger bayar mt-1">Kembali</a>
        </div>
    </form>
</div>

</section>


<script type="text/javascript" src="{{ url('js/jquery.3.3.1.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#jml_brg_msk").keyup(function() {
            var jml_brg_msk = $("#jml_brg_msk").val();
            var harga       = $("#harga").val();

            var total = parseInt(harga) * parseInt(jml_brg_msk);
            $("#total").val(total);
        });
    });
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script type="text/javascript">
    $("#id_barang").change(function(){
        var id_barang = $("#id_barang").val();
        $.ajax({
            type: "GET",
            url: "/input/ajax",
            data: "id_barang="+id_barang,
            cache: false,
            success: function(data){
                $('#detail_barang').html(data);
            }
        });
    });
</script>

@endsection