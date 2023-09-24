# Constructor & Access Modifiers

## Access Modifiers " visiblitiy"

- public
  - call object inside and outside class
- private
  - call object inside class
- protected
  - call object inside class only but can call by inheritance

 ```php
 <?php
 class student{
    public $name;
    public $age;
    public $score;
    private $level;
    public $minscore = 150;
    public $maxscore = 300;
    public $subjects = array (
        'Arabic' => 0,
        'English' => 0,
        'math' => 0,
        'science' => 0
    ); 
    public function __constructor($name , $age ){
        $this->name = $name;
        if($age >= 12){
            $this->age = $age;
        }else{
            throw new Exception('sorry the student\'s age must be greater than or equal 12');
        }
        
    }
    public function setlevel($level){
        // make sure that "the user inter ineger number" this is an integer 
        $level = filter_var($level , FILTER_SANITIZE_NUMBER_INT);
        $level = abs($level); // to convert negitive number to positive
        // $level = abs (filter_var($level , FILTER_SANITIZE_NUMBER_INT));
        if($level < 1 || $level > 12){
            throw new Exception('sorry this level not avilable');
        }else{
            $this->level = $level;
        }
    }
    public function getlevel(){
        return $this->level ;
    }
    public function welcomestudent(){
        echo 'welcome to our page '.$this->name;
    }
    public function setname($name){
        $name = $this->filtername($name);
        $this->name = $name;
        // $this->name = $this->filtername($name);
    }
    public function getname($name){
        return $this->name ; 
    }
    public function filtername(){
        $name = substr($name , 0,12); // number of strings 13 char
        $name = ucwords($name); // make first string uper case
        // $name = ucwords( substr($name , 0,12) );

        return $name;
        
    }
 }
 $mohamed = new student('Mohamed Ahmed' , 12 ); // mohamed is a instance of student
 // $mohamed->$name = 'Mohamed Ahmed';
 // $mohamed->$age = 12;
 $mohamed->setlevel(-5);
 echo $mohamed->getlevel();
 // echo $mohamed->welcomestudent();
 
 ?>

 
 ```
