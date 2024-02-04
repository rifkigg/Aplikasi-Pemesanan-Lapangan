<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            margin:0;
            padding:0;
            background-color: #364F6B;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-bottom: 20px;
            width: 400px;
            height: 500px;
            border-radius: 10px;
            background-color: white;
            text-align: center;
        }
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        label {
            text-align: left;
        }
    </style>
</head>
<body>
    <div>
    <form class="d-grid gap-2 col-6 mx-auto" action="admin.php" method="post">
        <h1>Masuk</h1>
        <br>
        <label for="nama">Nama :</label>
        <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
        <br>
        <label for="password">Password :</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password" required>
        <br>
        <input class="btn btn-primary btn-lg " type="submit" value="Submit">
        <a style="text-align: left;" href="index.php">Kembali ke Beranda</a>
    </form>
    </div>
</body>
</html>