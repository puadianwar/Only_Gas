<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anwar Puadi</title>
    <style>
      
    
        body {
            background-color: #9ACD32 /* Ganti dengan kode warna yang Anda inginkan */
        }
  
        /* Mengatur gaya navigasi */
        nav {
            background-color: #333;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        /* Mengatur tombol navigasi */
        nav a:hover {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
        }

        /* Styling header */
        header {
            text-align: center;
            margin: 20px 0;
        }

        header h1 {
            color: #333;
        }


/* Mengatur teks ke tengah secara vertikal */
article h2 {
    margin-top: 0; /* Menghapus margin atas pada elemen h2 */
    padding-top: 20px; /* Menambah padding atas pada elemen h2 */
}


        /* Styling footer */
        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.html">Home</a> |
        <a href="My_Cv.html">My CV</a> |
        <a href="contact.html">Contact</a> |
        <a href="about.html">About me</a> |
        <a href="login.html">Login</a>
    </nav>

    <hr />

    <header>
        <img src="{{ ('img/war.JPG') }}" width="200" height="200" style="border-radius: 50%;" />
        <h1>Anwar Puadi</h1>
        <p>(Mahasiswa Teknik Informatika)</p>
    </header>

    <hr />

    <article>
        <center>
        <h2>Overview</h2>
        <p>
            "Saya adalah mahasiswa semester 5 di Politeknik Negeri Bengkalis<br>
             Jurusan Teknik Informatika dengan program studi Rekayasa Perangkat Lunak<br>
             Angkatan 2021. Hobby saya adalah menyanyi dan membaca novel."
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Pengalaman Organisasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>Menguasai Ms. Office</li>
                            <li>Figma Design</li>
                            <li>Html Basic Pemula</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Himpunan Mahadiksi</li>
                            <li>Divisi Keagamaan di HMTI 21</li>
                            <li>UKMI</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer>
        <p>Copyright 2023 @Anwar Puadi</p>
    </footer>
</body>
</html>
