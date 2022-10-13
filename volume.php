<?php
//pythagoras
$a = 6;
$m = 10;
$t = sqrt($m-$a);
echo "t=" .$t. "m \n";

//alas limas
$pa = 12;
$luasAlas = $pa*$pa;
print 'Luas alas='.$luasAlas."\n";

//volume limas
$a = 144;
$t = 2;
$v = $a*$t/3;
echo "hasil volume limas segiempat=" .$v. "m3 \n";

//jari jari lingkaran
$d = 11;
$r = $d/2;
echo "jari jari=" .$r. "\n";

//volume tabung
define("phi", 3.14);
$tb = 8;
$r = 5.5;
$volumeTabung = phi*pow($r,2)*$tb;
print "volume tabung=".round($v,1);

//luas lingkaran hilang
$r = 5.5;
$LuasLingkaran = phi*pow($r,2);
print "luas lingkaran=".round($v,1);

