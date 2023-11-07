<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/admin/home">Home</a>
                    <a class="nav-link" href="{{ route('admin.berita') }}">Berita</a>
                    <a class="nav-link" href="{{ route('admin.lulusan') }}">Data Profil Lulusan</a>
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="row mt-4">
        <div class="col"></div>
        <div class="col-6">
            <form action="{{ route('admin.home') }}">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="Cari nama admin"
                        aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mt-5">
        <div class="col-2">
        <a class="btn btn-success" href="{{ route('admin.tambah') }}"
   style="text-decoration: none; margin-left: 30px">
   Tambah Data
</a>

        </div>
    </div>

    <table class="table" style="margin-top: 10px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $index => $userAdmin)
                <tr>
                    <td>{{ $index + $data->firstItem() }}</td>
                    <td scope="row">{{ $userAdmin->name }}</td>
                    <td>{{ $userAdmin->email }}</td>
                    <td>{{ $userAdmin->jenis_kelamin }}</td>
                    <td>{{ $userAdmin->level }}</td>
                    <td>
                        <a class="btn btn-outline-warning" href="/editAdmin/{{ $userAdmin->id }}">Edit</a>
                        <a class="btn btn-outline-danger" href="/deleteAdmin/{{ $userAdmin->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $data->links() }}
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>