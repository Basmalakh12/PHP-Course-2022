# Variables & Constants
## Introduction To Variables And Naming Rules
 - $variableName = "value"; " declear a variable "
 - variableName is a case sensative

 ```php
 $username = "ahmed";
 echo '$username'; // $username
 echo "$username"; // ahmed

 ```
 ## Variable Variable
 - takes value of a variable and treats that as the name of a varible

 ```php
 $a = "Basmala";
 $Basmala = $$a = "Khaled";
 $Khaled = $$$a = "Ahmed";

 echo "Hello $$a"; //  Basmala incorrect output
 echo "Hello ${$a}"; // Khaled = $$a
 ```
 ## Assign By Value And By Reference
 - by value

 ```php
 $a = "Basmala";
 $b = $a; // Basmala
 ```
 - by reference

 ```php
 $a = "Basmala";
 $b = &$a;
 $b = "Khaled";
 echo $a // Khaled
 echo "<br>"
 echo $b // Khaled

 ```
 ## Predefined Variables And Test
  ```php
  echo "<pre>";
  print_r($_server);
  echo "</pre>";

  ```
 ##  Introduction To Constants
 - define("constantName" , "value");
 - constantName =>uper case

 ```php
 define("DB_NAME" , "Basmala" );
 ```
 ## Predefined And Magic Constants
 - php_uname(): ` returns information about the os php is running on `
 - Predefined constants "case sensative"
      - PHP_VERSION
      - PHP_OS_FAMILY
 - magic constants
      - __ LINE __
      - __ FILE __
      - __ DIR __
 - reserved keywords
      - break
      - clone 


