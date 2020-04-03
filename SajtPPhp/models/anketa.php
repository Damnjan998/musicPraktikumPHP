<?php
include "../config/connection.php";
require_once "functions.php";

 header("Location: ../index.php");
    if(isset($_POST['btnAnketa'])){
        $answer=$_POST['answer'];
        $idKorisnika=$_POST['idK'];
        echo $answer;
        echo $idKorisnika;
        if($answer==""){
        header("Location: ../index.php");
        }

    $rezultat= upisiOdgovorAnkete();
    $stmt=$conn->prepare($rezultat);
    $stmt->bindParam(":idK",$idKorisnika);
    $stmt->bindParam(":idO",$answer);
    $stmt->execute();
    if($stmt->rowCount()){
        echo "Uspesan unos";
    }
}
?>