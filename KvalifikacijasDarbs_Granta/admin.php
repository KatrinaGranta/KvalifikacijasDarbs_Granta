<?php
    $page = "Admin";
     require "header.php";

    if(isset($_SESSION['username'])){
?>
    <section id="admin-start">
        <div class="row">
            <div class="user-info">
                <div class="head-info">Admin informācija</div> 
            </div>
                <table>
                    <tr>
                        <th>Vārds</th>
                        <th>Uzvārds</th>
                        <th>Dzimums</th>
                        <th>E-pasts</th>
                        <th>Tālrunis</th>
                        <th>Loma</th>
                    </tr>
                    <?php 
                        require("../assets/files/config.php");
                        $workersSQL = "CALL darbiniekiinfo()";
                        $read_workers = mysqli_query($connection, $workersSQL) or die ("Nekorekts vaicājums");

                        if(mysqli_num_rows($read_workers) >0){
                            while($row = mysqli_fetch_assoc($read_workers)){
                                echo "
                                    <tr>
                                        <td>{$row['vards']}</td>
                                        <td>{$row['uzvards']}</td>
                                        <td>{$row['dzimums']}</td>
                                        <td>{$row['epasts']}</td>
                                        <td>{$row['telNr']}</td>
                                        <td>{$row['nosaukums']}</td>            
                                    </tr>          
                                ";
                            }
                        }else{
                            echo "Tabula nav datu ko attēlot";
                        }
                    ?>
                <table>
            </div>