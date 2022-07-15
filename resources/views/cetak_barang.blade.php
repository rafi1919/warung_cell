<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Barang</title>
</head>
<body style="background-color: white" onload="window.print()">

    <style>
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table style="width: 100%;">
                <tr>
                    <td align="center">
                        <span style="line-height: 1.6; font-weight: bold;">
                        SISTEM INVENTORY
                    <br>WARUNG CELL</span>
                    </td>
                </tr>
                </table>

                <hr class="line-title">
                <p align="center">
                    LAPORAN DATA Barang
                </p>
                </hr>

                <table class="table table-bordered">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
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
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>