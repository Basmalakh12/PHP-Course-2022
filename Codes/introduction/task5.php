 <?php
 /* 
 Needed Output 
 Use Nowdoc with variable 
 Hello "'Elzero'"
 We Love $Programming$
 Languages Specially "PHP" 
 */
 $b =<<<'now'
 Hello "'Elzero'"
 We Love $Programming$
 Languages Specially "PHP"
 now;
 echo nl2br($b);
 ?>
 

