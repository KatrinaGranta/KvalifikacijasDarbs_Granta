<!DOCTYPE html>
<html lang="lv">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sākums</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<body>
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Lūdzu, ievadiet savus datus, lai pieteiktos.</p>
          </div>
        </div>
        <form class="login-form" method="post">
          <?php //Pievieno datubazi
if (isset($_POST['authorize'])) {
    require("php/connectdb.php");
    session_start();
    $lietotajVards = mysqli_real_escape_string($savienojums, $_POST['lietotajVards']);
    $lietotajaParole = mysqli_real_escape_string($savienojums, $_POST['lietotajaParole']);
    $sqlVaicajums = "SELECT * FROM lietotajs WHERE lietotajVards = '$lietotajVards' ";
    $rezultats = mysqli_query($savienojums, $sqlVaicajums);

    if (mysqli_num_rows($rezultats) == 1) {
        while ($row = mysqli_fetch_array($rezultats)) {
            if (password_verify($lietotajaParole, $row["lietotajaParole"])) {
                $_SESSION["lietotajs"] = $lietotajVards;
                header("Location:adminsakumlapa.php");
                exit();
            } else {
                echo "Nepareizs lietotāja1 vārds vai parole!";
            }
        }
    } else {
        echo "Nepareizs lietotāja2 vārds vai parole!";
    }
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}
?>
                <input type="text" name="lietotajVards" placeholder="Lietotajs" />
                <input type="password" name="lietotajaParole" placeholder="Parole" />
                <input type="submit" name="authorize" value="login">
            </form>
        </div>
    </div>
</body>

</html>

