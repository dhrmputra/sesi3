<?php

$age = array("Alit"=>"35","Angga"=>"37","Kevin"=>"20");

echo "Umur dari Alit ". $age["Alit"]. "tahun 🔥<br>";

echo "<hr>";

foreach($age as $nama => $umur){
    echo " umur dari " .$nama ." : ".$umur. " 🔥<br>";
}