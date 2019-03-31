<?php
$m =date('m', strtotime('today')) ;
$d =date('d', strtotime('today')) ;
$y =date('y', strtotime('today')) ;
$m1= date('m', strtotime('2017-10-03'));
$d1= date('d', strtotime('2017-10-03'));
$y1= date('y', strtotime('2017-10-03'));

$a = mktime(0,0,0,$m,$d,$y);
$b = mktime(0,0,0,$m1,$d1,$y1);
echo "$a, $b" ;?></br><?php 
$c = $a - $b;
echo $c/86400;
?>