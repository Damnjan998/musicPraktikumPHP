<?php

    include "../config/connection.php";
    include "functions.php";
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        if (isset($_POST["izmeni"])) {
            $naziv  = $_POST["naziv"];
            $godina = $_POST["godina"];
            $katId  = $_POST["listaKategorija"];
            $tekst  = $_POST["opis"];
            
            if (isset($_FILES["slika"])) {
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
                        $rezultat = izmenaAlbumaSaSlikom($naziv, $tekst, $godina, $slikaFolder, $katId, $id);
                        header("Location: ../index.php?page=admin");   
                    }
                }            
                else {
                    $rezultat = izmenaAlbumaBezSlike($naziv, $tekst, $godina, $katId, $id);
                    header("Location: ../index.php?page=admin");
                } 
            }
        }
    }
?>