<?php
    session_start();
    $_SESSION['usuario'] = false;
    session_destroy();
    header("location: ../index.php");
?>