# Inheritance

 ```php
 
 class student{
    protected $name; //proprety
    protected $age;
    protected $score;
    protected $minscore = 150;
    protected $maxscore = 300;
    protected $subjects = array (
        'Arabic' => 0,
        'English' => 0,
        'math' => 0,
        'science' => 0
    ); 
    const MAX_AGE = 12; //constant
    const MIN_AGE = 20;
    private static $teacher ='Ahmed ibrahim'; // static property


    public function __construct($name,$age){
        $this->setName($name);
        $this->setAge($age);

    }



    private function setName($name){
        $name = strtolower($name); 
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name,0,30);
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }




    private function setAge($age){
        $age = filter_var($age , FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if ($age < static:: MAX_AGE || $age > static:: MIN_AGE) //  static or self for call constant
        
        /*

        if ($age < self:: MAX_AGE || $age > self:: MIN_AGE) or 
        if ($age < 12 || $age > 20)

        self:: => called parent class "student"
        static:: => called class that call this method "Grade1student"
        
        */
        { 
            throw new Exception('sorry the student\'s age not avilable');
        }else{
            $this->age = $age;
        }
    }
    public function getAge(){
        return $this->age;
    }




    public function getMaxscore(){
        return $this->maxscore;
    }
    public function getMinscore(){
        return $this->minscore;
    }
    public function getSubjects(){
        return $this->subjects;
    }


    public function setSubjectScore($subjectname,$value){

        if(array_key_exists($subjectname,$this->subjects)){
            $value = filter_var($value,FILTER_SANITIZE_NUMBER_INT);
            $value = abs($value);
            if($value > 50){
                throw new Exception('sorry the maximun score for subject is 50');
            }else{
                $this->subjects[$subjectname] = $value;
            }
                
            
        }else{
            throw new Exception('sorry tthis subject not found');
            
        }

    }
    public function getSubjectsScore(){
        if(array_key_exists($subjectname,$this->subjects)){
            return $this->subjects[$subjectname];
        }else{
            throw new Exception('sorry tthis subject not found');
            
        }

    }
    public static function sayWelcom(){  //"static function/method"
        return 'Welcom to our class ';
    }

    public function ShowTeacherName() //nonstatic function call static property or not static
    {
        echo self::sayWelcom(); //call static method 
        return self::$teacher; //call static property
        echo '<br>';
    }

    /*
    public static function ShowTeacher(){   "static function/method"
        return __class__;}
    }
    
    
    */


    /*
    static property can access Through by it static properties static methods but cannot access through static methods or properties

    non-static methods can access through static methods or properties  or any nonstatic methods or properties directly
    
    
    
    */

 }
 // inheritance
 class Grade1student extends student{

    private $activity;
    const MAX_AGE = 13;
    const MIN_AGE = 20;
     
    public function __construct($name,$age)
    {

        parent::__construct($name,$age); // for call parent class constructor "parent = student"
        $this->minscore = 125;
        $this->maxscore = 150;
        $this->subjects['Computer'] = 0;

    }

    

    public function setStudentAsActive(){
        $this->activity = 'Active';
    }
    public function setStudentAsNotActive(){
        $this->activity = 'Not Active';
    }



 }
 $ali = new Grade1student("ali ahmed ibrahim abd elhamed",13);
 $ali-> setSubjectScore('Arabic',27);
 print_r($ali->getSubjects());
 echo '<br>';
 echo $ali->getAge();
 echo '<br>';

 //call static proprety 
 echo Grade1student::ShowTeacherName(); 
 echo '<br>';
 echo $ali->ShowTeacherName(); 

```
