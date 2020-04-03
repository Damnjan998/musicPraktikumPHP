<?php

    include "../config/connection.php";
    include "functions.php";
    
    $autor = autorInformacije();
    $word = new COM("word.application");
    $word->visible=0;
    $word->Documents->Add();
    $word->Selection->Font->Name = 'Times New Roman';
    $word->Selection->Font->Size = '16';

    $word->Selection->TypeText($autor->opis . "\nBroj Indeksa: 174/17");
    
    $file = tempnam(sys_get_temp_dir(), "word");
    $word->Documents[1]->SaveAs($file);

    $word->quit();
    unset($word);

    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment;Filename=\"Askovic_Damnjan_174_17.docx\"");

    readfile($file);
    unlink($file);

    header("Location: ../index.php?page=home");
?>