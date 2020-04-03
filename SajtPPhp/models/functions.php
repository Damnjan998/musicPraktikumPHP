<?php

function prikazMenija(){
    return executeQuery("SELECT * FROM meni");
}

function prikazFeatures(){
    return executeQuery("SELECT * FROM album WHERE istaknut = 1");
}

function prikazSpecials(){
    return executeQuery("SELECT * FROM album WHERE istaknut = 0 LIMIT 5");
}

function prikazInformacija(){
    return executeQuery("SELECT * FROM informacija");
}

function dohvatiKorisnikaAnketa($id){
    return executeQuery("SELECT id_korisnika FROM korisnik_odgovor WHERE id_korisnika=$id");
}

function dohvatiAktivnuAnketu(){
    return executeQuery("SELECT * FROM anketa WHERE aktivna = 1");
}

function upisiOdgovorAnkete(){
    return "INSERT INTO korisnik_odgovor(id_korisnika,id_odgovora) VALUES(:idK,:idO);";
}

function prikazMogucihOdgovora(){
    return executeQuery("SELECT * FROM odgovor");
}

function odgovorJedan(){
    return executeQuery("SELECT COUNT(id_odgovora) AS br from korisnik_odgovor WHERE
    id_odgovora=1");
}

function odgovorDva(){
    return executeQuery("SELECT COUNT(id_odgovora) AS br from korisnik_odgovor WHERE
    id_odgovora=2");
}

function odgovorTri(){
    return executeQuery("SELECT COUNT(id_odgovora) AS br from korisnik_odgovor WHERE
    id_odgovora=3");
}

function odgovorCetiri(){
    return executeQuery("SELECT COUNT(id_odgovora) AS br from korisnik_odgovor WHERE
    id_odgovora=4");
}

function odgovorPet(){
    return executeQuery("SELECT COUNT(id_odgovora) AS br from korisnik_odgovor WHERE
    id_odgovora=5");
}

function prikazIzvodjaci(){
    return executeQuery('SELECT * FROM izvodjac');
}

function prikazKategorije(){
    return executeQuery("SELECT * FROM kategorija");
}

function registracija($ime, $prezime, $email, $siframd5, $vremeReg){
    global $conn;
    $upit="INSERT INTO korisnik (ime, prezime, email, lozinka, datum_registracije, id_uloga)
    VALUES (:ime, :prezime, :email, :sifra, :datum_registracije, '1')";
    $priprema = $conn->prepare($upit);
    $priprema->bindParam(':ime', $ime);
    $priprema->bindParam(':prezime', $prezime);
    $priprema->bindParam(':email', $email);
    $priprema->bindParam(':sifra', $siframd5);
    $priprema->bindParam(':datum_registracije', $vremeReg);
    return $priprema->execute();
}

function dohvatiPosebanAlbum($id){
    global $conn;
    $upit="SELECT * from album where id=$id";
    $rezultat = $conn->query($upit);
    return $rezultat->fetch();
}

function dodajAlbum($naziv, $godina, $slikaFolder, $opis, $istaknut, $katId){
    global $conn;
    $upit     = "INSERT INTO album (naziv, godina, slika, opis, istaknut, id_kategorija)
                VALUES (:naziv, :godina, :slika, :opis, :istaknut, :katId)";
    $priprema = $conn->prepare($upit);
    $priprema->bindParam(':naziv', $naziv);
    $priprema->bindParam(':godina', $godina);
    $priprema->bindParam(':slika', $slikaFolder);
    $priprema->bindParam(':opis', $opis);
    $priprema->bindParam(':istaknut', $istaknut);
    $priprema->bindParam(':katId', $katId);
    
    return $priprema->execute();
}

function izbrisiAlbum($id){
    global $conn;
    $upit ="DELETE FROM album where id=$id";
    $priprema = $conn->prepare($upit);
    return $priprema->execute();
}

function izbrisiKorisnike($id){
    global $conn;
    $upit ="DELETE FROM korisnik where id=$id";
    $priprema = $conn->prepare($upit);
    return $priprema->execute();
}

function dohvatiSveAlbume(){
    return executeQuery("SELECT * FROM album");
}

function dohvatiUsere(){
    return executeQuery("SELECT * FROM korisnik WHERE id_uloga=1");
}

function anketaRezultati(){
    return executeQuery("SELECT k.ime as ime, k.prezime as prezime, o.odg as odgovor From korisnik k inner join korisnik_odgovor ko ON k.id = ko.id_korisnika INNER join odgovor o ON ko.id_odgovora = o.id");
}

function autorInformacije(){
    global $conn;
    $upit = "SELECT * FROM autor";
    $rezultat = $conn->query($upit);
    return $rezultat->fetch();
}

function updateUser($aktivan, $id){
    global $conn;
    $upit = "UPDATE korisnik SET aktivan=:aktivan WHERE id=:idKor";
    $stmt = $conn->prepare($upit);
    $stmt->bindParam(':aktivan', $aktivan);
    $stmt->bindParam(':idKor', $id);
    $stmt->execute(); 
}

function izmenaAlbumaSaSlikom($naziv, $tekst, $godina, $slikaFolder, $katId, $id){
    global $conn;
    $upit     = "UPDATE album  SET naziv='$naziv', opis='$tekst', godina='$godina', slika='$slikaFolder', id_kategorija='$katId' where id='$id'";
    $priprema = $conn->prepare($upit);
    return $priprema->execute();
}

function izmenaAlbumaBezSlike($naziv, $tekst, $godina, $katId, $id){
    global $conn;
    $upit = "UPDATE album SET naziv='$naziv', opis='$tekst', godina='$godina', id_kategorija='$katId' where id='$id'";
    $priprema = $conn->prepare($upit);
    return $priprema->execute();
}

function dohvatiUlogovanogUsera(){
    return executeQuery("SELECT * FROM korisnik WHERE aktivan=1");
}

function proveraKorisnikaMejl($email){
    global $conn;
    $upit = "SELECT * FROM korisnik WHERE email = $email";
    $rezultat = $conn->query($upit);
    return $rezultat->fetch();
}

?>