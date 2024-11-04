<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>QTY</th>
        </tr>
        <?php foreach ($data as $item) : ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['qty'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>