 # Magic Method
 
  - __set 
     - runs when writing data to inaccessible property
  - __get
     - runs when a call is made to inaccessible property
  - __isset
     - triggerd when calling isset or empty on inaccessible property
  - __unset
     - triggerd when calling unset on inaccessible property
  - __call
     -  triggerd when invoking inaccessible methods in an object context
  - __callstatic
    - triggerd when invoking inaccessible methods is a static context
  


 
 ```php
 
  class student{
    private $data = array();
    private $name;
    public function __set($name,$value){ 
        $this->data[$name] = $value;
       
    }
    public function __get($key) {
        return $this->data[$key];
       
    }
    public function __isset($name){
        if(array_key_exists($name,$this->data)){
            echo 'key is found and is being extract';
            return true;
        }
        return false;

    }
    public function __unset($name){
        if(isset($this->$name)){
            unset($this->data[$name]);
        }

    }
    public function __call($name,$argument){
        if(method_exists($this,$name)){
            $this->$name($argument);
        }else{
            print_r($argument);
            echo 'sorry no method ' . $name . ' has been found';
        }

    }
    public static function __callStatic($name, $args){
        echo 'a call to static method ' . $name . ' occured';

    }


  }
  $mohamed = new student();
  $mohamed->name ="mohamed";// call __set function
  $mohamed->age = 20;// call __set function

  var_dump($mohamed);
  echo "<br>";
  isset( $mohamed->age);
  echo "<br>";
  echo $mohamed->age;// call __get function
  echo "<br>";
  unset( $mohamed->age);
  echo "<br>";
  var_dump($mohamed);
  $mohamed->saywelcome(1,2,5,9,5,3);//call __call function
  echo "<br>";
  student::seyHello();//call __callstatic function

 ```