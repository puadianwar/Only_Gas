<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.mi
n.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regist ya</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet" >
    <title>Register</title>
</head>

<body>
    <div class="container">
        <a href="/">
            <i class="bi-arrow-left h1"></i>
        </a>
    </div>

    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Registrasi Gagal!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
        <div class="card" style="width: 35%">
            <div class="card-body p-4">
                <h3 class="card-title text-center"><i class="fas fa-fire"> Register</i></h3>
                <form action="{{ route('postRegister') }}" method="POST">
                    @csrf<div class="form-group mt-4">
                        <label class="text-secondary"><i class="fas fa-user-tie">Masukkan Nama Agen </i></label> <br>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="name"
                            required value="{{ old('name') }}">
                        <span class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-1">
                        <label class="text-secondary"><i class="fas fa-envelope"> Email Anda</i></label>
                        <input type="email" class="form-control border border-secondary form-control-lg" name="email"
                            required value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                        
                    </div>

                    <div class="form-group mt-1">
                        <label class="text-secondary"><i class="fas fa-envelope"> Lokasi Agen</i></label>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="lokasi"
                            required value="{{ old('lokasi') }}">
                        <span class="text-danger">
                            @error('lokasi')
                            {{ $message }}
                            @enderror
                        </span>
                        
                    </div>

                    <div class="form-group mt-1">
                        <label class="text-secondary"><i class="fas fa-envelope"> No Telepon</i></label>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="no_telp"
                            required value="{{ old('no_telp') }}">
                        <span class="text-danger">
                            @error('no_telp')
                            {{ $message }}
                            @enderror
                        </span>
                        
                    </div>


                    
                    <div class="form-group mt-1">
                        <label class="text-secondary"><i class="fas fa-unlock-alt"> Password
                            Anda</i></label>
                        <input type="password" class="form-control border border-secondary form-control-lg"
                            name="password"><span class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-1">
                        <label class="text-secondary"><i class="fas fa-unlock"> Konfirmasi
                            Password Anda</i> </label>
                        <input type="password" class="form-control border border-secondary form-control-lg"
                            name="password_confirmation" required>
                        <span class="text-danger">
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class=" form-control btn btn-primary mt-5"> <i class="far fa-registered"> Register</i></button>
                </form>
                <p class="mt-2 text-center">Sudah punya akun? <a href="{{ route('auth.login')}}"
                        style="text-decoration: none">Ayomasuk!</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>








</html>