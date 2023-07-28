 # Traits
 - Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).


  ```php
  trait test {
    public function hello(){
        echo 'Hello from trait';
    }
  }
  trait test2 {
    public function hello(){
        echo 'Welcome from trait2';
    }
  }
  class  MyClass {
    public function hello(){
        echo 'Hello from MyClass2 ';
    }
  }
   
  
  class MyClass2 extends  MyClass{
  use test  , test2 //call trait
   {
    test::hello insteadof tast2 ;// call hello function from test
    test2::hello as welcome; //hello function in test2 rename to welcome function

  } 
  /*
    use test {
        hello as protect  // use as to change Access Modifiers
    }
  */

  }
   
 
  ```