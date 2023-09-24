# PHP Control Statement

- All the conditional statements and loop statements

## Conditional Statements

- IF Statements

```php

$a = 100;
  $b = 200;
  $c = 300;
  if($a < $b or $c){
    echo "A Is Not Larger Than B Or C";

  }


```

- IF else Statements

```php
  $a = 200;
  $b = 200;
  $c = 100;
  if ($a >$c){
    echo "A Is Larger Than c";

  }else{
    echo "C Is Larger Than A";
  }
 

```

- Nested IF Statements

```php
$name = "Osama";
  $age = 40;
  $country = "Egypt";

 if ($age > 18) {
  echo "The Age Is Good To Go<br>";
    if (gettype($name) === "string") {
      echo "The Name Is Good To Go<br>";
        if ($country === "Egypt") {
        echo "The Country Is Good To Go<br>";
      }
    }
  }


```

- elseif….else Statement

```php
$day = "Sat";
  if($day = "Sat " or "Sun" or "Mon" ){
    echo "We Are Open All The Day";
   
  }elseif($day ="Tue" or "Wed"){
    echo "We Are Open From 08:12";

  }elseif($day ="Thu" or "Fri"){
    echo"We Are Closed";
  }else{
    echo "Unknown Day";

  }


```

- Switch Statement

```php
switch ($genre = "Hack And Slash"){
     case $genre === "RPG":
      echo "I Recommend Ys Games";
      break;
     case$genre === "Hack And Slash":
      echo "I Recommend Castlevania Games";
      break;
    case $genre === "FPS":
      echo "I Recommend Uncharted Games";
      break;
    case $genre === "Platform":
      echo "I Recommend Megaman Games";
      break;
    case $genre === "Puzzle":
      echo "I Recommend Megaman Games";
      break;
    default:
      echo "I Recommend Shadow Of Mordor And Shadow Of War";



  }
  

```

## Loop Statements

- For loop

```php

for($index = 10; $index >=1; $index --){
    echo " $index <br>";
  }

```

```php

for ($index = 0;$index < 20; ) {
    $index +=2;
    echo "$index";
    echo "<br>";


  }

```

- While Loop

```php
$index = 0;
  while($index < 20){
    echo "$index";
    $index +=2;
    echo "<br>";
  }

```

- Do While Loop

```php
$index = 0;
  do{
    echo "$index";
    $index +=2;
    echo "<br>";
  }while($index < 20);

```

- foreach Loop
  - foreach (iterable_expression as $value)
    statement
  - foreach (iterable_expression as $key => $value)
    statement

```php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element


```

 ---
 ---
 ---

- PHP Break
  - can be used to jump out of a loop.
  - prints the last value it stopped at

```php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  //  jumps out of the loop when x is equal to 4
}

```

- PHP Continue
  - continues with the next iteration in the loop
  - skips the last value it stopped at

```php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  //skips the value of 4
}


```

- PHP Include
  - include is a keyword to include one PHP file into another PHP file. While including the content of the included file will be displayed in the main file

- PHP Require
  - The PHP require function is similar to the include function, which is used to include files. The only difference is that if the file is not found, it prevents the script from running, while include does not
  