<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="admin.css">
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
<a href="#" class="logo">Tavam Auto</a>
    <nav class="navbar">
        <a href="adminsakumlapa.php">Sākumlapa</a>
        <a href="klienti.php">Klienti</a>
        <a href="klientuzinas.php">Ziņas</a>
          <a href="logout.php"><i class='fas fa-power-off' style="font-size:24px"></i></a>
          <?php
            session_start();
            if(isset($_SESSION['username'])){
                echo "<a href='admin.html'><span class='lietotajs'><i class='fas fa-user-tie'></i> ".$_SESSION['username']."</span></a>";
            }
          ?>
        </nav>
</header>