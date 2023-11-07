<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
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
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/img/berita1.png" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Jurusan Teknik Informatika Polbeng Berhasil Meraih Juara II Di Ajang KMIPN</h5>
                        <p class="card-text"> Jurusan Teknik Informatika (TI) Polbeng berhasil meraih juara II di ajang Kompetisi Mahasiswa Informatika Politeknik Nasional (KMIPN) ke-4 dalam sesi Perancangan Bisnis Bidang Teknologi Informasi dan Komunikasi (TIK).
                        Kegiatan ini berlangsung pada hari selasa s/d rabu, 02-03 Agustus 2022 di Kampus Politeknik Negeri Batam.

Menanggapi hasil yang diraih tersebut, Direktur Polbeng, Johny Custer memberikan apresiasi atas keberhasilan Jurusan Teknik Informatika dalam ajang KMIPN ke-4 di Batam.
                        </p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/img/berita2.png" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Polbeng Jadi Tuan Rumah Dalam Kegiatan ABEC Ke 11</h5>
                        <p class="card-text">Berita dan Informasi
Polbeng Jadi Tuan Rumah Dalam Kegiatan ABEC Ke 11
image description
Editor:
Humas
Tanggal:
21 September 2023
image description
Politeknik Negeri Bengkalis (Polbeng) menjadi tuan rumah dalam kegiatan Applied Business and Engineering Conference (ABEC) ke 11 yang dilaksanakan pada Kamis, 21 September 2023.

ABEC merupakan salah satu seminar nasional diselenggarakan Polbeng bekerjasama dengan 13 politeknik di Sumatera yakni Politeknik Negeri Batam, Politeknik Caltex Riau, Politeknik Negeri Manufaktur Bangka Belitung, Politeknik Negeri Pertanian Payakumbuh, Politeknik Negeri Padang, Politeknik Negari Medan, Politeknik Negeri Lampung, Politeknik Jambi, Politeknik Negeri Lhoksemawe, Politeknik Kampar, Politeknik Negeri Sriwijaya, Politeknik Negeri Media Kreatif dan Batam Tourism Polytecnic.

Ketua panitia Marhadi Sastra,S.T,M.T mengatakan jumlah paper yang telah diterima untuk ABEC Internasional sebanyak 158 Paper, ABEC nasional 58 Paper, sementara SNIT sebanyak 124 Paper dari penulis di berbagai perguruan tinggi yang ada di Indonesia</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>