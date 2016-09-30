<?php
$t=time();
echo($t);
echo"<br>";
$m=microtime(true);
echo($m);
echo"<br>";
$d=date("l ds of F Y h:i:s A");
echo($d);
echo"<br>";
$s=strftime("%A, %Y, %M");
echo($s);
echo"<br>";
$m =strtotime(" 30 September 2016");
echo($m);
echo"<br>";
 $g=checkdate(12,28,2016);
 echo($g);
 echo"<br>";
 //$p=phpinfo();
 //echo($p);
 //echo"<br>";
 $v=phpversion();
 echo($v);
 echo"<br>";
?>