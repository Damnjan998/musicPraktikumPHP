<?php
    session_start();

    require_once "config/connection.php";

    include "views/fixed/head.php";
    include "views/fixed/navbar.php";

    if(isset($_GET['page'])){
        $strana = $_GET['page'];
        switch($strana){
            case 'home':
                include "views/fixed/slider.php";
                include "views/pages/home.php";
                break;
            case 'artists':
                include "views/pages/artists.php";
                break;
            case 'specials':
                include "views/pages/specials.php";
                break;
            case 'contact':
                include "views/pages/contact.php";
                break;
            case 'about':
                include "views/pages/about.php";
                break;
            case 'login':
                include "views/pages/login.php";
                break;
            case 'register':
                include "views/pages/login.php";
                break;
            case 'admin':
                include "views/pages/admin.php";
                break;
            case 'details':
                include "views/pages/details.php";
                break;
            case 'izmeni':
                if (!isset($_SESSION["korisnik"])) {
                header("Location: index.php?page=home");
                } else {
                if ($_SESSION["korisnik"]->id_uloga == 1) {
                    header("Location: index.php?page=home");
                }
            }
                include "views/pages/izmeni.php";
                break;
            
            default:
                include "views/pages/home.php";
                break;
        }
    } else {
        include "views/fixed/slider.php";
        include "views/pages/home.php";
    }

    include "views/fixed/footer.php";
?>
