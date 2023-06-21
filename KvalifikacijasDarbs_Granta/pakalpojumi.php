<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakalpojumi</title>
    <link rel="stylesheet" href="pakalpojumi.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
    $page = "pakalpojumi";
    include "header.php";
    if(isset($_SESSION['username']))
?>
 <section id="pakalpojumi">
    <h1> Piesakies uz kādu no  <span>pakalpojumiem</span> </h1>
    <div class="box-container">
        <div class="box">
    <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 1"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/lukturu_pulesana.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
</div>
        <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 2"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/traipu_tirisana.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
    </div>
        <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 3"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/krasosana.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
        </div>
    <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 4"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/disku_krasosana.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
        </div>
    <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 5"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/virsbuves_defekti.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
        </div>
    <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 6"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/kimiska_tirisana.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
  </div>
    <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 7"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/auto_detailings.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
  </div>
    <div class="box">
            <?php
         require("php/connectdb.php"); # Datubāzes piesaistīšana
         $sqlVaicajums = "SELECT * FROM pakalpojums WHERE idtable1 = 8"; #Mainīga ieviešana un tā piesaistīšana SQL vaicājumam
                    $Nolasapakalpojumu = mysqli_query($savienojums, $sqlVaicajums) or die ("Nekorekts vaicājums!"); #Mainīga ieviešana, ar kuru palīdzību izvadīsim datus
                     if(mysqli_num_rows($Nolasapakalpojumu) > 0){
                        while($row = mysqli_fetch_assoc($Nolasapakalpojumu)){
                            echo "<img src='Bildes/restauracija.png'>";
                            echo "<h3>{$row['nosaukums']}</h3>";
                            echo  "<p>{$row['apraksts']}</p>";
                            echo  "<a href='kontakti.php'' class='btn'><p>Pieteikties</p></a>";
            }
        }else{
            echo "Datubāze nav ievietota neviena specialitāte!";
        }
    ?>
        </div>
      </div>
      </section>  
      <?php include "footer.php" ?>

</body>
</html>
