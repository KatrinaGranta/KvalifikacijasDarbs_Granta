<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="header.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
<header>
    <div class="navbar-container">
        <img class="Logo" src="Bildes/Logo.jpeg">
        <div id="nav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Sakumlapa.php">Sākums</a>
          <a href="informacija.php">Par Mums</a>
          <a href="pakalpojumi.php">Pakalpojumi</a>
          <a href="kontakti.php">Kontakti</a>
          <a href="kalendars.php">Kalendārs</a>
          <a href='login.php'>Pieslēgties  <i class="fa fa-sign-in" style="font-size:20px"></i></a>
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
