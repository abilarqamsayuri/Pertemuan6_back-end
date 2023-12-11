<?php 

    //membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    //echo "Umur saya adalah ". hitungUmur(2003, 2022) ." tahun";

    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo " Perkenalakan, nama saya ".$nama."<br/>";
        //memanggil fungsi lain
        echo " Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
        echo " Senang Berkenalan Dengan Anda <br/>";
    }

    //memanggil fungsi
    perkenalan("Abil Arqam Sayuri");
?>