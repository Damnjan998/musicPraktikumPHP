<?php
session_start();
include "../config/connection.php";
require_once "functions.php";
if(isset($_SESSION["korisnik"]) AND $_SESSION["korisnik"]->id_uloga == 2 ){
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $rezultat = izbrisiKorisnike($id);
        header("Location: ../index.php?page=admin");
    }
}
else{
    header("Location: ../index.php");
}