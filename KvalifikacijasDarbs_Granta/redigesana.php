<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rediģēšana</title>
</head>

<?php
    require("php/connectdb.php"); 

    if(isset($_POST['edit_pierakstu'])){ #Ierakstu rediģēšanai no 'klienti' tabulas
        $idKlients = $_POST['edit_id'];
        $KlientaVards = $_POST['edit_vards'];
        $Epasts = $_POST['edit_epasts'];
        $KlientaTelefons = $_POST['edit_tel'];

        $query = "UPDATE klients SET KlientaVards='$KlientaVards', Epasts='$Epasts', Klientatelefons='$KlienaTelefons' WHERE idKlients='$idKlients'";  #Rediģēšanas vaicājums
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo "<div class='notif suc'>Ieraksta rediģēšana ir noritējusi veiksmīgi!</div>";
            header("Refresh: 2, url=klienti.php");
        }else{
            echo "<div class='notif unsuc'>Kaut kas nogāja greizi!</div>";
            header("Refresh: 2, url=klienti.php");
        }
    }

    if(isset($_POST['edit_darbinieku'])){ #Ierakstu rediģēšanai no 'darbinieki' tabulas
        $idDarbinieks = $_POST['edit_id'];
        $DarbiniekaVards = $_POST['edit_vards'];
        $DarbiniekaUzvards = $_POST['edit_uzvards'];
        $Epasts = $_POST['edit_epasts'];
        $DarbiniekaTelefons = $_POST['edit_tel'];
        $PersonasKods = $_POST['edit_personasKods'];
        $Loma = $_POST['edit_loma'];

        $query = "UPDATE darbinieki SET vards='$DarbiniekaVards', uzvards='$DarbiniekaUzvards', epasts='$Epasts', tel='$DarbiniekaTelefons', personasKods='$PersonasKods', loma='$Loma' WHERE darbinieki_id='$idDarbinieks'";  #Rediģēšanas vaicājums
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo "<div class='notif suc'>Ieraksta rediģēšana ir noritējusi veiksmīgi!</div>";
            header("Refresh: 2, url=darbinieki.php");
        }else{
            echo "<div class='notif unsuc'>Kaut kas nogāja greizi!</div>";
            header("Refresh: 2, url=darbinieki.php");
        }
    }
?>
</html>
