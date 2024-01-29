<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color: #364F6B;
        }
        div{
            display: flex;
            margin: 200px auto;
            padding-bottom: 20px;
            align-items: center;
            width: 400px;
            height: 500px;
            border-radius: 10px;
            background-color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
    <form action="admin.php" method="post">
        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
        <br>
        <label for="password">Password :</label>br
        <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
        <br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>