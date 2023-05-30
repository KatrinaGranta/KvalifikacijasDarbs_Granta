<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sākums</title>
    <link rel="stylesheet" href="kontakti.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
$page = "sakumlapa";
require "header.php";
include "footer.php"; 
if(isset($_SESSION['username']))
?>
</html>
  <section id="kontakti">
    <div class="box-container">
     <div class="container">
      <h2>Kontaktu forma</h2>
      <h3>Jūs varat sazināties ar mums, aizpildot šo kontaktu formu.</h3>
      <form action="/submit-form">
        <input type="text" id="vards" name="vards" placeholder="Jūsu vārds..">
        <input type="text" id="epasts" name="epasts" placeholder="Jūsu e-pasts..">
        <textarea id="zina" name="zina" placeholder="Jūsu ziņa.." style="height:200px"></textarea>
        <input type="submit" value="Iesniegt">
      </form>
    </div>
</div>
</section>
</body>
</html>