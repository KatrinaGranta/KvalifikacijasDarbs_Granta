<?php
require("php/connectdb.php"); #Dzēšanas opcija klientiem
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dzēst</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css%22%3E
</head>
<body>

<?php
require("php/connectdb.php"); #Dzēšanas opcija klientiem

if (isset($_POST['delete_btn'])) {
    $idDarbinieks = $_POST['delete_id'];

    // Izsauc dzēst opciju no datubazes
    $deleteQuery = "DELETE FROM darbinieki WHERE idDarbinieks = '$idDarbinieks'";

    // Izpilda dzēst funkciju
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

// Redirect back to darbinieki.php after 2 seconds
$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'darbinieki.php';
echo "<script>setTimeout(function() { window.location.href = '$redirect'; }, 2000);</script>";
?>
</body>
</html>