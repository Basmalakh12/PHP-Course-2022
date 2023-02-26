 <?php
 echo (bool)"Hello PHP";
 echo '<br>';
 echo gettype((int)((bool)"Hello PHP")); //1
 echo gettype((int)"Hello PHP");//integer
 ?>