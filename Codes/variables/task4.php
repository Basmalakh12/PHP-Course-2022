 <?php
 /* use Predefined Variables to print
  Document Root
  Server Name
  System Root
  Open SSL Configuration
 */
 echo '<pre>' ;
 
 echo $_SERVER["OPENSSL_CONF"];
 echo '<br>';
 echo $_SERVER["HTTP_HOST"];
 echo '<br>';
 echo $_SERVER["SystemRoot"];
 echo '<br>';
 echo $_SERVER["DOCUMENT_ROOT"];
 
 echo '</pre>' ;
 ?>