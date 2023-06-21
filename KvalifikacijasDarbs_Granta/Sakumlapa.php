<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sākums</title>
  <link rel="stylesheet" href="sakumlapa.css">
  <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow kontaineris */
.slideshow-container {
  
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.slideshow-container img {
  margin-top: 10rem;
  width: 90%;
  height: 90%;
}

/* bultinas */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* pozicija nakamai pogai pa labi */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* Virzot kursoru, pievienojiet melnu fona krāsu ar nelielu caurspīdīgumu */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Teksts */
.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Numuracija */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Punktini */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Animacija */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* Mazākos ekrānos samaziniet teksta lielumu */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

  
.rating {
    display: left;
    font-size: 24px;
    margin-top: 1rem;
  }
  .rating .fas {
    color: gold;
  }
  .rating .far {
    color: gray;
  }
</style>
</head>
<body>
  <?php
  $page = "sakumlapa";
  require "header.php";
  ?>

<section id="informacija">
    <div class="row">
        <div class="image">
            <img src="Bildes/vintage-1490224_1280.webp" alt="">
        </div>
        <div class="content">
            <h3 class="title">Tavam Auto - mums rūp tavs Auto</h3>
            <p>Jūsu automašīna ir vairāk nekā tikai pārvietošanās veids; tas ir jūsu personības paplašinājums un jūsu stila atspoguļojums. 
              Ar mūsu nepārspējamo pieredzi un aizraušanos ar pilnību mēs piedāvājam izcilu profesionālu detalizācijas pakalpojumu klāstu, kas izstrādāts, lai pārveidotu jūsu automašīnu par mākslas darbu. 
              Mūsu īpašā kvalificētu tehniķu komanda izmanto jaunākās tehnikas, nozares vadošos produktus un rūpīgu uzmanību detaļām, lai atjaunotu jūsu automašīnas izskatu, atstājot tai nepārspējamu spīdumu.
               Atklājiet automašīnu detaļu mākslinieciskumu un ļaujiet mums pacelt jūsu braukšanas pieredzi jaunos augstumos.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-car"></i>
                    <h3>Individuāla pieeja</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-cog"></i>
                    <h3>Kvalitāte</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-check"></i>
                    <h3>Garatija</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<body>

<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 9</div>
  <img src="Bildes/WhatsApp Image 2023-05-30 at 03.34.59.jpeg" style="width:100%">
  <div class="text">Virsbūves defektu korekcija - pirms</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src="Bildes/bilde14.jpeg" style="width:100%">
  <div class="text">Virsbūves defektu korekcija - pēc</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="Bildes/WhatsApp Image 2023-05-30 at 03.34.53 (2).jpeg" style="width:100%">
  <div class="text">Restaurācija - pirms</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="Bildes/bilde6.jpeg" style="width:100%">
  <div class="text">Restaurācija - procesā</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 9</div>
  <img src="Bildes/bilde8.jpeg" style="width:100%">
  <div class="text">Restaurācija - pēc</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src="Bildes/bilde13.jpeg" style="width:100%">
  <div class="text">Keramiskā tīrīšana</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 9</div>
  <img src="Bildes/bilde4.png" style="width:100%">
  <div class="text">Ķīmiskā tīrīšana</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src="Bildes/bilde10.png" style="width:100%">
  <div class="text">Virsbūves defektu korekcija</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src="Bildes/bilde11.png" style="width:100%">
  <div class="text">Lukturu pulēšana</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<section id="atsauksme">
  <div class="row">
    <div class="form-container">
      <form method="post" action="atsauksme.php">
        <h1>Pievieno savu atsauksmi!</h1>
        <input type="text" name="vards" placeholder="Vārds" class="box">
        <textarea type="text" name="zina" placeholder="Tavs Atsauksmes" class="box" id="" cols="30" rows="8"></textarea>
        <div class="rating">
          <div class="stars">
            <i class="far fa-star" data-rating="1"></i>
            <i class="far fa-star" data-rating="2"></i>
            <i class="far fa-star" data-rating="3"></i>
            <i class="far fa-star" data-rating="4"></i>
            <i class="far fa-star" data-rating="5"></i>
          </div>
        </div>
        <input type="submit" name="iesniegt" value="Iesniegt!" class="btn">
      </form>
    </div>

    <div class="review-container">
      <?php require("php/connectdb.php"); ?>
      <div class="box">
        <h1>Ko par mums domā mūsu klienti!</h1>
        <table>
          <?php
                 echo '<div class="review-box">';
            $atsauksmeVaicajums = "SELECT * FROM atsauksme";
            $atlasaAtsauksme = mysqli_query($savienojums, $atsauksmeVaicajums ) or die("Nekorekts vaicājums!");

if (mysqli_num_rows($atlasaAtsauksme ) > 0) {
    while($row = mysqli_fetch_assoc($atlasaAtsauksme )) {
      echo '<div class="review-box">';
      echo '<h2>' . $row["zina"] . '</h2>';
      echo '<p>' . $row["vards"] . '</p>';
      echo '</div>';
    }
  }
  echo '</table>';
  echo '</div>';
  ?>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.rating .fa-star').click(function() {
        var rating = parseInt($(this).data('rating'));
        $('.rating .fa-star').removeClass('fas').addClass('far');
        for (var i = 1; i <= rating; i++) {
          $('.rating .fa-star[data-rating="' + i + '"]').removeClass('far').addClass('fas');
        }
      });
    });
  </script>
            </div>
        </div>
 </section>
<?php include "footer.php" ?>

</body>
</html>
