 <?php
 // print b =100 don't chang 200,100
 $a = 200;
 $b = $a;
 $a = 100;
 $b = &$a; //by reference

 echo $b; 