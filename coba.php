<?php
// coded by RiyanID
// copyright 2019 
//Garuda Tersakti 72
//IG: ryanfga_
error_reporting(0);
echo " ####################\n";
echo " # Coded By RiyanID #\n";
echo " # BALITBANG HASH   #\n";
echo " ####################\n\n";

function unhex($str='',$code='') {
  $all=explode("g",$str);
  $head=hexdec($all[0])-$code;
  $content=$all[1];
  if($head==(strlen($content)/2)) {
    for($i=0;$i<=$head-1;$i++) {
          $t
.=chr(hexdec(substr($content,$i*2,2))-$code);
        }
        $t =strrev($t);
  }
  return $t;
}
echo "Hashing >>> $argv[1]\n";
sleep(4);
echo "\n Result Password => ".unhex($argv[1], 82)."\n\n";
?>