<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Agen Dashboard</title>

    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet" >
    
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
            <a class="nav-link" aria-current="page" href="{{ route('user.home') }}">
                <i class="fas fa-tachometer-alt"></i> Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">
                <i class="fas fa-user"></i> Data Pembeli
            </a>
          </li>

          
          
        </a></div>     
          </li>
        </ul>
      </div>
    </div>
  </nav>

        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('user.jual') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
                
            </div>
            <div class="col"></div>

            <div class="col-2">
                <a class="btn btn-success" href="{{route('user.tambahJual') }}"
                    style="text-decoration: none; margin-left: 30px"><i class="fas fa-plus"> Menambahkan data </i></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col"></div>
            
        </div>
        
    </div><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<table class="table" style="margin-top: 10px">
    <thead>
        <tr>
            <th scope="col">No</th>
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