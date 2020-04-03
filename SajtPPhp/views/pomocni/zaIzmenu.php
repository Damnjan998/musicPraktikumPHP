<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $rez2 = prikazKategorije();
    $rez = dohvatiPosebanAlbum($id);
    echo "<form action = 'models/izmenaAlbuma.php?id=$id' method='POST' enctype='multipart/form-data'>
    <table id='insertTabela'>
    <tr>
        <td>Name</td>
        <td><input type='text' pattern='^[A-Z][a-z]{1,11}(\s[A-Z][a-z]{1,11})*$' required title='Example: Herald' value='$rez->naziv' name='naziv'></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><input type='text' title='Tell us something about your Album.'  name='opis' value='$rez->opis'></td>
    </tr>
    <tr>
        <td>Year</td>
        <td><input type='text' pattern='^[1-9]{1}[0-9]{2,3}$' title='Example: 1998' required name='godina' value='$rez->godina'></td>
    </tr>
    <tr>
        <td>Image</td>
        <td><input type='file' name='slika'/></td>
    </tr>
    <tr>
        <td>Category</td>
        <td><select class='listaKategorija' name='listaKategorija'>";
            $i = 1;
            foreach($rez2 as $kat){
                if ($i == $rez->id_kategorija){
                    echo "<option value='$kat->id' selected='$i'>$kat->naziv</option>";
                } else {
                    echo "<option value=$kat->id>$kat->naziv</option>";
                }
                $i++;
            }
            echo "</select>
            </td>
    </tr>
    <tr>
        <td colspan='2'><button class='submit-btn' type='submit' id='btnIzmena' name='izmeni'>Update</button></td>
    </tr>
    </table>
    </form>";
}
?>      