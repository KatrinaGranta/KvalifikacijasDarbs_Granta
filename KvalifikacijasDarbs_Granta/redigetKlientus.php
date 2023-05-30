<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Rediģēt klientus</title>
</head>
<body>
<?php
    $page = "klienti";
    require "adminHeader.php";
    include "footer.php";
    if(isset($_SESSION['username'])) 
        require("php/connectdb.php");
        ?>
 <section class="adminSakums">
        <div class="info">
          <div class="row">
            <div class="head-info">
              <form method="post" action="redigesana.php" style="margin: 0 auto; text-align: center;">
              <tr>
                <td><input type="hidden" name="edit_id" value="<?php echo $row['klienti_id']?>"></td>
            </tr>
            <tr> 
                <td><input type="text" value="<?php echo $row['KlientaVards']?>" placeholder="Vārds *" name="edit_vards" class="box-form" title="Vārds"></td>
            </tr> 
            <tr>
                <td><input type="number" value="<?php echo $row['KlientaTelefons']?>" placeholder="Tālrunis *" name="edit_tel" class="box-form" title="Tālrunis"></td></td>
            </tr> 
            <tr>
                <td><input type="email" value="<?php echo $row['Epasts']?>" placeholder="E-pasts *" name="edit_epasts" class="box-form" title="E-pasts"></td>
            </tr> 
            <tr>
                <td><button class="btn" type="submit" name="save">Saglabāt</button></td>
            </tr>

              </form>
            </div>
          </div>
        </div>
      </section>
    </table>
  </table>
</div>
</div>

</body>
</html>
