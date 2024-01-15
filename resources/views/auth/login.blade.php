<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8faf8;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login ya</title>
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
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div class="container d-flex justify-content-center align-items center" style="margin-top: 60px">
        <div class="card" style="width: 35%">
            <div class="card-body p-4">
                <h5 class="card-title text-center"><i class="fas fa-fire"></i> Login</h5>
                <form action="{{ route('postLogin')}}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="email" class="text-secondary"><i class="fas fa-envelope"></i> Email Anda</label>
                        <input type="email" class="form-control border border-secondary form-control-lg" name="email"
                            required value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-1">
                        <label for="password" class="text-secondary"><i class="fas fa-unlock-alt"></i> Password Anda</label>
                        <input type="password" class="form-control border border-secondary form-control-lg"
                            name="password">
                        <span class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3"><i class="fas fa-sign-in-alt"></i> Login</button>
                </form>
                <p class="mt-2 text-center">Belum punya akun?
                    <a href="{{ route('auth.register')}}" style="text-decoration: none">Ayo buat akun!</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
