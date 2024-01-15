<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
        }
        input, button {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <form action="proses_pembayaran.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="jumlah">Jumlah Pembayaran:</label>
        <input type="number" id="jumlah" name="jumlah" required>

        <button type="submit">Proses Pembayaran</button>
    </form>

</body>
</html>
