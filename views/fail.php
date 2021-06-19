<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../aset/css/bootstrap.min.css">
    <title>PERINGATAN | TIRTAGO</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px">
            <div class="alert alert-danger"></div>
            <h1>GAGAL MENGHUBUNGKAN KE DATABASE</h1>
            <p>Kesalahan : <?= $_COOKIE['error'] ?></p>
        </div>
    </div>
</body>
</html>