<?php
$time = date('y-m-d G:i:s');
echo $time."</br>";
$y=date('y');
$m=date('m');
$d=date('d');
$h=date('h');
$min=date('i');
$s=date('s');
echo $y." ".$m." ".$d." ".$h." ".$min." ".$s."</br>";
 $b = time (); 
 print date("m/d/y",$b) . "<br>"; 
 print date("D, F jS",$b) . "<br>"; 
 print date("l, F jS Y",$b) . "<br>"; 
 print date("g:i A",$b) . "<br>"; 
 print date("r",$b) . "<br>"; 
 print date("g:i:s A D, F jS Y",$b) . "<br>"; 
 ?> 
