<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- <div class="container">
            <a class="navbar-brand" href="/"></a>
        </div> -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/admin/home">Home</a>
                    <a class="nav-link active" href="{{ route('admin.berita') }}">Berita</a>
                    <a class="nav-link" href=" {{ route('admin.lulusan')}}">Data Profil Lulusan</a>
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>

    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Berita</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                     
    
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Isi Berita</label>
                        <div class="col-sm-10">
                         <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>                 
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script >
    </body>
</html >