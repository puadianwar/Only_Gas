<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Agen Dasbord</title>
    <style>
    /* Add your custom CSS styles here */

    body {

        font-family: 'Lato';

    }

    .adminbck {
        background-color: #343434;
    }

    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #333;
        padding-top: 20px;
    }

    .sidebar a {
        padding: 10px 20px;
        text-decoration: none;
        font-size: 18px;
        color: #fff;
        display: block;
    }

    .sidebar a:hover {
        background-color: #555;
    }

    .content {
        margin-left: 260px;
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('user.home') }}">Home</a>

        <a class=" mt-lg-5" href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="content">
        <div class="adminbck rounded px-3 py-2">
            <h1 class="text-white font-weight-bolder">Selamat Datang!</h1>
            <h5 class="text-white">{{ Auth::user()->name }}</h5>
        </div>

        @if (Session::get('success'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::get('failed'))
        <div class="alert alert-danger">
            <strong>Failed!</strong> {{ Session::get('failed') }}
        </div>
        @endif

        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data
                            Agen</h5>
                            <form action="{{ url('/postEditJual', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">nama pangkalan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="namaPangkalan" required value="{{ $data->namaPangkalan }}">
                                <span class="text-danger">
                                    @error('namaPangkalan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">harga</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="harga" required value="{{ $data->harga }}">
                                <span class="text-danger">
                                    @error('harga')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">stok</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="stok" required value="{{ $data->stok }}">
                                <span class="text-danger">
                                    @error('stok')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">No Telepon</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="notelp" required value="{{ $data->notelp }}">
                                <span class="text-danger">
                                    @error('notelp')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jenis persyaratan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="jenisPersyaratan" required value="{{ $data->jenisPersyaratan }}">
                                <span class="text-danger">
                                    @error('jenisPersyaratan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="tanggal" required value="{{ $data->tanggal }}">
                                <span class="text-danger">
                                    @error('tanggal')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">gambar pangkalan</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->gambar }}"
                                    disabled>
                                <input class="form-control" type="file" name="gambar">
                                <div class="form-text">Maksimal ukuran
                                    gambar pangakalan 5MB</div>
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->gambar) }}"
                                    alt="gambar pangkalan">
                            </div><br>                           
                            <button type="submit" class="btn btn-success mt-5">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>