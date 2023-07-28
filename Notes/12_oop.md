 # OOP " Object Oriented Programming "

 Class :` represent a templte consists of properties 'attributes' and method 'function' `

 Object :` is an instance of typical class `

 is_a ($object , $class) :` return true or false for an object is part of the class or not`

 this :` get used to  object '$Basmala' `



  ```php

 
 class Employee
 {
    public $name;
    public $age;
    public $address;
    public $salary;
    public $tax;
    public $overtime;
    public $overtimerate;
    public $abbsent;
    public $abbsentrate;


    public function calculateOvertime(){
        return $this->overtime * $this->overtimerate;
    }

    public function calculateAbbsent(){
        return $this->abbsent * $this->abbsentrate;
    }

    public function calculateTotalSalar(){
        return ($this->salary - ($this->salary * $this->tax)) + $this->calculateOvertime() - $this->calculateAbbsent();
    }


 }
 $Basmala = new Employee();
 $Basmala->name = 'Basmala Khaled';
 $Basmala->age= 20;
 $Basmala->address = 'Mansoura';
 $Basmala->salary = 6000;
 $Basmala->tax = 0.04;
 $Basmala->overtime = 30;
 $Basmala->overtimerate = 50;
 $Basmala->abbsent = 2;
 $Basmala->abbsentrate = 100;

 echo '<p>' . $Basmala->name . ' has Overtime of ' . $Basmala->calculateOvertime() . 'L.E </p>' ;
 echo '<p>' . $Basmala->name . ' has Abbsent of ' . $Basmala->calculateAbbsent() . 'L.E </p>' ;
 echo '<p>' . $Basmala->name . ' has Total Salar of ' .  $Basmala->calculateTotalSalar() . 'L.E </p>' ;
 
  ```
 
