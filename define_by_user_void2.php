<?php 
//.1
    //membuat fungsi
    //function perkenalan($nama, $salam){
        //echo $salam.",";
        //echo " Perkenalakan, nama saya ".$nama."<br/>";
        //echo " Senang Berkenalan Dengan Anda <br/>";
    //}

    //memanggil fungsi yang sudah dibuat
    //perkenalan("Abil", "Hai");

    //echo "<hr/>";

    //$saya = "Lia";
    //$ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    //perkenalan($saya, $ucapanSalam);
    
    
//.2
    //membuat fungsi
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo " Perkenalakan, nama saya ".$nama."<br/>";
        echo " Senang Berkenalan Dengan Anda <br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Arqam", "Hi");

    echo "<hr/>";

    $saya = "Lia";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya);

?>