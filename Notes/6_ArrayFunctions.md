# Array Functions

```php
$friendes = ["osama","ahmed","sameh","mohamed","gamal"];

  echo "<pre>";
   print_r(array_chunk($friendes,2));
  echo "</pre>";


  $countries = [ "EG" => "Egypt" , "KSA" => "saudi arabia" ,"SY" => "syria" , "USA" => "united states"];

  
  echo "<pre>";
  print_r(array_chunk($countries,2,true));
  
  echo "</pre>";


  echo "<pre>";
  print_r(array_chunk($countries,2));
  echo "</pre>";
  
  echo "<pre>";
  print_r(array_change_key_case($countries,CASE_UPPER));
  echo "</pre>";

  echo "<pre>";
  print_r(array_flip($countries)); //vedio 64
  echo "</pre>";


  $keys= ["A","O","K"];
  $values = ["ahmed","osama","kamal"];
  

  echo "<pre>";
  print_r(array_combine($keys,$values));
  echo "</pre>";
 
  $counting = ["A","A","B","B","B","C"];


  echo "<pre>";
  print_r(array_count_values($counting));
  echo "</pre>";
?>
```

```php
$family = ["osama","ahmed","sameh","mohamed","gamal",["eman","noha"]];

  echo "<pre>";
  print_r($family);
  print_r(array_reverse( $family));
  print_r(array_reverse( $family,true));
  echo "</pre>";



  $counter = ["A","B","C",[1,2,3]];
  echo count($counter);
  echo count($counter,1);


  $search = ["1",2,3,4];
  if(in_array(1,$search,true)){
    echo "the element is found";
  }
 echo "<br>";

  $COURSES = ["java" =>95, "php" =>100, "html"=>60,"css"=>65];

  if(array_key_exists( "php",$COURSES)){
    echo "the course is found and the price is :" .$COURSES["php"];

  }
  echo "<br>";
```

```php
$countries = [ "EG" => "Egypt" , "KSA" => "saudi arabia" ,"SY" => "syria" , "USA" => "united states"];


  echo "<pre>";
  print_r(array_values($countries));  //return array values
  echo "</pre>";

  $friendes = ["osama","ahmed","sameh","mohamed","gamal","osama","eman",1,"1"];
  echo "<pre>";
  print_r(array_keys($friendes,"osama"));  //return array keys with value 
  echo "</pre>";
  

  echo "<pre>";
  print_r(array_keys($friendes));  //return array keys
  echo "</pre>";

  
  echo "<pre>";
  print_r(array_keys($friendes,"1",true));  //return array keys
  echo "</pre>";


  $pad = ["A","B","C","D"];

  echo "<pre>";
  print_r(array_pad($pad,10,"@"));  //  add values
  echo "</pre>";

  echo "<pre>";
  print_r(array_pad($pad,-10,"@"));  // negative value ==> add value befor original values
  echo "</pre>";

  echo "<pre>";
  print_r(array_pad($pad,2,"@"));  // nothing will be deleted   output ==> element of array only
  echo "</pre>";

  $product = [10,5,2,10];
  echo array_product($product)."<br>"; 

  $sum = [10,5,2,10];
  echo array_sum($sum)."<br>";
```

##  Current, Next, Prev, Reset, End

```php
 $friendes = ["osama","ahmed","sameh","mohamed","gamal"];

  echo current($friendes). "<br>"; //osama
  echo next($friendes). "<br>"; //ahmed
  echo current($friendes). "<br>"; //ahmed
  echo next($friendes). "<br>"; //sameh
  echo current($friendes). "<br>"; //sameh
  echo prev($friendes). "<br>"; //ahmed
  echo reset($friendes). "<br>"; //osama
  echo current($friendes). "<br>"; //osama
  echo end($friendes). "<br>"; //gamal
  echo current($friendes). "<br>"; //gamal
```

## Array Merge, Array Replace, Array Rand, Shuffle

```php
$merge_one = ["one"=>"PHP","two"=>"CSS","three"=>"JS"];
  $merge_two = ["one"=>"HTML","four"=>"Python"];

  echo "<pre>";
  print_r(array_merge($merge_one,$merge_two ));
  echo "</pre>";

  
  $merge_three = [10=>"PHP",20=>"CSS",30=>"JS"];
  $merge_four = [40=>"Python",10=>"go"];

  echo "<pre>";
  print_r(array_merge ($merge_three,$merge_four )); // "renumbreing" indexes will be 1,2,3,4 no override 
  echo "</pre>";

  $main = ["one"=>"PHP","two"=>"CSS","three"=>"JS"];
  $replace = ["one"=>"HTML","four"=>"Python"];

  echo "<pre>";
  print_r(array_replace($main,$replace));
  echo "</pre>";
 
  echo "<pre>";
  print_r(array_replace ($merge_three,$merge_four )); 
  echo "</pre>";

  $num = ["a","b","c","d"]; 
  echo array_rand( $num) . "<br>"; // choose one or more random value "اختيار عشوائي"
  print_r( array_rand( $num ,2));  //choose 2 random value
   

  shuffle($num); 
  echo "<pre>";
  print_r($num);
  echo "</pre>";
```

## Array Shift, Array Pop, Array Push, Array Unshift

