<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home User</title>
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
                        <a href="{{ route('admin.home') }}" style="text-decoration: none" class="nav-link">
                            <p class="text-end text-white fw-semibold"><i class="fas fa-laptop-house"></i> Dashboard</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- end --}}

    {{-- content --}}
    <div class="container mt-4">
        <form action="{{ route('admin.infoAgen') }}" method="GET">
            @csrf
            <div class="input-group">
                <input type="search" name="search" class="form-control rounded" placeholder="Cari Nama Pangkalan"
                    aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
        </form>

        <div class="row mt-4">
            @foreach ($data as $index => $jual)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('/images/' . $jual->gambar) }}" class="card-img-top" alt="cover jual">
                        <div class="card-body">
                            <h5 class="card-title">{{ $jual->namaPangkalan }}</h5>
                            <p class="card-text">Harga: {{ $jual->harga }}</p>
                            <p class="card-text">Stok: {{ $jual->stok }}</p>
                            <p class="card-text">No telepon: {{ $jual->notelp }}</p>
                            <p class="card-text">Jenis Persyaratan: {{ $jual->jenisPersyaratan }}</p>
                            <p class="card-text">Tanggal: {{ $jual->tanggal }}</p>
                            <p class="card-text">Lokasi: {{ $jual->lokasi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $data->links() }}
    </div>
    {{-- end --}}

    <script src="{{ asset('/') }}/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
