<?php
    session_start();

if (session_destroy()) {                #Lietotajs izlagojas no sistēmas
        header("Location: login.php");
    }
?>