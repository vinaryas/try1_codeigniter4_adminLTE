<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data - AdminLTE</title>

    <!-- Load CSS from AdminLTE and Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">

    <!-- Add custom styles for notification -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .notification {
            max-width: 400px;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .notification a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
        }

        .btn-yes {
            background-color: #dc3545;
        }

        .btn-no {
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="notification">
        <p>Anda yakin ingin menghapus data ini?</p>

        <a href="<?= base_url('namacontroller/delete/' . $row['id']); ?>" class="btn btn-yes">Ya</a>
        <a href="<?= base_url('namacontroller'); ?>" class="btn btn-no">Tidak</a>
    </div>
</body>
</html>
