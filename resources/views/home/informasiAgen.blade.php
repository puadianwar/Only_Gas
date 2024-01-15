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
            <a class="nav-link" aria-current="page" href="">
                <i class="fas fa-tachometer-alt"></i> Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/home/informasiAgen">
                <i class="fas fa-user"></i> informasi agen
            </a>
          </li>

          
          
        </a></div>     
          </li>
        </ul>
      </div>
    </div>
  </nav>

        
    </div><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>