<?php
require_once "config/connection.php";
require_once "models/functions.php";

$rezultat = prikazMenija();

foreach($rezultat as $re){
    echo "<li><a href='index.php?page=$re->href'>$re->naziv</a></li>";
}
if(isset($_SESSION['korisnik'])){
	echo "<li><a href='models/logout.php'>Log out</a></li>";
	
	if($_SESSION['korisnik']->id_uloga == 2){
		echo "<li><a href='index.php?page=admin'>Admin Panel</a></li>";
	}
}else{
	echo "<li><a href='index.php?page=login'>Log in | Registration</a></li>";	
}
?>
