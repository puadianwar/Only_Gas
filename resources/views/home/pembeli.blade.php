<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home User</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
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
                        <a href="{{ route('user.home') }}" style="text-decoration: none" class="nav-link">
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
        <form action="{{ route('home.pembeli') }}" method="GET">
            @csrf
            <div class="input-group">
                <input type="search" name="search" class="form-control rounded" placeholder="Cari Nik Pembeli"
                    aria-label="Search" aria-describedby="search-addon">
                <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto KTP/KK</th>
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Beli Di Pangkalan</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pesan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $form)
                    <tr>
                        <td scope="row">{{ $index + $data->firstItem() }}</td>
                        <td>
                            <img style="width: 500px" src="{{asset('/images/' . $form->gambar) }}" alt="cover form">
                        </td>
                        <td>{{ $form->namaLengkap }}</td>
                        <td>{{ $form->nik }}</td>
                        <td>{{ $form->beliPangkalan }}</td>
                        <td>{{ $form->No_telp }}</td>
                        <td>{{ $form->alamat }}</td>
                        <td>{{ $form->status }}</td>
                        <td>
                            <a href="/pembayaran/form" style="text-decoration: none">
                                <i class="fas fa-air-freshener"></i> Pembayaran
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    {{-- end --}}
</body>
</html>
