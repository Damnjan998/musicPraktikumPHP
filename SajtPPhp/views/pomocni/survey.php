<?php

    if(isset($_SESSION['korisnik'])) {
      $id=$_SESSION['korisnik']->id;
      $korisnik=dohvatiKorisnikaAnketa($id);
      foreach($korisnik as $k) {
         $idKorisnik=$k->id_korisnika;
      }
      if(!isset($idKorisnik)):?>
      <div id="okvir">
         <div id="anketa">
            <h1>Take Survey</h1>
              <?php 
               $ankete = dohvatiAktivnuAnketu();
               foreach($ankete as $anketa):
              ?>
            <div id="pitanje">
               <p class="que"><?= $anketa->pitanje?></p>
            </div>
            <?php endforeach;?>
            <div id="odgovori">
               <form method="POST" action="models/anketa.php">
                  <?php
                     $odgovori=prikazMogucihOdgovora();
                     foreach($odgovori as $odg):
                     ?>
                  <div class="polja">
                     <input type="radio" value="<?=$odg->id?>" class="buttons" name="answer"><?=$odg->odg?>
                  </div>
                  <?php endforeach;?>
                  <input type="hidden" id="idK" name="idK" value="<?= $id?>"/>
                  <input type="submit" id="btnAnketa" name="btnAnketa" value="Submit"/>
               </form>
            </div>
         </div>
      </div>
      <?php endif;?>
      <?php if(isset($idKorisnik)):?>
      <div id="okvir">
         <div id="anketa">
            <h1>Results</h1>
            <div id="pitanje">
               <?php
                  $rezultat=odgovorJedan();
                  $rezultat1=odgovorDva();
                  $rezultat2=odgovorTri();
                  $rezultat3=odgovorCetiri();
                  $rezultat4=odgovorPet();
                  foreach($rezultat as $odg):
                  foreach($rezultat1 as $odg1):
                  foreach($rezultat2 as $odg2):
                  foreach($rezultat3 as $odg3):
                  foreach($rezultat4 as $odg4):
                  ?>
               <p class="brojOdgovora">Very bad: <?= $odg->br?></p>
               <p class="brojOdgovora">Bad: <?= $odg1->br?></p>
               <p class="brojOdgovora">Good: <?= $odg2->br?></p>
               <p class="brojOdgovora">Very good: <?= $odg3->br?></p>
               <p class="brojOdgovora">Excellent: <?= $odg4->br?></p>
               <?php endforeach;?>
               <?php endforeach;?>
               <?php endforeach;?>
               <?php endforeach;?>
               <?php endforeach;?>
            </div>
            <div id="odgovori">
           
            </div>
         </div>
      </div>
      <?php endif;
    }
   ?>