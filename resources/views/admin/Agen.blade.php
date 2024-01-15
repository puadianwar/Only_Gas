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

    body {

        font-family: 'Lato';

    }

    .adminbck {
        background-color: green;
    }

    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: green;
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
        <a href="{{ route('admin.home') }}"><i class="fas fa-home"> Home</i></a>
       {{-- halaman data agen --}}
        <a href="{{ route('admin.Agen') }}"><i class="fas fa-people-carry"> Info Penyalur</i></a>

        <a href="{{ route('admin.infoAgen') }}"><i class="fas fa-air-freshener"> Info Agen</i></a>
        <a class=" mt-lg-5" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"> Logout</i></a>
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

        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('admin.Agen') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col"></div>
            
        </div>
        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto Penyalur</th>
                    <th scope="col">Nama Penyalur</th>
                    <th scope="col">Kirim untuk Pangkalan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Kendaraan</th>

                   
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $agen)
                <tr>
                    <td scope="row">{{ $index + $data->firstItem() }}</td>
                    <td>
                        <img style="width: 50px" src="{{asset('/images/' . $agen->gambar) }}" alt="cover agen">
                    </td>
                    <td>{{ $agen->nama_penyalur }}</td>
                    <td>{{ $agen->kirim_pangkalan }}</td>
                    <td>{{ $agen->alamat }}</td>
                    <td>{{ $agen->notelp }}</td>
                    <td>{{ $agen->tanggal }}</td>
                    <td>{{ $agen->no_kendaraan }}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table><br>
        {{ $data->links() }}
    </div><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>