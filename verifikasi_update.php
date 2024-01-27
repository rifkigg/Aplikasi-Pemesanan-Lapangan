<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="hari">Pada kolom apa yang ingin diubah :</label>
<select name="hari" id="hari" required>
    <option value="senin">Senin</option>
    <option value="selasa">Selasa</option>
    <option value="rabu">Rabu</option>
    <option value="kamis">Kamis</option>
    <option value="jumat">Jumat</option>
    <option value="sabtu">Sabtu</option>
    <option value="minggu">Minggu</option>
</select>
<a href="ubah.php?Jam=<?= $row["Jam"]; ?> Hari=<?= $row["Hari"]; ?>">Ubah</a> 
</body>
</html>