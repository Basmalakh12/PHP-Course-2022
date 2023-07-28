
```php

class A{
        public function __construct(){
            echo 'I am a instance of A ';

        }
    }
```

```php
class B{
        public function __construct(){
            echo 'I am a instance of B ';

        }
    }
```

```php
class C{
        public function __construct(){
            echo 'I am a instance of C ';

        }
    }
```

```php

require  'autoloading1.php';
require  'autoloading2.php';
require  'autoloading3.php';




    $a = new A();

    echo '<br>';

    $b = new B();

    echo '<br>';

    $c = new C();
```
