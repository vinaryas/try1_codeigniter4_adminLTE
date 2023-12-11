<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
<h2>Create Data</h2>

<form action="<?= base_url('namacontroller/store'); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi"></textarea>

    <button type="submit">Simpan</button>
</form>
<body>

</html>
