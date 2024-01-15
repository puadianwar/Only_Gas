<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agen</title>
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
                <a class="nav-link " aria-current="page" href="{{ route('user.pembeli') }}">
                    <i class="fas fa-user"></i> Data Pembeli
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('user.halamanUser') }}">
                    <i class="fas fa-user"></i> halaman Pembelian
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

    {{-- content --}}
    <div class="mt-2">
        <div class="container">

            <div class="row mt-5 mb-5">
                <div class="col"></div>
                <div class="col-6">
                    <form action="" method="GET">
                        @csrf
                        <div class="input-group">
                            <input type="search" name="search" class="form-control rounded" placeholder="Cari"
                                aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-outline-primary">search</button>
                        </div>
                    </form>
                </div>

                <div class="row mt-5">
                  <div class="col"></div>
              </div>

            
            <div class="col"></div>
            
        </div>
            <div class="card">
                <div class="card-header">
                  Agen Dan Toko
                </div>

                <div class="content">
                  <div class="adminbck rounded px-4 py-2">
                      <h3 class="text-black font-weight-bolder">Selamat Datang!</h3>
                      <h5 class="text-black">{{ Auth::user()->name }}</h5>

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
               
                    
                </div>
                
            </div><br><br><br>
        </div>
    </div>

    {{-- end --}}
    <script src="{{ asset('/') }}/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
    
</html>
