<?php
session_start();
include "../config/connection.php";
include "functions.php";


if(isset($_POST['send'])){
	$email = $_POST["email"];
	$sifra = $_POST["lozinka"];
	$siframd5 = md5($sifra);
	$validno = true;
	$greske = [];

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
		$upit="SELECT * from korisnik where email=:email and lozinka=:sifra";
		$priprema = $conn->prepare($upit);
		$priprema->bindParam(":email", $email);
		$priprema->bindParam(":sifra", $siframd5);
		$rezultat = $priprema->execute();
		if($rezultat){
			if($priprema->rowCount()==1){
				$korisnik=$priprema->fetch();
				$_SESSION['korisnik']=$korisnik;
				$aktivan = 1;
				$id = $_SESSION['korisnik']->id;
				updateUser($aktivan, $id);
				http_response_code(200);
			} else {
				http_response_code(404);
			}
		} else {
			$korisnikEmail = proveraKorisnikaMejl($email);
			if($korisnikEmail){
				$to = $email;
				$subject = "Wrong log parameters!";
				$message = "You didn't log in correctly!";
				$headers = "From: askovicd1998@gmail.com" . "\r\n" .
							"Reply-To: askovicd1998@gmail.com" . "\r\n" .
							"X-Mailer: PHP/" . phpversion();
				mail($to, $subject, $message, $headers);
			}
		}
	} else {
		http_response_code(422);
	}
}
?>