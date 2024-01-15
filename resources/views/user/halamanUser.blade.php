<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user</title>
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
                <a class="nav-link" aria-current="page" href="{{ route('user.jual') }}">
                  <i class="fas fa-shopping-cart"></i> jual
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user.pembeli') }}">
                    <i class="fas fa-user"></i> Pembeli
                </a>
              </li>

              <li class="nav-item">
              <div class="nav-link"><a href="{{ route('logout') }}" style="text-decoration: none">
                <p class="text-end text-white fw-semibold"><i class="fas fa-sign-out-alt">logout</i>
                  </p>
              </li>
            </a></div>

              
              
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- end --}}

        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        @if (isset($chart))
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
@endif

        <div class="row mt-4">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('user.halamanUser') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Cari id pembeli"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <a class="btn btn-info text-white" target="_blank"
                    href="{{ route('user.cetakDataPembelian') }}"
                    style="text-decoration: none; margin-right: 30px">Cetak Data</a>
            </div>
        </div>

        <table class="table" style="margin-top: 10px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor pembeli</th>
                    <th scope="col">Beli Dipangkalan</th>
                    <th scope="col">Tanggal pembelian</th>
                    <th scope="col">Tanggal Pengambilan</th>
                    <th scope="col">Status Pembelian</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $index => $pembeli)
                <tr>
                    <td scope="row">{{ $index + $data->firstItem() }}</td>
                    <td>{{ $pembeli->id_user }}</td>
                    <td>{{ $pembeli->id_jual }}</td>
                    <td>{{ $pembeli->tanggal_beli }}</td>
                    <td>{{ $pembeli->tanggal_ambil }}</td>
                    <td>
                        <span class="{{ $pembeli->status === 'Sudah membayar' ? 'fw-semibold text-success' : 'fw-semibold text-danger' }}">
                            {{ $pembeli->status }}
                        </span>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary"
                            href="/user/detailpembelian/{{ $pembeli->id }}/{{ $pembeli->id_user }}/{{ $pembeli->id_jual }}">Detail</a>
                        <a class="btn btn-outline-warning"
                            href="/user/editpembelian/{{ $pembeli->id }}">Edit</a>
                        <a class="btn btn-outline-danger"
                            href="/user/deletepembelian/{{ $pembeli->id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br>
        {{ $data->links() }}
    </div><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@if (isset($chart))
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
@endif

</body>

</html>
