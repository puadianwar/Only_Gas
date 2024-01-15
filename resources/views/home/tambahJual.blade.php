<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin Dashboard</title>

    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet" >
    <style>
    /* Add your custom CSS styles here */

    
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Only Gas</a>

          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home.jual') }}">
                    <i class="fas fa-tachometer-alt"></i> Home
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">
                    <i class="fas fa-user"></i> Data Pembeli
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home.jual') }}">
                    <i class="fas fa-shopping-cart"></i> Data Penjualan Agen
                </a>
              </li>
              
            </a></div>     
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- end --}}
    
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
                        <h5 class="card-title text-center">Menambahkan Data Penjualan</h5>
                        <form action="{{ route('postTambahJual') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Pangkalan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="namaPangkalan" required value="{{ old('namaPangkalan') }}">
                                <span class="text-danger">
                                    @error('namaPangkalan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Harga</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="harga" required value="{{ old('harga') }}">
                                <span class="text-danger">
                                    @error('harga')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">stok</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="stok" required value="{{ old('stok') }}">
                                <span class="text-danger">
                                    @error('stok')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">No Telepon</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="notelp" required value="{{ old('notelp') }}">
                                <span class="text-danger">
                                    @error('notelp')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jenis Persyaratan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="jenisPersyaratan" required value="{{ old('jenisPersyaratan') }}">
                                <span class="text-danger">
                                    @error('jenisPersyaratan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">tanggal</label>
                                <input type="date" class="form-control border border-secondary form-control"
                                    name="tanggal" required value="{{ old('tanggal') }}">
                                <span class="text-danger">
                                    @error('tanggal')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">lokasi</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="lokasi" required value="{{ old('lokasi') }}">
                                <span class="text-danger">
                                    @error('lokasi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>


                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">gambar Pangkalan</label>
                                <input class="form-control" type="file" name="gambar">
                                <div class="form-text">Maksimal ukuran
                                    gambar 5MB
                                </div>
                            </div><br>
                
                            <button type="submit" class="btn btn-success mt-5 text-center">
                                <i class="fas fa-plus"> Tambah</i></button>
                        </form>

                    </div>

                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>