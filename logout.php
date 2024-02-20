<?php
session_start();
if (!isset($_SESSION["id_petugas"])) {
    header("location:login.php");
} else 
?>