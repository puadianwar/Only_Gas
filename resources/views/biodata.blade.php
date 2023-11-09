<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sertakan stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Curriculum Vitae</title>

    <style>
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a href="/" class="navbar-brand">
                    Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('biodata') }}" class="nav-link">Biodata</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('berita') }}" class="nav-link">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile_lulusan') }}" class="nav-link">Profile Lulusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aktivitas_mahasiswa') }}" class="nav-link">Aktivitas Mahasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" class="text-center py-5">
        <img src="{{ ('images/war.JPG') }}" width="100" alt="Your Name" class="rounded-circle">

        <h1>Anwar Puadi</h1>
        <p></p>
        <hr class="mx-3">
        <h3>About Me</h3>
        <p>Nama saya Anwar puadi berasal dari Mandailing Natal SUmatera Utara. Saya mahasiswa prodi rekayasa perangkat lunak semester 5 </p>
    </section>
    <section id="cv" class="container pb-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Experience</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Saya bisa bermain futsal dan badminton</td>
                        <td>Agence NO 1!!</td>
                    </tr>
                    <tr>
                        <td>Menguasai microsoft word</td>
                        <td>bermain futsal</td>
                    </tr>
                    <!-- Tambahkan baris-baris tambahan sesuai dengan pengalaman Anda -->
                </tbody>
            </table>
        </div>
    </section>
    <section id="contact">
        <!-- Tambahkan informasi kontak Anda di sini -->
    </section>
    <section id="about">
        <!-- Tambahkan informasi tentang diri Anda di sini -->
    </section>
    <section id="login">
        <!-- Tambahkan form login atau informasi login di sini -->
    </section>
    <footer class="footer bg-dark text-white text-center py-3 mt-5">
        Copyright 2023 anwar puadi
    </footer>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>