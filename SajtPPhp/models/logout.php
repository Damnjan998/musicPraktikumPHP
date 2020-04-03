<?php
header("Location: ../index.php?page=home");
session_start();
include "../config/connection.php";
include "functions.php";

if (isset($_SESSION['korisnik'])){
    $id = $_SESSION['korisnik']->id;
}

if(session_destroy()){
    $aktivan = 0;

    updateUser($aktivan, $id);
}
header("Location: ../index.php?page=home");
?>
