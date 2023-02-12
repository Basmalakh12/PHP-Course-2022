 # Cookies
 ##  How To Use Cookies?
 setcookie( Name[ Required ], value , expire , path , domin , secure , HTTP_Only )
 ```php
 setcookie("style" , "dark" , time()+ 60 * 60 * 24 * 30); // keep change in Cookie for 1 month

 echo "<pre>";
 print_r($_Cookies);
 echo "</pre>";

 echo $_Cookies["style"];

 



 ```