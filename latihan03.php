<?php

$mhs = array(
    array("Nama "=>"Boboiboy","ID"=>"1234","Kota"=>"Durian Runtuh"),
    array("Nama "=>"Spongebob","ID"=>"3224","Kota"=>"Bikini Botom"),
    array("Nama "=>"Susanti","ID"=>"5542","Kota"=>"Jakarta"),
    array("Nama "=>"Patrick","ID"=>"6969","Kota"=>"Batu"),
);
// echo $mhs[0]["Nama "];
// echo "<hr>";
// print_r($mhs);
// echo "<hr>";

// foreach($mhs as $data){
//     foreach ($data as $lb => $nval){
//         echo $lb . " : ". $nval . "<br>";
//     }
//     echo "<br>";
// }

header("Content-type:application/json");
echo json_encode($mhs); 