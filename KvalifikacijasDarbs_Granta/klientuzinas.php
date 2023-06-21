<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klienti</title>
    <link rel="stylesheet" href="klienti.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<section id="admin-start">
    <div class="row">
        <div class="user-info">
            <div class="head-info"></div>  
        </div>
        <div class="table-container">
          <table>
              <tr>
                  <th>Vārds</th>
                  <th>E-pasts</th>
                  <th>Tālrunis</th>
                  <th>Ziņa</th>
                  <th>Dzēst</th>
              </tr>
              <?php 
              require "adminHeader.php";
                  require("php/connectdb.php");
                  $ZinasVaicajums = 'SELECT * FROM kontakti';
                  $Nolasazinu = mysqli_query($savienojums, $ZinasVaicajums) or die ("Nekorekts vaicājums");

                  if(mysqli_num_rows($Nolasazinu) > 0){
                      while($row = mysqli_fetch_assoc($Nolasazinu)){
                          echo "
                              <tr>
                                  <td>{$row['vards']}</td>
                                  <td>{$row['telefons']}</td>
                                  <td>{$row['epasts']}</td>
                                  <td>{$row['zina']}</td>
                                  
                                  <td>
                                      <form action='dzestzinu.php' method='post'>
                                          <input type='hidden' name='delete_id' value='{$row['idkontakti']}'>
                                          <button type='submit' name='delete_btn'>
                                              <i class='fa fa-trash'></i>
                                          </button>
                                      </form>       
                                  </td>              
                              </tr>          
                          ";
                      }
                  } else {
                      echo "<tr><td colspan='5'>Tabula nav datu ko attēlot</td></tr>";
                  }
              ?>
          </table>
        </div>
    </div>
</section>
</html>
<?php include "footer.php" ?>