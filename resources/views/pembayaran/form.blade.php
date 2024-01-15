<!-- resources/views/pembayaran/form.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Form Pembayaran</title>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header bg-success text-white text-center">
                <h4>Form Pembayaran</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('/konfirmasi') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Pembayaran:</label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                    </div>
                    <form action="{{ route('pembayaran.konfirmasi') }}" method="POST">
                        @csrf
                        <!-- ... -->
                         <button type="submit" class="btn btn-success mt-5">Edit Data Admin</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>