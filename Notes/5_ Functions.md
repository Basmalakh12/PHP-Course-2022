# Function

- a block of code with a given name that can be executed on demand by calling that name

## 1- User-defined functions

```php
function sum ($sum1,$sum2){
   return $sum1 + $sum2;
    }

 $total = sum(2,28);
 echo  $total - 10;
```

- Values are returned by using the optional **return** statement. Any type may be returned, including arrays and objects. This causes the function to end its execution immediately and pass control back to the line from which it was called

```php
function Deep_Freezer ($item){
    echo" Give Me  $item <br>";
}
Deep_Freezer("Water") ;
?>
```

```php
function Say_Hello_TO ($someone){
    if($someone === "Osama"){
        echo" Hello Mr $someone <br>";

    } elseif($someone === "Basmala"){
        echo" Hello Mrs $someone <br>";

    } elseif($someone === "Ahmed"){
        echo" Hello Eng $someone <br>";

    } else{
        echo" Unknown <br>";
    }
 }
  Say_Hello_TO("basmala");
```

## 2- Function arguments

```php
$prizes = ["pc","playstation","xBox","appel TV",'ipad',"iphone",];
  function get_number($sum_one ,$sum_two){
    return $sum_one + $sum_two;


  }
  echo $prizes [get_number(2,1)];
```

```php
function get_data($country ="privet country",$name ="privet ",$age ="privet ",$address ="privet address"){
  $line_one = "your country is $country and your name is $name<br>";
  $line_two = "your age is $age and your address is $address";
  return $line_one .$line_two;

}
echo get_data("mansoura","basmala",20,"abesto");
```

```php
function Say_Hi_To($somebody ,$gender="not found"){
    if($gender=="Male"){
        echo " Hi Mr $somebody";
    }elseif( $gender == "Female"){
        echo " Hi Miss $somebody";
    }else{
        echo "Hi $somebody";
    }

}
echo Say_Hi_To("Osama", "Male"); 
echo "<br>";
echo Say_Hi_To("Eman", "Female"); 
echo "<br>";
echo Say_Hi_To("Sameh");
```

## 3- String Access And Update

```php
  $str= "Elzero"; //string acts as array of character
  echo "The First Letter Is $str[0]" . "<br>" ; //E
  echo "The 4th Letter Is $str[3]" . "<br>" ; //e
  echo "The Number Of Letter Is " . strlen($str) . "<br>" ; //6
  echo "The Last Letter Is $str[1]" . "<br>" ; //O

  echo $str ."<br>";
  $str[0]="A"; //replaced index numder zero =E ===>A   
  echo $str ."<br>"; //Alzero
  $str[6]="A";//index 6 not found so we add A at index 6     
  echo $str ."<br>";//AlzeroA
```

## 4– String Functions

```php
  echo lcfirst("Elzero Web School"). "<br>"; //change the first letter of the word to small
  echo ucfirst("elzero web school"). "<br>"; //change the first letter of the word to capital
  echo ucwords("elzero web school"). "<br>"; //change the first letter of each word to capital
  echo ucwords("elzero web|school","|"). "<br>"; //elzero web|school
  echo strtoupper("elzero web school"). "<br>"; //change all of small letter for capital letter
  echo strtolower("ELZERO WEB SCHOOL"). "<br>"; //change all of capital letter for small letter
  echo str_repeat("Elzero",4)."<br>"; //repeat the character
```

```php
$frinds =["Ahmed","Osama","Ali","Salem"];
  echo implode(" ",$frinds )."<br>";// print array as word by use seperetor "space"
  echo implode(",",$frinds )."<br>";// print array as word by use seperetor ","
  echo implode("@@",$frinds )."<br>";// print array as word by use seperetor "@@"
  echo implode($frinds )."<br>";// print array as word 
  
  $strn="Elzero Web School Is Cool";
  echo "<pre>";
  print_r(explode(" ", $strn)); //print as array , the seperetor is space and we can change the seperetor
  echo "<pre>";
  
  echo "<pre>";
  print_r(explode(" ", $strn,4));// use limte to define "يحدد" number of the indexes ,, limte = 0 or 1 ====>array includes one index
  echo "<pre>";
  
  echo "<pre>";
  print_r(explode(" ", $strn,-2));// print as array and remove the last 2 words
  echo "<pre>";

  echo str_shuffle("Elzero")."<br>"; //change the order of letter
  echo strrev("Elzero")."<br>"; // replace frist latter by last letter


  echo strlen("   Elzero   ")."<br>";
  echo strlen(trim("   Elzero   "))."<br>"; // remove spaces
  echo trim("#Elzero###" ,"###")."<br>"; //remove #
  echo trim("#@Elzero@@@#" ,"@")."<br>"; //can't remove @ because delete from the side بيحذف من الاطراف فقط ====>output "#@Elzero@@@#"
  echo rtrim("#@Elzero@@@#" ,"#@")."<br>"; //delete from right 
  echo ltrim("#@Elzero@@@#" ,"#@")."<br>"; //delete from left
```

```php
 echo chunk_split("Elzero Web School",3,"@");//تقدر تقسم string لاكتر من قطعه ("string",length, او اي فاصلspace)
  echo "<br>";

  echo "<pre>";
  print_r(str_split("Elzero"));//the number of char in elzero
  echo "</pre>";

  echo "<pre>";
  print_r(str_split("Elzero",2));//make array the number of char in elzero each index have 2 char
  echo "</pre>";
```

