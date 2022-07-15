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
    <title>Cetak Laporan Admin</title>
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
                    LAPORAN DATA ADMIN
                </p>
                </hr>

                <table class="table table-bordered">
                    <tr>
                        <th scope="col">Id Admin</th>
                        <th scope="col">Nama Admin</th>
                        <th scope="col">Email Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($user as $item)
                    <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>