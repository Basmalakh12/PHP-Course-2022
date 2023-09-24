# Namespaces

- affected types by namnespaces are traits , classes , interfaces , functions and constants
 first statment in php file

 ```php
 namespace Main\Utilities;
include 'oop7.2.php';
include 'oop7.3.php';
use Main\Models as models;
class A{
    public function __construct(){
        echo ' I am a instance of class A in the  namespace main ';
    }
    

}
class TestController{

    public static function wakeup(){
        echo ' wake up my friend ';
    }


}
function sayWelcom(){
    echo 'hello my friends';
}
define('welcom', 1);

const HELLO = 4;

$a = new A; //  $a = new \Main\Utilities\A;
echo "<br>";
sayWelcom();// \Main\Utilities\sayWelcom();
echo "<br>";
echo "<br>";
$a = new Actions\A; //  $a = new \Main\Utilities\Actions\A;
echo "<br>";
Actions\sayWelcom(); // \Main\Utilities\Actions\sayWelcom();
echo "<br>";
echo "<br>";
$B = __NAMESPACE__ .'\A';
$var = new $B;
echo "<br>";
var_dump($var);
echo "<br>";
echo "<br>";
namespace\TestController::wakeup(); // TeastController::wakeup();
echo "<br>";
echo welcom;
echo "<br>";
// echo namespace\welcom; error
echo "<br>";
echo namespace\HELLO;
echo "<br>";
$model = new Models\TestModel;
```

```php

namespace Main\Utilities\Actions;
    class A{
        public function __construct(){
            echo ' I am a instance of A which is located in the global namespace  ';
        }

    }
    function sayWelcom(){
        echo 'this is sayWelcom inside actions';
    }

```

```php
namespace Main\Models;
    class TestModel{
        
    }
```
