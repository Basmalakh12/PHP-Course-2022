 # Introduction To PHP

 ## to print output
 - echo()
 - print()

 ## Comment Instructions
 -  //   or   #  :`  for single line`
 -   /* */  :`  for multiple lines`
 ---

 ##  Data Types
 - bool :` true , false `
 - int :` integer number `
 - float :` floating point number , double" `
 - string :`char`
 - array : ` set of elements`
 - gettype() :` return data type `
 ---

 ##  Type Juggling And Automatic Type Conversion
 ```php

 echo 1 + "2";//3
 echo get type(1 + "2"); //interger

 ```
 ---
 automatic type : ` get type() in it return data type in output not in input `

 ##  Type Casting
 ```php
 echo 5 + "5 lessons"; // 10 with warning ,lesson invalid
 echo 5 + (int)"5 lessons"; // 10
 echo 10 +(int) 15.5; //25 return integer number
 echo 10.5 +10.5; // 21
 echo gettype(10.5 +10.5); //double
 echo (int) 10.5 + (int) 10.5; //20
 echo (int)(10.5 +10.5);  // 21 

 ```
 ---
 ## Boolean And Converting To Boolean
 var_dump() :`used to dump information about a variable. This function displays structured information such as type and value of the given variable.`
 ```php
 var_dump((bool)""); // bool (false)
 var_dump((bool)"php"); //bool (true)

 ```
 ---
 ## String And Escaping

 ### " \ " => Escaping
 ### nl2br() => new line " < br >"

 ```php

 echo " Hello 'MR' mohamed" .  " <br>"; // Hello 'MR' mohamed
 echo ' Hello "MR" mohamed ' .  " <br>"; // Hello "MR" mohamed
 echo 'Hello \'MR \' mohamed ' .  " <br>";  // Hello 'MR' mohamed
 echo " Hello MR\\  mohamed" .  " <br>"; //  Hello MR\ mohamed
 echo nl2br(); 

 ```
 ---
 ## Heredoc And Nowdoc
 -  PHP offers a better way to write multiple-line string variables directly with Heredoc and Nowdoc syntax.
 - Her: `it works similar as double quotes, it means it can also print variables value ` 
 - Now: ` it works similar as single quote`








