<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Cetak Data Pembelian</title>
</head>

<body>
    <table align="center">
        <tr>
            <td>
                <img src="{{ public_path('images/POLBENG.png') }}" alt="logoKopSurat" style="width: 100px; margin-right: 20px">
            </td>
        </tr>
    </table>

    <table align="center">
        <tr>
            <td style="width: 1000px">
                <hr>
            </td>
        </tr>
    </table>

    <div class="form-group">
        <p align="center" style="font-size: 16pt; margin-top: 10px"><b>Laporan Data Pembelian</b></p>
        <table class="table table-striped" align="center" rules="all" border="1px" style="width: 95%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal beli</th>
                    <th>Tanggal ambil</th>
                    <th>Nama Pembeli</th>
                    <th>Nama Pangkalan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pembeli)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembeli->tanggal_beli }}</td>
                        <td>{{ $pembeli->tanggal_ambil }}</td>
                        <td>{{ $pembeli->namaLengkap }}</td>
                        <td>{{ $pembeli->namaPangkalan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
