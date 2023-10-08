<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <form method="POST" action="<?= base_url("updateProduct/" . $product->id) ?>">
        <div>
            <label for="namaProduk">Nama Produk</label>
            <input id="namaProduk" name="nama_product" type="text" value="<?= $product->nama_product ?>">
        </div>
        <br>
        <div>
            <label for="description">Deskripsi</label>
            <input id="description" name="description" value="<?= $product->description ?>">
        </div>
        <br>
        <div>
            <label for="harga">Harga</label>
            <input id="harga" name="harga" value="<?= $product->harga ?>">
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
