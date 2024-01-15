<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>only gas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-image: url('image/background.jpg');
        background-size: auto 200%;
        /* Set background-size to auto 200% */
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: white;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-x: auto;
        /* Allow horizontal scrolling */
    }

    /* Navbar */
    .navbar {
        background-color: #004d40;
        padding: 15px 0;
    }

    .navbar-brand {
        font-size: 1.5em;
        color: #ffffff;
    }

    .navbar-nav .nav-item {
        margin-right: 20px;
    }

    .navbar-nav .nav-link {
        color: #ffffff;
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa;
    }

    /* Hero Section */
    .hero-section {
        text-align: center;
        padding: 100px 0;
    }

    .hero-section h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.2em;
    }

    /* Carousel */
    .carousel-container {
        max-width: 600px;
        margin: auto;
    }

    .carousel-item img {
        width: 100%;
        border-radius: 10px;
    }

    .carousel-inner {
        display: flex;
        width: 100%;
        transition: transform 0.5s ease;
    }

    .carousel-item {
        flex: 0 0 auto;
        width: 100%;
    }

    /* Adjust the carousel item width based on the number of items you have */
    .carousel-item img {
        width: 100%;
        border-radius: 10px;
    }

    /* Carousel Controls */
    .carousel-control-prev,
    .carousel-control-next {
        height: 100%;
        width: auto;
        background: none;
        border: none;
        font-size: 24px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        color: #fff;
    }

    .hero-section {
        text-align: center;
        padding: 100px 0;
        color: black;
        /* Set the text color to black */
    }

    .hero-section h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.2em;
    }

    .contact-section {
        text-align: center;
        padding: 80px 0;
        background-color: #333;
        color: white;
        /* Set the text color to white */
    }

    .contact-section h2 {
        font-size: 2.5em;
        margin-bottom: 30px;
    }

    .contact-form {
        max-width: 400px;
        margin: auto;
    }



    /* Footer (Copy Right) */
    footer {
        background-color: #004d40;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
    }

    footer p {
        margin: 0;
        font-size: 1em;
        color: #ffffff;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="{{ ('logo/lpg.jpg') }}" width="50" height="50" style="border-radius: 10%;"
                class="center"><br><br>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.login') }}"><i class="fas fa-sign-in-alt"> Masuk</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ ('image/logo.jpg') }}" alt="Image 1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ ('image/logo_ku.jfif') }}" alt="Image 2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ ('image/logo.jpg') }}" alt="Image 3" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Sebelum</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Lanjut</span>
            </a>
        </div>
    </div>
    <!-- Footer (Copy Right) -->
    <footer>
        <p>&copy; Only Gas Bengkalis.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Gas - Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background: #f8f9fa;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Navbar */
    .navbar {
        background-color: #004d40;
        padding: 15px 0;
    }

    .navbar-brand {
        font-size: 1.8em;
        color: #ffffff;
        font-weight: bold;
    }

    .navbar-nav .nav-item {
        margin-right: 20px;
    }

    .navbar-nav .nav-link {
        color: #ffffff;
        font-size: 1.2em;
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa;
    }

    /* Hero Section */
    .hero-section {
        text-align: center;
        padding: 80px 20px;
        background: url('image/hero-bg.jpg') center/cover no-repeat;
        color: #ffffff;
    }

    .hero-section h1 {
        font-size: 3em;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .hero-section p {
        font-size: 1.2em;
        margin-bottom: 30px;
    }

    .hero-section a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1.2em;
    }

    .hero-section a:hover {
        background-color: #218838;
    }

    /* Features Section */
    .features-section {
        text-align: center;
        padding: 80px 20px;
    }

    .feature {
        margin-bottom: 40px;
    }

    .feature i {
        font-size: 3em;
        color: #004d40;
    }

    .feature h2 {
        font-size: 1.8em;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .feature p {
        font-size: 1.1em;
    }

    /* Contact Section */
    .contact-section {
        text-align: center;
        padding: 80px 20px;
        background-color: #004d40;
        color: #ffffff;
    }

    .contact-section h2 {
        font-size: 2.5em;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .contact-form {
        max-width: 600px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 1.2em;
        color: #ffffff;
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        background-color: #34495e;
        color: #ecf0f1;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        display: inline-block;
    }

    .form-group textarea {
        height: 150px;
    }

    .form-group button {
        background-color: #3498db;
        color: #ecf0f1;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 1.2em;
        border-radius: 5px;
        display: inline-block;
    }

    .form-group button:hover {
        background-color: #2980b9;
    }

    /* Footer */
    footer {
        background-color: #004d40;
        padding: 20px 0;
        text-align: center;
        color: #ffffff;
    }
    </style>
</head>

<!-- Hero Section -->
<div class="hero-section" style="color: black;">
    
    
    <a href="/home/jual" class="btn btn-primary"><i class="fas fa-envelope-open-text"> Silahkan Daftar Dan Pesan Sekarang </i></a>
</div>


<!-- Contact Section -->
<div class="contact-section">
    <div class="container">
        <h2><i class="fas fa-headset"> Hubungi Kami</i></h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi kami melalui formulir di bawah ini:
        </p>

        <form class="contact-form" action="#" method="post">
            <div class="form-group">
                <label for="name"><i class="fas fa-user-tie"> Nama Lengkap:</i> </label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="name"><i class="fas fa-map-marker-alt"> Alamat:</i></label>
                <input type="text" id="alamt" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="message"> <i class="fas fa-mail-bulk"> Pesan:</i></label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Kirim Pesan</button>
            </div>
        </form>

        
    </div>
</div>




<!-- Footer -->
<footer>
    <p>&copy; 2023 Only Gas. All rights reserved.</p>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>