<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title> Tavam auto </title>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                    <p>Lūdzu, ievadiet savus datus, lai pieteiktos.</p>
                </div>
            </div>
            <form class="login-form" method="post">
                <?php //Pievieno datubazi
                if(isset($_POST["autorizacija"])){
                    require("php/connectdb.php");
                    session_start();

                    $lietotajvards = mysqli_real_escape_string($savienojums, $_POST["lietotajaVards"]);
                    $Parole = mysqli_real_escape_string($savienojums, $_POST["lietotajaParole"]);

                    $sqlVaicajums = "SELECT * FROM lietotajs WHERE lietotajaVards = '$lietotajvards' ";
                    $rezultats = mysqli_query($savienojums, $sqlVaicajums);

                    if (mysqli_num_rows($rezultats) == 1){
                        while($row = mysqli_fetch_array($rezultats)){
                            if(password_verify($Parole, $row["lietotajaParole"])){
                                $_SESSION["username"] = $lietotajvards;
                                header("location:Sakumlapa.html");
                            }else{
                                echo "<div class='error'><i class='fas fa-exclamation-circle'></i> Nepareizs lietotājvārds vai parole!</div>";
                            }
                        }
                    }else{
                        echo "<div class='error'><i class='fas fa-exclamation-circle'></i> Nepareizs lietotājvārds vai parole! </div>";
                    }
                }

                if(isset($_GET['logout'])){
                    session_unset();
                    session_destroy();
                }
                ?>
                <input type="text" name="lietotajaVards" placeholder="username"/>
                <input type="password" name="lietotajaParole" placeholder="password"/>
                <input type="submit" name="autorizacija" value="login">
            </form>
        </div>
    </div>
</body>
</html>
