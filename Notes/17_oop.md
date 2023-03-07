 # Abstract Classes and Interfaces
 
 ## Abstract Classes
 - An abstract class is a class that is declared abstract—it may or may not include abstract methods. Abstract classes cannot be instantiated, but they can be subclassed.
 - When an abstract class is subclassed, the subclass usually provides implementations for all of the abstract methods in its parent class. However, if it does not, then the subclass must also be declared abstract.
 - abstract method be protected or public
 
 ## Interfaces
 - Interfaces method be public only
 - A class that implements an interface must implement all the methods declared in the interface.
 
 ## Abstract Classes Compared to Interfaces
 - Abstract classes are similar to interfaces. You cannot instantiate them, and they may contain a mix of methods declared with or without an implementation. However, with abstract classes, you can declare fields that are not static, and define public, protected, and private concrete methods. With interfaces, all fields are automatically public, static, and all methods that you declare or define are public. In addition, you can extend only one class, whether or not it is abstract, whereas you can implement any number of interfaces.
 
 
 
 
 ```php
 abstract class Employee{
    public $firstName;
    public $lastName;
    public $age;
    public $address;



    public $salary;
    public $tax;
    public $overtime;
    public $overtimerate;
    public $abbsent;
    public $abbsentrate;
  


    abstract public function ShowName();

    public function calculateOvertime(){
        return $this->overtime * $this->overtimerate;
    }

    public function calculateAbbsent(){
        return $this->abbsent * $this->abbsentrate;
    }

     abstract protected function calculateTotalSalar();
 }
  interface EmployeeInterface{

    public function showAddress();
  }

 class Manger extends Employee implements EmployeeInterface{
    
    public $numberOfAudits;
    public function ShowName(){
        return 'Welcom Manger ' . $this->firstName . $this->lastName;

    }

    public function calculateTotalSalar(){
        return ($this->salary - ($this->salary * $this->tax)) + $this->calculateOvertime() - $this->calculateAbbsent() + $this->numberOfAudits * 100;
    }

    public function showAddress(){
         return $this->address;
    }
 }
 class SuperVisor extends Employee{
    
    public $successfulprojects;
    public function ShowName(){
        return 'Welcom SuperVisor ' . $this->firstName . $this->lastName;

    }
    public function calculateTotalSalar(){
        return ($this->salary - ($this->salary * $this->tax)) + $this->calculateOvertime() - $this->calculateAbbsent() + $this->successfulprojects * 1000;
    }

 } 
 class Worker extends Employee{
    public $bonus = 100;
    public function ShowName(){
        return 'Welcom Worker ' . $this->firstName . $this->lastName;

    }
    public function calculateTotalSalar(){
        return  ($this->salary - ($this->salary * $this->tax)) + $this->calculateOvertime() - $this->calculateAbbsent()  + $this->bonus ;
    }
    
 } 
 $mohamed = new Worker();
 $mohamed->firstName = 'Mohamed';
 $mohamed->lastName = ' Gamal';
 echo $mohamed->ShowName();
 $mohamed->salary = 5000;
 $mohamed->tax = 0.01;
 $mohamed->overtime = 2;
 $mohamed->overtimerate = 0.5;
 $mohamed->abbsent = 2;
 $mohamed->abbsentrate = 150;
 echo "<br>";
 echo $mohamed->calculateTotalSalar() . ' LE' ;

 
 ```