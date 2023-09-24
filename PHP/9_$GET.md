# $_GET

- An associative array of variables passed to the current script via the URL parameters " query string "
- This is a 'superglobal variable'

 ```php
 <?php
 $users = array (
    1 => array (
        'firstName' => 'mohamed' ,
        'age ' => 44
    ),
    
    2 => array(
        'firstName' => 'abdullah' ,
        'age ' => 25
    ),
 );
 $user = isset ($_GET['user'])? $_GET['user']: false;

    if( array_key_exists($user ,$usaers)){
        $firstName = $users[$user]['firstName'];
        $age = $users[$user]['age'];
    }
    else{
         $firstName = 'gest';
         $age = 'unknown';
    }

 
 ?>
 <h1> welcomto our website , <?=  $firstName ?> ,your age is <?=  $age ?> </h1>

 ```

- Assuming the user entered http://example.com/?user=1
  - output =>  welcomto our website ,mohamed ,your age is 4

- Assuming the user entered http://example.com/?user=2
  - output =>  welcomto our website ,abdullah ,your age is 25

- Assuming the user entered http://example.com/?user=3
  - output =>  welcomto our website ,gest ,your age is unknown
