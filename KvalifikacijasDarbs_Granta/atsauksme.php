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
<header>
    <a href="#" class="logo">Tavam Auto</a>
    <nav class="navbar">
        <a href="Sakumlapa.php">Sākumlapa</a>
        <a href="pakalpojumi.php">Pakalpojumi</a>
        <a href="kontakti.php">Kontakti</a>
        <a href="login.php"><i class="fa fa-fw fa-user"></i></a>
    </nav>
</header>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  require("php/connectdb.php");
  if(isset($_POST['iesniegt'])){
    $vards = $_POST['vards'];
    $zina = $_POST['zina'];

    $sqlVaicajums = "SELECT * FROM atsauksme WHERE vards = '$vards'";
    $result = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!");

                        if(!empty($vards) && !empty($zina)){
                        $atsauksme_SQL = "INSERT INTO atsauksme(vards, zina)
                        values ('$vards', '$zina')";

                        if(mysqli_query($savienojums, $atsauksme_SQL )){
                        echo "<div class='pazinojums zals'>Atsauksme ir nosūtīta veiksmīgi! </div>";
                        header("Refresh:2; url=Sakumlapa.php");
                    }else{
                        echo "<div class='pazinojums sarkans'>Atsauksmes nosūtīšana nav izdevusies! Kļūda sistēmā!</div>";
                        header("Refresh:2; url=Sakumlapa.php");
                    }
                  
                  }
  }
}
?>
<footer>
        Katrīna Granta &copy; 2023
</footer>