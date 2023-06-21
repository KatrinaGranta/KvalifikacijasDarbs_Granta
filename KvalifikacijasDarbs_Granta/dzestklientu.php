<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require("php/connectdb.php");
    if(isset($_POST['delete_btn'])){
        $idKlienti = $_POST['delete_id'];

        $query = "DELETE FROM klienti WHERE idKlienti='$idKlienti'"; #Dzēšānas vaicājums
        $check_query = mysqli_query($savienojums, $query) or die ("Nekorekts vaicājums");;

        if($check_query){
            echo "<div class='notif suc'>Ieraksta dzēšana ir noritējusi veiksmīgi!</div>";
            header("Refresh: 2, url=klienti.php");
        }else{
            echo "<div class='notif unsuc'>Kaut kas nogāja greizi!</div>";
            header("Refresh: 2, url=klienti.php");
        }
    }
 ?>
</body>
</html>