<?php
header("Location: ../index.php?page=home");
include "../config/connection.php";
include "functions.php";

$korisnici = dohvatiUsere();

$excel = new COM("Excel.Application");

$excel->Visible = 1;

$excel->DisplayAlerts = 1;

$workbook = $excel->Workbooks->Add();

$sheet = $workbook->Worksheets('Sheet1');
$sheet->activate;

$br = 1;
foreach($korisnici as $kor){
    $polje = $sheet->Range("A{$br}");
    $polje->activate;
    $polje->value = $kor->id;

    $polje = $sheet->Range("B{$br}");
    $polje->activate;
    $polje->value = $kor->ime;

    $polje = $sheet->Range("C{$br}");
    $polje->activate;
    $polje->value = $kor->prezime;

    $polje = $sheet->Range("D{$br}");
    $polje->activate;
    $polje->value = $kor->email;

    $polje = $sheet->Range("E{$br}");
    $polje->activate;
    $polje->value = $kor->datum_registracije;

    $br++;
}


$workbook->_SaveAs("Korisnici.xlsx", -4143);
$workbook->Save();

$workbook->Saved=true;
$workbook->Close;

$excel->Workbooks->Close();
$excel->Quit();

unset($sheet);
unset($workbook);
unset($excel);

header("Location: ../index.php?page=home");