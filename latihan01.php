<?php
$cars = array("Volvol","BMW","Toyota");

$jmldata = count($cars);

echo "Jumlah data : ". $jmldata ."<br>";
for($i=0;$i<$jmldata;$i++){
    echo "<br> Kendaraan " .$cars[$i];    
}
echo "<hr>";

echo "<ol class=\"mobil\">";
foreach($cars as $data){
    echo "<li> Kendaraan" .$data . "</li>";
}
echo "</ol>";
?>