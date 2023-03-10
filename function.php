<?php
function hitungUmur($tahunLahir, $tahunSekarang){
    $hitungUmur = $tahunSekarang - $tahunLahir;
    echo $hitungUmur;
}

hitungUmur(2002,2023);
echo "<br>";


function greeting($nama)
{
    return "hai, namaku $nama !";
}

echo greeting("nurul");