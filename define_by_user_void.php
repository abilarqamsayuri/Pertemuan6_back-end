<?php
// function salam($name='Faiz <br>')
//     {
//         echo 'apa kabar '.$name;
//     }

//     salam();// apa kabar Faiz
//     salam(' Alissa');// apa kabar Alissa
?>

<?php
function salam($name)
    {
        echo "<h2>Assalamu'alaikum ".strtoupper($name)."</h2> ";
    }

    salam('ali');
    salam('fadil');
    salam('');
?>