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
    require "header.php";
    include "footer.php"; 
    if(isset($_SESSION['username']))
?>
 <section id="pakalpojumi">
  <div class="flip-box">
    <div class="flip-box-inner">
      <div class="flip-box-front">
        <img src="Bildes/lukturu_pulesana.png">
      </div>
      <div class="flip-box-back">
        <h2>Lukturu pulēšana</h2>
        <p>UV staru, sāls, ūdens un mehānisko defektu iedarbības rezultātā, automašīnas lukturi sākt dzeltēt, lakas pārklājums bojājas un oksidējas. Auto lukturus pulē ar speciāliem pulēšanas līdzekļiem un pulēšanas pastām.
          Ja lukturi ir izbalējuši vai oksidējušies, būs apgrūtināta redzamība uz ceļa, bet citi vadītāji un kājāmgājēji slikti redzēs Jūs. Lai Jūs spētu iziet CSDD tehnisko apskati, ir jāveic auto lukturu pulēšana. Lukturu pulēšana ir daudz lētāka par lukturu nomaiņu.</p>
        <div class="text-box">
          no 30€
        </div>
      </div>
    </div>
  </div>

     <section id="pakalpojumi">
        <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Bildes/traipu_tirisana.png">
            </div>
            <div class="flip-box-back">
                <h2>Traipu tīrīšana</h2>
                <p>Detalizētu traipu tīrīšna. Vai nu tas būtu kāds kafijas traips uz sēdekļa vai šokolādde uz griestiem, mēs tiksim galā ar traipu. </p>
                <div class="text-box">
          no 20€
        </div>
              </div>
            </div>
          </div>
     <section id="pakalpojumi">
        <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Bildes/disku_krasosana.png">
            </div>
            <div class="flip-box-back">
                <h2>Disku krāsošana</h2>
                <p>Disku krāsošna pēc jūsu izvēlētas krāsas </p>
                <div class="text-box">
          no 50€
        </div>
              </div>
            </div>
          </div>
     <section id="pakalpojumi">
        <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="Bildes/virsbuves_defekti.png">
            </div>
            <div class="flip-box-back">
                <h2>Virsbūves defektu labošana</h2>
                <p>Virsbūves defektu labošana, liks jūsu auto izskatīties kā jaunam.</p>
                <div class="text-box">
          no 20€/h
        </div>
              </div>
            </div>
          </div>
      <section id="pakalpojumi">
        <div class="flip-box1">
            <div class="flip-box-inner1">
              <div class="flip-box-front1">
                <img src="Bildes/kimiska_tirisana.png">
            </div>
                <div class="flip-box-back">
                    <h2>Ķīmiskā tīrīšana</h2>
                    <p>Mūsu tehniskajā aprīkojumā ir viss, lai kvalitatīvi nodrošinātu pakalpojumu salona ķīmiskā tīrīšana. Mēs detalizēti veiksim salona ķīmisko tīrīšanu: iztīrīsim salonu, paklājiņus, salona plastmasas detaļas, paneļus, ādas un auduma sēdekļus, grīdas, stiklus</p>
                    <div class="text-box">
          no 120€
        </div>
                  </div>
                </div>
              </div>
      <section id="pakalpojumi">
        <div class="flip-box1">
            <div class="flip-box-inner1">
              <div class="flip-box-front1">
                <img src="Bildes/auto_detailings.png">
            </div>
                <div class="flip-box-back">
                    <h2>Auto detailings </h2>
                    <p>Detailings (no angļu valodas: detalizācija) ir augstu tehnoloģiju un procedūru komplekss, kas ietver sevī detaļu dziļu attīrīšanu, pārbaudi, korekciju un aizsardzību, kā automašīnas interjeram, tā eksterjeram.</p>
                    <div class="text-box">
          no 50€
        </div>
                  </div>
                </div>
              </div>
      <section id="pakalpojumi">
        <div class="flip-box1">
            <div class="flip-box-inner1">
              <div class="flip-box-front1">
                <img src="Bildes/krasosana.png">
            </div>
                <div class="flip-box-back">
                    <h2>Auto krāsošana </h2>
                    <p>Auto krāsošana.</p>
                    <div class="text-box">
          no 120€
        </div>
                  </div>
                </div>
              </div>
        <section id="pakalpojumi">
            <div class="flip-box1">
                <div class="flip-box-inner1">
                  <div class="flip-box-front1">
                    <img src="Bildes/restauracija.png">
                </div>
                    <div class="flip-box-back">
                        <h2>Auto restauracīja </h2>
                        <p>Auto restaurācija.</p>
                        <div class="text-box">
          Atkarīgs no stāvokļa
        </div>
                      </div>
                    </div>
                  </div>
      </section>     
        </body>
    </html>
    