<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- resources/views/products/show.blade.php atau formulir di mana saja yang sesuai --}}

<form action="{{ route('jual.increaseStock', ['id' => $product->id, 'quantity' => 10]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Tambah Stok</button>
</form>

<form action="{{ route('jual.decreaseStock', ['id' => $product->id, 'quantity' => 5]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Kurangi Stok</button>
</form>

</body>
</html>