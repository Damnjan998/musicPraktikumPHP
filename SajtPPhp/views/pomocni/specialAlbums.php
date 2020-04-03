<?php
require_once "config/connection.php";
require_once "models/functions.php";

$rezultat = prikazSpecials();

foreach ($rezultat as $rez){
    echo "<div class='grid_1_of_3 images_1_of_3'>    
    <img src='$rez->slika' alt='$rez->alt' />


    <h3>$rez->naziv</h3>

<span class='godina'>
    <sup>Year: $rez->godina</sup>
</span>";
if(isset($_SESSION['korisnik'])){
    echo"<div class='btn'>
        <a href='index.php?page=details&id=$rez->id' data-id=$rez->id class='showMore'>Show more</a>
    </div>
    </div>"; 
    } else {
        echo"<div class='btn'>
        <a href='index.php?page=login' data-id=$rez->id class='showMore'>Show more</a>
    </div>
    </div>";
    }
}