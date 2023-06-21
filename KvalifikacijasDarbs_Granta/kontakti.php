<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>
    <link rel="stylesheet" href="kontakti.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="kontakti">
    </div>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-phone"></i>
                    <h3>Tālrunis</h3>
                    <p>+371 27738864</p>
                </div>
                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>E-pasts</h3>
                    <p>gustavsgrants@inbox.lv</p>
                </div>
                <div class="icons">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Adrese</h3>
                    <p>Bestes <br>Piltene, LV-3620, Latvija</p>
                </div>
                <div class="icons">
                <a href="https://www.instagram.com/tavam_auto/">
                <i class="fa fa-instagram"></i>
                <h3>Sociālie tīkli</h3>
                <p>@tavam_auto</p>
    </a>
</div>

            </div>
        <?php
        require "header.php";
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require("php/connectdb.php");
            if (isset($_POST['iesniegt'])) {
                $vards = $_POST['vards'];
                $telefons = $_POST['telefons'];
                $epasts = $_POST['epasts'];
                $zina = $_POST['zina'];

                $sqlVaicajums = "SELECT * FROM kontakti WHERE vards = '$vards'";
                $result = mysqli_query($savienojums, $sqlVaicajums) or die("Nekorekts vaicājums!");

                if (!empty($vards) && !empty($telefons) && !empty($epasts) && !empty($zina)) {
                    $kontakti_SQL = "INSERT INTO kontakti(vards, telefons, epasts, zina)
                                    VALUES ('$vards', '$telefons', '$epasts', '$zina')";

                    if (mysqli_query($savienojums, $kontakti_SQL)) {
                        echo "<div class='pazinojums zals'>Ziņa ir nosūtīta veiksmīgi! </div>";
                        header("Refresh:2; url=kontakti.php");
                    } else {
                        echo "<div class='pazinojums sarkans'>Ziņa nosūtīšana nav izdevusies! Kļūda sistēmā!</div>";
                        header("Refresh:2; url=kontakti.php");
                    }
                }
            }
        }
        ?>

        <div class="row">
                <form method="POST">
                    <h1>Kontakti</h1>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17280.17741930209!2d21.68905334664938!3d57.22212423218095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46f1d2d187de98e1%3A0xb93966654a6d9fb4!2sBestes%2C%20Piltenes%20pagasti%2C%20LV-3620!5e0!3m2!1slv!2slv!4v1686452428070!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <input type="text" name="vards" placeholder="Vārds" class="box">
                    <input type="email" name="epasts" placeholder="E-pasts" class="box">
                    <input type="number" name="telefons" placeholder="Tālrunis" class="box">
                    <textarea name="zina" placeholder="Tavs ziņojums" class="box" cols="30" rows="8"></textarea>
                    <input type="submit" name="iesniegt" value="Iesniegt!" class="btn">
                </form>
            </div>
            </section>
            
    
    <?php include "footer.php" ?>
</body>
</html>
