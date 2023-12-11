<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<h2>Edit Data</h2>

<form action="<?= base_url('namacontroller/update/' . $row['id']); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi"><?= $row['deskripsi']; ?></textarea>

    <button type="submit">Update</button>
</form>
<body>

</html>