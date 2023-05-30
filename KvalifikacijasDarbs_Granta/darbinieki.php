<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darbinieki</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="Bildes/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
    $page = "darbinieki";
    require "adminHeader.php";
    include "footer.php";
    if(isset($_SESSION['username']))
?>
<section id="admin-start">
    <div class="row">
        <div class="user-info">
            <div class="head-info"><h1>Tavam Auto darbinieki</h1></div> 
        </div>
        <table class="employee-table">
            <tr>
                <th>Vārds</th>
                <th>Uzvārds</th>
                <th>E-pasts</th>
                <th>Tālrunis</th>
                <th>Personas kods</th>
                <th>Loma</th>
            </tr>
            <?php 
                require("php/connectdb.php");
                $darbinieki = 'SELECT * FROM darbinieki';
                $NolasaDarbiniekus = mysqli_query($savienojums, $darbinieki) or die ("Nekorekts vaicājums");

                if(mysqli_num_rows($NolasaDarbiniekus) >0){
                    while($row = mysqli_fetch_assoc($NolasaDarbiniekus)){
                        echo "
                            <tr>
                                <td>{$row['DarbiniekaVards']}</td>
                                <td>{$row['DarbiniekaUzvards']}</td>
                                <td>{$row['E-pasts']}</td>
                                <td>{$row['DarbiniekaTelefons']}</td>
                                <td>{$row['PersonasKods']}</td>
                                <td>{$row['Loma']}</td>  
                                <td>
                                    <form action='redigesana.php' method='post'>
                                        <input type='hidden' name='edit_id' value='{$row['idDarbinieks']}'>
                                        <button type='submit' name='edit_btn'>
                                            <i class='fa fa-pencil'></i>
                                        </button>
                                    </form>              
                                </td>
                                <td>
                                    <form action='dzestDarbinieki.php' method='post'>
                                        <input type='hidden' name='delete_id' value='{$row['idDarbinieks']}'>
                                        <button type='submit' name='delete_btn'>
                                            <i class='fa fa-trash'></i>
                                        </button>
                                    </form>         
                                </td>              
                            </tr>          
                        ";
                    }
                }else{
                    echo "<tr><td colspan='6'>Tabula nav datu ko attēlot</td></tr>";
                }
            ?>
        </table>
    </div>
</section>
