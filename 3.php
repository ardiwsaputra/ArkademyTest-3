<?php

function hitungKata($kalimat, $kata)
{
    $jmlStrKalimat = strlen($kalimat);
    $jmlStrKata = strlen($kata);
    
    if ($jmlStrKata <= $jmlStrKalimat)
    {
        echo "Ditemukan ".substr_count($kalimat, $kata);
    } 
    else 
    {
        echo "Jumlah Karakter Kata lebih dari Karakter Kalimat";
    }

}

hitungKata("banananana","nana");

?>