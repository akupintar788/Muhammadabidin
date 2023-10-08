<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <h1>List Product</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Product</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Action</th> <!-- Menggunakan huruf awal kapital untuk konsistensi -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->nama_product ?></td>
                <td><?= $p->description ?></td>
                <td><?= $p->harga ?></td>
                <td>
                    <a href="<?= base_url('editProduct/' . $p->id) ?>">Edit</a>
                    <a href="<?= base_url('deleteProduct/' . $p->id) ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
