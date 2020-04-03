<div class="content-bg">
<div class="wrap">
<div class="page">
	<div id="author">
        <?php 
            $autor = autorInformacije();
        ?>
        <div id="levo">
            <img src="<?= $autor->slika ?>" id="ja" alt="Autor" class="damnjanImg"/>
        </div>
        <div id="desno">
            <h1>About me:</h1>
            <p><?= $autor->opis ?></p>
        </div>
            
        <div class="cleaner"></div>
    </div>
</div>
</div>
</div>