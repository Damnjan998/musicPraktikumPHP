<?php
header("Location: ../index.php?page=home");
header("Content-Type: application/json");
if(isset($_SESSION["korisnik"])){
	header("location: index.php?page=home");
}
include "../config/connection.php";
require_once "functions.php";

if(isset($_POST["send"])) {
	$ime = $_POST["ime"];
	$prezime = $_POST["prezime"];
	$email = $_POST["email"];
	$sifra = $_POST["sifra"];
	$vremeReg = date("Y-m-d H:i:s", time());
	$siframd5 = md5($sifra);
	$reIme =  "/^[A-ZŽĆČŠĐ][a-zđžćčš]{1,19}(\s[A-ZŽĆČŠĐ][a-zđžćčš]{1,19})*$/";
	$rePrezime =  "/^[A-ZŽĆČŠĐ][a-zđžćčš]{1,19}(\s[A-ZŽĆČŠĐ][a-zđžćčš]{1,19})*$/";
	$validno = true;
	$greske = [];
	if(!preg_match($reIme, $ime)){
		$validno = false;
		array_push($greske, "Your name is not correct!");
	}
	
	if(!preg_match($rePrezime, $prezime)){
		$validno = false;
		array_push($greske, "Your last name is not correct!");
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$validno = false; 
		array_push($greske, "Your email is not correct!");
	}

	if(empty($sifra)){
		$validno = false;
		array_push($greske, "Your password is not correct!");
	}

	if(count($greske) > 0){
		$podaciOGreskama = fopen("../data/greske.txt", "a+");
		foreach($greske as $key => $value){
			fwrite($podaciOGreskama, $value);
			fwrite($podaciOGreskama, "\n");
		}
		fclose($podaciOGreskama);
	}

	if($validno){
		$rezultat = registracija($ime, $prezime, $email, $siframd5, $vremeReg);		
	}
}
?>