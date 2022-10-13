<?php
//arithmatic
$a = '10';
$b = 10;
$c = $a-$b;
print 'hasil a-b='.$c."\n";
echo "===================\n";

//luas lingkaran
define("phi", 3.14);
$r = 10;
$LuasLingkaran = phi*pow($r,2);
print "luas lingkaran dengan \n r=10 \n luas=".$LuasLingkaran;
echo "\n===================\n";

//volume tabung
$t = 10;
$volumeTabung = phi*pow($r,2)*$t;
print "volumeTabung dengan \n r=10 \n t=10 \n volume=".$volumeTabung;
