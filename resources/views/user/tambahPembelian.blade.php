<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('user.halamanUser') }}">
            <i class="bi-arrow-left h1"></i>
        </a>

        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tambah Data</h5>
                        <form action="{{ route('postTambahPembelian') }}" method="POST">
                            @csrf

                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Pembeli</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="idUser" required value="{{ old('idUser') }}">
                                <span class="text-danger">
                                    @error('idUser')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Pangkalan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="id_jual" required value="{{ old('id_jual') }}">
                                <span class="text-danger">
                                    @error('id_jual')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal Pembelian</label>
                                <input type="date" class="form-control border border-secondary form-control"
                                    name="tanggal_beli" required value="{{ old('tanggal_beli') }}">
                                <span class="text-danger">
                                    @error('tanggal_beli')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal Pengambilan</label>
                                <input type="date" class="form-control border border-secondary form-control"
                                    name="tanggal_ambil" required value="{{ old('tanggal_ambil') }}">
                                <span class="text-danger">
                                    @error('tanggal_ambil')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <button type="submit" class="btn btn-success mt-5">Tambah Data Pembelian</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
