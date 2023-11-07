<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Aktivitas Mahasiswa Jurusan RPL</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Aktivitas Mahasiswa Jurusan RPL</h1>
        <hr>

        <!-- Aktivitas Mahasiswa -->
        <div class="row">
            <!-- Aktivitas 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/img/aktif1.png" class="card-img-top"  width="300" height="300"  alt="Foto Aktivitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Prodi Sarjana Terapan RPL Sukses Gelar Pameran Proyek Software Engineering Mahasiswa</h5>
                        <p class="card-text">Program Studi (Prodi) Sarjana Terapan Rekayasa Perangkat Lunak Politeknik Negeri Bengkalis (Polbeng), sukses menggelar Pameran Proyek Software Engineering Mahasiswa Angkatan 2020.

Pameran tersebut digelar di Aula Jurusan Teknik Informatika (TI) Polbeng yang dimulai pada Rabu, 14 Desember dan berakhir pada Jum’at, 16 Desember 2022.</p>
                        <a href="/img/a.PNG" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Aktivitas 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="/img/aktif2.png" class="card-img-top" width="400" height="300" alt="Foto Aktivitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Prodi D4 RPL Gelar Seminar Praktisi Mahasiswa Perdana</h5>
                        <p class="card-text">Salah satu program studi Diploma IV yang baru berusia lebih kurang setahun di Politeknik Negeri Bengkalis, Prodi D-IV Rekayasa Perangkat Lunak Jurusan Teknik Informatika menggelar seminar praktisi mahasiswa perdana pada Sabtu (23/9) lalu. Bertempat di Aula Gedung Utama,Polbeng tersebut mengusung tema “First Step Software Engineer to Technopreneurship”
</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Aktivitas Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>