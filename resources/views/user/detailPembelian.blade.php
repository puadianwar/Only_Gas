<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Detail Pembelian</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('user.halamanUser') }}">
            <i class="bi-arrow-left h1"></i>
        </a>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Detail Pembelian</h5>

                        <div class="text-center">
                            <img class="rounded mt-5 mb-5" style="width: 200px"
                                src="{{ asset('images/' . $detailPembelian->gambar) }}" alt="cover buku">
                        </div>

                        <div class="row text-center">
                            <div class="col"></div>
                            <div class="col-12">
                                <input class="form-control mb-3 text-center" type="text"
                                    value="ID Pembelian: {{ $detailPembelian->id }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Tanggal Pembelian: {{ $detailPembelian->tanggal_beli }}" disabled
                                    readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Tanggal Pengembalian: {{ $detailPembelian->tanggal_ambil }}" disabled
                                    readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Status Pengembalian: {{ $detailPembelian->status }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="ID pembeli: {{ $detailPembelian->id_user }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Nama pembeli: {{ $detailPembelian->name }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Email pembeli: {{ $detailPembelian->email }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="id Pangkalan: {{ $detailPembelian->id_jual }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="Kode Buku: {{ $detailPembelian->kode_buku }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="nama pangkalan: {{ $detailPembelian->namaPangkalan }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="jenisPersyaratan: {{ $detailPembelian->jenisPersyaratan }}" disabled readonly>
                                <input class="form-control mb-3 text-center" type="text"
                                    value="lokasi: {{ $detailPembelian->lokasi }}" disabled readonly>
                                
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
