<?php
    if(!isset($_SESSION["korisnik"])){
        header("location: index.php?page=home");       
    } else{
        if($_SESSION["korisnik"]->id_uloga == 1){
            header("location: index.php?page=home");
        }
    }
?>
<div class="content-bg">
            <div class="wrap">
                <div class="main">
                    <div class="content">
                        <h2>Admin Panel</h2>
                            <h3 class="nasloviAdmin">Albums</h3>
                                <table id="tabelaAlbumi">
                                    <tr>
                                        <th class="tabelaIdAlbuma">Id</th>
                                        <th class="tabelaNazivAlbuma">Name</th>
                                        <th class="tabelaGodinaAlbuma">Year</th>
                                        <th class="tabelaPutanjaSlikeAlbuma">Image</th>
                                        <th class="tabelaKategodijaAlbuma">CategoryId</th>
                                        <th class="taster">Update</th>
                                        <th class="taster">Delete</th>
                                    </tr>
                                    <?php
                                        $rezultat = dohvatiSveAlbume();
                                        foreach($rezultat as $album){
                                            echo "<tr>
                                            <td class='tabelaIdAlbuma'>$album->id</td>
                                            <td class='tabelaNazivAlbuma'>$album->naziv</td>
                                            <td class='tabelaGodinaAlbuma'>$album->godina</td>
                                            <td class='tabelaPutanjaSlikeAlbuma'>$album->slika</td>
                                            <td class='tabelaKategodijaAlbuma'>$album->id_kategorija</td>
                                            <td class='taster'><a href='index.php?page=izmeni&id=$album->id'><button class='submit-btn' type='submit' name='izmeni'>Update</button></a></td>
                                            <td class='taster'><a href='models/izbrisi.php?id=$album->id'><button class='submit-btn' type='submit' name='izbrisi'>Delete</button></a></td>
                                            </tr>";
                                        }
                                    ?>
                                </table>     
                                <h3 class="nasloviAdmin">New album</h3>
                                <form action="models/unesi.php" name="formaDodaj"  method="POST" enctype="multipart/form-data">
                                <table id="insertTabela">
                                    <tr>
                                        <td>Name:</td>
                                        <td><input type="text" required pattern="^[A-Z][a-z]{1,11}(\s[A-Z][a-z]{1,11})*$" title="Example: Herald" id="tbNazivAlbuma" name="naziv"></td>
                                    </tr>
                                    <tr>
                                        <td>Year:</td>
                                        <td><input type="text" required pattern="^[1-9]{1}[0-9]{2,3}$" title="Example: 1998" id="tbGodinaAlbuma" name="godina"></td>
                                    </tr>
                                    <tr>
                                        <td>Description:</td>
                                        <td><input type="text" required  title="Tell us something about your Album." id="tbOpisAlbuma" name="opis"></td>
                                    </tr>
                                    <tr>
                                        <td>Featured:</td>
                                        <td><input type="text" required pattern="^[0-1]{1}$" title="0 OR 1" id="tbIstaknut" name="istaknut"></td>
                                    </tr>    
                                    <tr>
                                        <td>Image:</td>
                                        <td><input type="file" id="slika" required name="slika"></td>
                                    </tr>
                                    <tr>
                                        <td>Category:</td>
                                        <td><select class='listaKategorija' id="ddlKategorija" name='listaKategorija'>
                                        <?php
                                        $rez2 = prikazKategorije();
                                        foreach($rez2 as $kat){
                                            echo "<option value=$kat->id>$kat->naziv</option>";
                                        }
                                        ?>
                                         </select>
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td colspan="2"><input class="submit-btn" id='btnIzmena' value="Insert" type="submit" name="unesi"></td>
                                    </tr>   
                                    </table>  
                                    </form>
                                    <h3 class="nasloviAdmin">Users</h3> 
                                    <table id="tabelaKorisnici">
                                        <tr>
                                            <th class="tabelaIdKorisnika">Id</th>
                                            <th class="tabelaImeKorisnika">First Name</th>
                                            <th class="tabelaPrezimeKorisnika">Last Name</th>
                                            <th class="tabelaEmailKorisnika">Email</th>
                                            <th class="tabelaVremeKorisnika">Date Of Registration</th>
                                            <th class="taster">Delete</th>
                                        </tr>
                                        <?php 
                                        $rezultat3 = dohvatiUsere();
                                        foreach($rezultat3 as $kor){
                                            echo "<tr>
                                            <td class='tabelaIdKorisnika'>$kor->id</td>
                                            <td class='tabelaImeKorisnika'>$kor->ime</td>
                                            <td class='tabelaPrezimeKorisnika'>$kor->prezime</td>
                                            <td class='tabelaEmailKorisnika'>$kor->email</td>
                                            <td class='tabelaVremeKorisnika'>$kor->datum_registracije</td>
                                            <td class='taster'><a href='models/izbrisiKorisnike.php?id=$kor->id'><button class='submit-btn' type='submit' name='izbrisiKorisnike'>Delete</button></a></td>
                                            </tr>";
                                        }
                                        ?>
                                    </table>  
                                    <h3 class="nasloviAdmin">Survey Results</h3>
                                    <table id="tabelaAnketa">
                                        <tr>
                                            <th class="tabelaImeAnketa">First Name</th>
                                            <th class="tabelaPrezimeAnketa">Last Name</th>
                                            <th class="tabelaOdgovorAnketa">Answer</th>
                                        </tr>
                                        <?php 
                                        $rezultat4 = anketaRezultati();
                                        foreach($rezultat4 as $ank){
                                            echo "<tr>
                                            <td class='tabelaImeAnketa'>$ank->ime</td>
                                            <td class='tabelaPrezimeAnketa'>$ank->prezime</td>
                                            <td class='tabelaOdgovorAnekta'>$ank->odgovor</td>
                                            </tr>";
                                        }
                                        ?>
                                    </table>
                                    <h3 class="nasloviAdmin">Statistics In Last 24 Hours</h3>
                                    <table id="tabelaStatistika">
                                        <tr>
                                            <th class="tabelaImeAnketa">Page</th>
                                            <th class="tabelaPrezimeAnketa">Nuber of visits</th>
                                            <th class="tabelaOdgovorAnketa">Percentage</th>
                                        </tr>
                                    <?php
                                        $log = fopen("data/log.txt", 'r');
                                        $redovi = file("data/log.txt");
                                    
                                        $prethodniDan = strtotime('-1 day', time());
                                        $brojPoseta = 0;
                                        $statistika = [];
                                        $brojRedova = count($redovi);
                                        $potrebnaStrana = "/SajtPPhp/index.php";
                                    
                                        for ($i=0; $i < $brojRedova; $i++){
                                            $red = explode("\t", $redovi[$i]);
                                            $vreme = strtotime($red[1], time());
                                            if($vreme > $prethodniDan){
                                                if (strpos($red[0], $potrebnaStrana) !== false){
                                                    $brojPoseta++;
                                                    if(array_key_exists($red[0], $statistika)){
                                                        $statistika[$red[0]] = $statistika[$red[0]] + 1;
                                                    } else {
                                                        $statistika[$red[0]] = 1;
                                                    }
                                                }
                                            }
                                        }
                                        
                                        foreach ($statistika as $key => $value){
                                            $procenat = round($value / $brojPoseta * 100, 2);
                                            echo "<tr>
                                            <td class='tabelaStatisikaPutanja'>$key</td>
                                            <td class='tabelaStatistikaBroj'>$value</td>
                                            <td class='tabelaStatistikaProcenat'>$procenat</td>
                                            </tr>";
                                        }
                                        fclose($log);
                                    ?>
                                    </table>
                                    <h3 class="nasloviAdmin">Active Users</h3>
                                    <table id="tabelaKorisnici">
                                        <tr>
                                            <th class="tabelaIdKorisnika">Id</th>
                                            <th class="tabelaImeKorisnika">First Name</th>
                                            <th class="tabelaPrezimeKorisnika">Last Name</th>
                                            <th class="tabelaEmailKorisnika">Email</th>
                                            <th class="tabelaVremeKorisnika">Date Of Registration</th>
                                        </tr>
                                    <?php
                                        $aktivni = dohvatiUlogovanogUsera();
                                        foreach($aktivni as $akt){
                                            echo "<tr>
                                            <td class='tabelaIdKorisnika'>$akt->id</td>
                                            <td class='tabelaImeKorisnika'>$akt->ime</td>
                                            <td class='tabelaPrezimeKorisnika'>$akt->prezime</td>
                                            <td class='tabelaEmailKorisnika'>$akt->email</td>
                                            <td class='tabelaVremeKorisnika'>$akt->datum_registracije</td>
                                            </tr>";
                                        }
                                    ?>
                                    </table>
                            </div>
                    <div class="sidebar">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>