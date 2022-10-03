<?php
//Fungsi menghitung nilai yang habis dibagi 3 dan 5
function habisDibagi()
{
    //inisiasi awal nilai yang akan dihitung
    $i = 1;
    //while loop pertambahan nilai hingga 100
    while ($i <= 100) {
        if ($i % 5 == 0 && $i % 3 == 0) { //habis dibagi 3 dan 5
            echo ("TigaLima ");
        } elseif ($i % 3 == 0) { //habis dibagi 3
            echo ("Tiga ");
        } elseif ($i % 5 == 0) { //habis dibagi 5
            echo ("Lima ");
        } else { //kondisi selain kondisi diatas
            echo ($i . ' ');
        }
        $i++; //pertambahan nilai 
    }
}
habisDibagi();//pemanggilan fungsi
