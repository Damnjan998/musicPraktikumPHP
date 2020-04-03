<?php

$rezultat = prikazKategorije();

foreach($rezultat as $rez){
    echo "<li class='kat'><a data-id='$rez->id' class='filter-category' href='#'>$rez->naziv</a></li>";
}