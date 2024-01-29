<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Pemesanan Lapangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Asul:wght@700&family=Bebas+Neue&family=Jomhuria&family=Montserrat&family=Poppins&display=swap');
      body {
        margin:0;
        padding:0;
        background-image: url("galeri/download.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
      }
      nav {
            top:0;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background-color: #364F6B;
            color: #F5F5F5;
            position: fixed;
        }
        nav h1 {
            font-family: 'Asul', serif;
        }
        nav a{
            text-decoration: none;
            color: #F5F5F5;
            padding-right: 20px;
            font-size: 20px;
        }        
        section{
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          margin-top: 15%;
          text-align:center;
          color:#F5F5F5;
        }
        section h1{
          font-family: 'Jomhuria', serif;
          font-size: 128px;
        }
        section p {
          font-size:24px;
          font-family: 'Poppins', sans-serif;
        }
    </style>
  </head>
  <body>
  <nav>
    <h1>Saka Sport</h1>
    <div class="link">
    <a href="index.php">Home</a>
    <a href="pemesanan.php">Pemesanan</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
    </div>
  </nav>
  <section>
  <header>
    <h1>WELCOME TO GOR SAKA SPORTS</h1>
    <p>Ini adalah website Saka Sport yang menyediakan pelayanan pemesanan lapangan futsal yang sudah memenuhi standart lapangan futsal nasional</p>
  </header>
</section>

    
  </body>
</html>