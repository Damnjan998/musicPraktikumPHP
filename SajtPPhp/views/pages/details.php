<div class="content-bg">
<div class="wrap">
<div class="page">
	<div id="detalji">
        <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                require_once "models/functions.php";
                $rez = dohvatiPosebanAlbum($id);

                echo "
                    <p class='nazivAlbum'>$rez->naziv</p></br></br>
                    <img class='slikaAlbum' src='$rez->slika' alt='$rez->alt' /></br></br>
                    <p class='godinaAlbum'>Year: $rez->godina </p></br></br>
                    <p class='opisAlbum'>$rez->opis</p></br></br>
                ";
            }
        ?>        
        <div class="cleaner"></div>
    </div>
</div>
</div>
</div>