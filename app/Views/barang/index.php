<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang Komputer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Data Barang Komputer</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barang as $b) : ?>
                    <tr>
                        <td><?= $b['id']; ?></td>
                        <td><?= $b['nama_barang']; ?></td>
                        <td><?= $b['kategori']; ?></td>
                        <td><?= $b['stok']; ?></td>
                        <td>Rp <?= number_format($b['harga'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>