```php
$chars = ["A","B","C","D"];

  echo "<pre>";
  print_r($chars);  // output ===> ["A","B","C","D"]
  echo "</pre>";


  $first = array_shift($chars); // print and remove the first element 
  echo " $first <br>"; //"A"

  echo "<pre>";
  print_r($chars); //output ===> ["B","C","D"] ===> A removed becouse we shift array
  echo "</pre>";





  $last = array_pop($chars); // print and remove the last element 
  echo " $last <br>"; //"D"

  echo "<pre>";
  print_r($last); //output ===> ["B","C"]
  echo "</pre>";




  array_push($chars ,"X","Y","Z"); //add element at the end of array

  echo "<pre>";
  print_r($chars);
  echo "</pre>";

  array_push($chars ,"1"); // or use   $chars[]= "1";  fast
  echo "<pre>";
  print_r($chars);
  echo "</pre>";

  

  array_unshift($chars ,"M","H","G"); //add element at the beginning of array

  echo "<pre>";
  print_r($chars);
  echo "</pre>";
  ```

## Array Slice, Array Splice

```php
$chars = ["A","B","C","D","E","F","G"];
  $chars_with_string_keys = ["A"=>1,"B"=>2,"C"=>3];
  $chars_with_NUMERIC_keys = [10=>1,20=>2,30=>3];


  echo "<pre>";
  print_r(array_slice($chars,2)); //c,d,e,f,g
  print_r(array_slice($chars,-4)); //d,e,f,g
  print_r(array_slice($chars,2,3)); //c,d,e
  print_r(array_slice($chars,2,-2)); //c,d,e
  echo "</pre>";


  echo "<pre>";
  print_r(array_slice($chars_with_string_keys,0,2));
  print_r(array_slice($chars_with_NUMERIC_keys,0,2)); //[1=>1,2=>2,3=>3]
  print_r(array_slice($chars_with_NUMERIC_keys,0,2 ,true)); //[10=>1,20=>2,30=>3]
  echo "</pre>";

  $nums = [10,20,30,40,50,60,70];
  echo "<pre>";
  print_r(array_splice($nums,2)); // remove from index 2 and the output is the removed array ===>[30,40,50,60,70]
  print_r($nums); //[10,20] 
  print_r(array_splice($nums,2,1)); // remove from index 2 one index
  print_r(array_splice($nums,2,-2)); // remove from index 2  , the last 2 index not ramove
  print_r(array_splice($nums,2,2 ,["one","two"])); //remove from index 2 ,two index and replace them this array["one","two"]
  echo "</pre>";
```

## Sorting Functions

```php
$names = ["osama","ahmed","sameh","mohamed","gamal"];
 
  sort($names);

  echo "<pre>";
  print_r($names);
  echo "</pre>";

  rsort($names);
  
  echo "<pre>";
  print_r($names);
  echo "</pre>";

  $countries = [ "E" => "Egypt" , "K" => "saudi arabia" ,"S" => "syria" , "U" => "united states","I"=>"iraq","Q"=>"qatar"];
  
  asort($countries);
  
  echo "<pre>";
  print_r($countries);
  echo "</pre>";

   
  arsort($countries);
  
  echo "<pre>";
  print_r($countries);
  echo "</pre>";

  
  
  $countries = [ "1" => "Egypt" , "2" => "saudi arabia" ,"3" => "qatar" ];

  ksort($countries);
  
  echo "<pre>";
  print_r($countries);
  echo "</pre>";


  krsort($countries);
  
  echo "<pre>";
  print_r($countries);
  echo "</pre>";
  
  


  $files = ["photo1.png","photo20.png","photo3.png"];

  sort($files);

  echo "<pre>";
  print_r($files);
  echo "</pre>";

  natsort($files);
  
  echo "<pre>";
  print_r($files);
  echo "</pre>";
  ```

## array map, array filter

```php
 function add_title($fname,$lname){
    return "Mr $fname $lname";
  }

  
  $frist_name = ["osama","ahmed","sayed","mahmoud","sameh","gamal"];
  $last_name = ["ameer","samy","shady","amr","mohamed","ibrahim"];

  echo "<pre>";
  print_r(array_map("add_titel", $frist_name , $last_name ));
  echo "</pre>";


  
  $nums = [
    1=>3,
    6=>1,
    3=>2,
    4=>8,
    5=>4

  ];

  function check_nums($n1,$n2){
    return $n1 > 4 || $n2 > 4;
  }
  

  echo "<pre>";
  print_r(array_filter($nums ,"check_nums")); // choose by value
  print_r(array_filter($nums ,"check_nums",ARRAY_FILTER_USE_KEY)); //choose by key
  print_r(array_filter($nums ,"check_nums",ARRAY_FILTER_USE_BOTH)); //choose by value and  key
  echo "</pre>";
```

## array reduce

```php
  function add($n1,$n2){
    return  $n1 + $n1;
  }

  $nums = [10,20,50,100,10];   
  echo array_reduce( $nums ,"add"); //190
  echo array_reduce( $nums ,"add",100); //290



  echo " ########################## <br>";
  function adds($carry,$items){
    echo "$carry  <br>";
    echo "$items <br>";
    echo "$carry + $items "."<br>";
    echo " ########################## <br>";
    return  $carry + $items;
  }

  $nums = [10,20,50,100,10];
  echo array_reduce( $nums ,"add" ,100);
```
