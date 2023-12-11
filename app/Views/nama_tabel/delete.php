<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
<p>Anda yakin ingin menghapus data ini?</p>

<a href="<?= base_url('namacontroller/delete/' . $row['id']); ?>">Ya</a>
<a href="<?= base_url('namacontroller'); ?>">Tidak</a>
<body>

</html>