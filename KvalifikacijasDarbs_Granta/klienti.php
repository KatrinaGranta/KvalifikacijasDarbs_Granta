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
<?php
    $page = "klienti";
    require "adminHeader.php";
    if(isset($_SESSION['username']))
?>

<section id="admin-start">
    <div class="row">
        <div class="user-info">
            <div class="head-info">Tavam Auto klienti</div>  
        </div>
        <div class="table-container">
          <table>
              <tr>
                  <th>Vārds</th>
                  <th>E-pasts</th>
                  <th>Tālrunis</th>
                  <th>Rediģēt</th>
                  <th>Dzēst</th>
              </tr>
              <?php 
                  require("php/connectdb.php");
                  $klienti = 'SELECT * FROM klienti';
                  $NolasaKlientu = mysqli_query($savienojums, $klienti) or die ("Nekorekts vaicājums");

                  if(mysqli_num_rows($NolasaKlientu) > 0){
                      while($row = mysqli_fetch_assoc($NolasaKlientu)){
                          echo "
                              <tr>
                                  <td>{$row['KlientaVards']}</td>
                                  <td>{$row['KlientaEpasts']}</td>
                                  <td>{$row['KlientaTelefons']}</td>
                                  <td>
                                      <form action='editKlienti.php' method='post'>
                                          <input type='hidden' name='edit_id' value='{$row['idKlienti']}'>
                                          <button type='submit' name='edit_btn'>
                                              <i class='fa fa-pencil'></i>
                                          </button>
                                      </form>              
                                  </td>
                                  <td>
                                      <form action='dzestklientu.php' method='post'>
                                          <input type='hidden' name='delete_id' value='{$row['idKlienti']}'>
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