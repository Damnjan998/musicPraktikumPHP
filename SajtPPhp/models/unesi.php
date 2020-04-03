<?php
session_start();
include "../config/connection.php";
require_once "functions.php";

if (isset($_SESSION["korisnik"]) && $_SESSION["korisnik"]->id_uloga == 2) {
    if (isset($_POST["unesi"])) {
        $naziv    = $_POST["naziv"];
        $godina   = $_POST["godina"];
        $opis     = $_POST["opis"];
        $katId    = $_POST["listaKategorija"];
        $istaknut = $_POST["istaknut"];
        
        
        $slika        = $_FILES["slika"];
        $slikaName    = $slika["name"];
        $slikaTmpName = $slika["tmp_name"];
        $slikaSize    = $slika["size"];
        $slikaError   = $_FILES["slika"]["error"];
        $slikaType    = $slika["type"];
        
        $slikaExp        = explode('.', $slikaName);
        $slikaEkstenzija = strtolower(end($slikaExp));
        
        $dozvoljeno = array(
            'jpg',
            'jpeg',
            'png',
            'pdf'
        );
        if (in_array($slikaEkstenzija, $dozvoljeno)) {
            if ($slikaError === 0) {
                $slikaFolder = "assets/images/" . $slikaName;
                move_uploaded_file($slikaTmpName, $slikaFolder);
                $rezultat = dodajAlbum($naziv, $godina, $slikaFolder, $opis, $istaknut, $katId);
                header("Location: ../index.php?page=admin");
            }
        }
    }
} else {
    header("Location: ../index.php?page=home");
}