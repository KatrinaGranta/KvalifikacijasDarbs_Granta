<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="header.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .lietotajs {
            margin-left: 10rem;
        }
    </style>
</head>
<body>
<header>
    <div class="navbar-container">
        <img class="Logo" src="Bildes/Logo.jpeg">
        <div id="nav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="adminsakumlapa.php">Sākums</a>
          <a href="admin.html">Profils</a>
          <a href="informacija.php">Statistika</a>
          <a href="pakalpojumi.php">Pakalpojumi</a>
          <a href="klienti.php">Klienti</a>
          <a href="darbinieki.php">Darbinieki</a>
          <a href="kontakti.php">Kontakti</a>
          <a href="kalendars.php">Kalendārs</a>
          <a href="logout.php">Izrakstīties<i class='fas fa-power-off' style="font-size:20px"></i></a>
          <?php
            session_start();
            if(isset($_SESSION['username'])){
                echo "<a href='admin.html'><span class='lietotajs'><i class='fas fa-user-tie'></i> ".$_SESSION['username']."</span></a>";
            }
          ?>
        </div>
        <span onclick="openNav()">&#9776; Izvēlne</span>
    </div>
    
    <script>
        function openNav() {
          document.getElementById("nav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("nav").style.width = "0";
        }
    </script>
     
    <hr id="linija">
</header>
</body>
</html>