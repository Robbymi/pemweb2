<?php
require_once "class_persegipanjang.php";    
$per1 = new persegiPanjang(12, 6);
$per2 = new persegiPanjang(20, 10);

echo 'Luas pesegi panjang 1: ' . $per1->getLuas();
echo '<br>Keliling pesegi panjang 1: ' . $per1->getKel();
echo '<br><br>Luas pesegi panjang 2: ' . $per2->getLuas();
echo '<br>Keliling pesegi panjang 2: ' . $per2->getKel();
?>