<?php
define('rate',10);
 function interest(){
 $p=4;
$t=2;
$interest=(rate*$p*$t)/100;
echo $interest;
 }
 interest();

?>