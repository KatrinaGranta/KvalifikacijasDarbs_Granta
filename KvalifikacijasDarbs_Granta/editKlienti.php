<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavam Auto</title>
    <link rel="stylesheet" href="edit.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="bg-light">
<div class="apkart">
  <div class="container">
    <h2>Klientu dati</h2>
    <table class="table table-striped">
      <div class="head-info">Pēdējās izmaiņas sistēmā:</div>
      <table class="table table-bordered">
        <section class="adminSakums">
          <div class="info">
            <div class="row">
              <div class="head-info2">
                <form method="post" action="redigesana.php" style="margin: 0 auto; text-align: center;">
                  <tr>
                    <td><input placeholder="Klientu ID" type="number" name="idKlienti"></td>
                  </tr>
                  <tr> 
                    <td><input placeholder="Vards" type="text" name="KlientaVards"></td>
                  </tr> 
                  <tr>
                    <td><input placeholder="Talrunis" type="number" name="KlientaTalrunis"></td>
                  </tr> 
                  <tr>
                    <td><input placeholder="Epasts" type="text" name="KlientaEpasts"></td>
                  </tr> 
                  <tr>
                    <td><button class="btn" type="submit" name="save">Saglabat</button></td>
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