```php
  var_dump(strpos("Hello Hello" ,"H")); //check the index of H ===>0  لو في كذا قيمه بياخد اول واحده
  echo "<br>";
  var_dump(strpos("Hello Hello" ,"H",3)); //search from index 3 ===>6
  echo "<br>";
  var_dump(stripos("Hello Hello" ,"h",3));// insensative search H or h
  echo "<br>";
  var_dump(strrpos("Hello Hello" ,"H")); //اخر Hهيلقيها  index 6
  echo "<br>";
  var_dump(strripos("Hello Hello" ,"h",3));// insensative ,search H or h ,اخر Hهيلقيها
  echo "<br>";
  var_dump(substr_count("Hello Hello" ,"He"));//عدد كرار he، ممكن نزود بيبدا منين index
  echo "<br>";
  var_dump(substr_count("Hello Hello" ,"He",1));//ممكن نزود بيبدا منين index
  echo "<br>";
  var_dump(substr_count("Hello Hello" ,"He",1,7));//ممكن نزود بيبدا منين index ,end
  echo "<br>";
```

```php
 //parse_str واحنا بنعامل مع الform عشان نوصل للبيانات باعتها بنستخدم الفانكشن دي
  parse_str("name = basmala&email=b@dhhf.cd&os=mac",$quary);
 
  echo "<pre>";
  print_r($quary);
  echo "</pre>";
    
  echo $quary ["name"] . "<br>";
  echo $quary ["email"] . "<br>";
  echo $quary ["os"] . "<br>";


  echo str_pad("12",8,0). "<br>";//  بيزود ٨ اصفار عشان يخلي عددهم مساوي
  echo str_pad("12",8,0,STR_PAD_BOTH). "<br>";// بيزود ٨ اصفار عشان يخلي عددهم مساوي بيزودالصفر من اليمين والشمال
  echo str_pad("12",8,0,STR_PAD_LEFT). "<br>";//بيزودالصفر من الشمال
  echo strtr("E@zero Web Schoo@","@","l");//يبدل بدل @ ل l
```

```php
echo str_replace("@","o","Elzer@ Web Sch@@l"); //reblacce @==>o
  echo str_replace(["@","#"],"A","e#zer@ Web Sch@@#");
  echo str_replace(["#","@"],["l","o"],"e#zer@ Web Sch@@#");

  echo '<pre>';
  print_r(str_replace("one",1,["one","two","three","one","one"]));
  echo '<pre>';
  
  echo '<pre>';
  print_r(str_replace(["one","two"],[1,2],["one","two","three","one","one"]));
  echo '<pre>';
   //str_ireplace ===>insensative replace
```

```php
  echo substr_replace("OneTwo",1,0); //1
  echo "<br>";
  echo substr_replace("OneTwo",1,3); // one1
  echo "<br>";
  echo substr_replace("OneTwo",1,-1); // onetw1 
  echo "<br>";
  echo substr_replace("OneTwo",2,2); // on2
  echo "<br>";
  echo substr_replace("OneTwo",2,2,2); // on2wo
  echo "<br>";
  echo substr_replace("OneTwo",2,1,4); //o2o
  echo "<br>";
  echo substr_replace("Elzero_Web_School","A",7,3); //Elzero_A_School
  echo "<br>";
  echo substr_replace("Elzero_Web_School","A",7,-1); //Elzero_Al          Web_School
  echo "<br>";
  echo substr_replace("Elzero_Web_School","A",7,-9); //Elzero_Aeb_School
  echo "<br>";
  echo substr_replace("Elzero_Web_School","A",7,-10); //Elzero_AWeb_School
  echo "<br>";
  echo substr_replace("Elzero_Web_School","@",1,0);  //E@lzero_Web_School  ====>insert
```

```php
  $a = "Welcom To Elzero Web School Website";
  echo wordwrap($a,8,"<br>");
  echo "<br>";
  echo wordwrap($a,8,"<br>",true);
  echo "<br>";
  echo ord("a");//97 ====>ASCII code بتدخل حرف ويطلع
  echo "<br>";
  echo chr("97"); //a      ord عكس 
  echo "<br>";
  echo similar_text("elzero","elzeroo"); //بشوف الكلمات المشابه في كم حرف
  echo "<br>";
  echo similar_text("elzero","elzero" ,$s) ;
  echo "<br>";
  echo $s; // بيجيب النسبه المئويه للتشابه
  echo "<br>";
  ```

```php
  echo " ########################## <br>";
  echo strstr("Elzero Web","W"); //Web
  echo "<br>";
  echo strstr("Elzero Web","z"); //zero Web  بيجيب ن اول الحرف اللي دخلناه
  echo "<br>";
  echo strstr("Elzero Web","W",true);//Elzero  بيجيب اللي قبل الحرف اللي دخلناه
  echo "<br>";
  echo stristr("Elzero Web","w"); //insensative
  echo "<br>";
  echo number_format(10000000.15432); // 10000000
  echo "<br>";
  echo number_format(10000000.15432, 3); // 10000000.154    3===>عدد الكسور اللي عايزه احطها
```