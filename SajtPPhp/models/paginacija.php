<?php

include "../config/connection.php";

$brojPoStrani = 10;

if (isset($_GET["kat_id"])) {
    $kategorija = $_GET["kat_id"];

    $countUpit = "SELECT COUNT(*) AS brojAlbuma from album WHERE id_kategorija = ".$kategorija;
    $priprema = $conn->prepare($countUpit);

    $rezultatCount = $conn->query($countUpit)->fetch();
    $brojRez = $rezultatCount->brojAlbuma;
    $ukupno = ceil($brojRez / $brojPoStrani);
} else {
    $countUpit = "SELECT COUNT(*) AS brojAlbuma from album";
    $rezultatCount = $conn->query($countUpit)->fetch();
    $brojRez = $rezultatCount->brojAlbuma;
    $ukupno = ($brojRez / $brojPoStrani);
}

echo json_encode($ukupno);