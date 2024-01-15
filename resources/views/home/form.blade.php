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

              

              

              
              
            </a></div>     
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- end --}}

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
                <div class="card mt-4" style="width: 400px">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Pendaftaran Pembelian Gas LPG</h5>
                        <form action="{{ route('postTambahForm') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Lengkap</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="namaLengkap" required value="{{ old('namaLengkap') }}">
                                <span class="text-danger">
                                    @error('namaLengkap')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
            
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">NIK </label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="nik" required value="{{ old('nik') }}">
                                <span class="text-danger">
                                    @error('nik')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jumlah Pemesanan </label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="jumlahBeli" required maxlength="1" required value="{{ old('jumlahBeli') }}">
                                <span class="text-danger">
                                    @error('jumlahBeli')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">No Telepon</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="No_telp" required value="{{ old('No_telp') }}">
                                <span class="text-danger">
                                    @error('No_telp')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Alamat</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="alamat" required value="{{ old('alamat') }}">
                                <span class="text-danger">
                                    @error('alamat')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>


                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">gambar KTP/KK</label>
                                <input class="form-control" type="file" name="gambar">
                                <div class="form-text">Maksimal ukuran
                                    gambar 5MB
                                </div>
                            </div>
                
                            <button type="submit" class="btn btn-success mt-2 mx-auto">
                                <i class="fas fa-plus"> Daftar</i></button>
                        </form>

                    </div>

                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>