<?php
    $serveravards = "localhost:3306";
    $lietotajvards = "root";
    $parole = "";
    $dbvards = "granta_datubaze";

    $savienojums = mysqli_connect($serveravards, $lietotajvards, $parole, $dbvards);

    if (!$savienojums){
        die("Pieslēgties neizdevās: ".mysqli_connect_error());
    }else{
        //echo "Savienojums ar datu bāzi veiksmīgi izveidots!";
    }
?>