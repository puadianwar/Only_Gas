<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin</title>

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
        <a href="{{ route('admin.pembeli') }}"><i class="fas fa-air-freshener"> Info Pembeli</i></a>
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
                <form action="{{ route('admin.home') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari nama Agen"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>

        <div class="col"></div>
                  <div class="col-2">
                      <a class="btn btn-success" href="{{route('user.tambahJual') }}"
                          style="text-decoration: none; margin-left: 30px"><i class="fas fa-plus"> Menambahkan data penjualan agen </i></a>
                  </div>

                  <table class="table" style="margin-top: 10px">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            
                            <th scope="col">Nama Pangkalan</th>
                            <th scope="col">harga</th>
                            <th scope="col">Realisasi Bulan ini</th>
                            <th scope="col">no telepon</th>
                            <th scope="col">jenis persyaratan</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data as $index => $jual)
                        <tr>
                            <td scope="row">{{ $index + $data->firstItem() }}</td>
                            <td>
                                <img style="width: 100px" src="{{asset('/images/' . $jual->gambar) }}" alt="cover jual">
                            </td>
                            
                            <td>{{ $jual->harga }}</td>
                            <td>{{ $jual->stok }}</td>
                            <td>{{ $jual->notelp }}</td>
                            <td>{{ $jual->jenisPersyaratan }}</td>
                            <td>{{ $jual->tanggal }}</td>
                            <td>{{ $jual->lokasi }}</td>
                            <td>
                                <a class="btn btn-outline-warning" href="/editjual/{{ $jual->id }}">Edit</a><br>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table><br>
                {{ $data->links() }}

        <div class="row mt-5">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-2">
                <a href="{{ route('admin.tambah') }}" class="btn btn-success"
                    style="text-decoration: none; margin-left: 30px;"><i class="fas fa-plus-square"> Tambah agen</i> </a>
            </div>
        </div>

        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Agen</th>
                    <th scope="col">Email Agen</th>
                    
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $userAdmin)
                <tr>
                    <td scope="row">{{ $index + $data->firstItem() }}</td>
                    <td>{{ $userAdmin->name }}</td>
                    <td>{{ $userAdmin->email }}</td>

                    <td>
                        <a class="btn btn-outline-danger" href="/deleteAdmin/{{ $userAdmin->id }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>

        {{ $data->links() }}
    </div>
    <br><br><br>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>



</html>