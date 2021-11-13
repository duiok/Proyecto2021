<?php
 session_start();
 $_SESSION['usuario'];
 $sql = "DELETE FROM `datos` WHERE `datos`.`Nombre` = usuario";



?>