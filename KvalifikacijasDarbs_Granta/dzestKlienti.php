<!DOCTYPE html>
<html>
<head>
    <title>Dzēst</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php
require("php/connectdb.php");

if (isset($_POST['delete_btn'])) {
    $idKlients = $_POST['delete_id'];
    $checkQuery = "SELECT * FROM pakalpojumi WHERE Klients_idKlients = '$idKlients'";
    $checkResult = mysqli_query($savienojums, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo '<div class="container">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-md-6">';
        echo '<div class="alert alert-danger text-center" role="alert">';
        echo 'Nevar izdzēst klientu, jo ir saistīti pakalpojumi.';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        //Turpina dzēšanu
        $deleteQuery = "DELETE FROM klients WHERE idKlients = '$idKlients'";

        if (mysqli_query($savienojums, $deleteQuery)) {
            echo '<div class="container">';
            echo '<div class="row justify-content-center">';
            echo '<div class="col-md-6">';
            echo '<div class="alert alert-success text-center" role="alert">';
            echo 'Dzēšana veiksmīga';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="container">';
            echo '<div class="row justify-content-center">';
            echo '<div class="col-md-6">';
            echo '<div class="alert alert-danger text-center" role="alert">';
            echo 'Neizdevās izdzēst lietotāju: ' . mysqli_error($savienojums);
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}


$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'klienti.php';
echo "<script>setTimeout(function() { window.location.href = '$redirect'; }, 2000);</script>";
?>
