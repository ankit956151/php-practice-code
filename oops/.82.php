<?php 
     class Employee{
        public $name;
        public $salary;

        public function __construct($name, $salary){
            $this->name = $name;
            // $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();
        }

        protected function describe(){
            echo "Name of the programmer: $this->name<br>";
            echo "Salary of the programmer: $this->salary<br>";
        }
     }
     $ankit = new Employee("Ankit" , 3000);
     class programmer extends Employee{
        public $lang="php";
        public function __construct($name, $lang, $salary){
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();
        }
     }

     $ankit = new Employee("Ankit", 50000);
     $rohan = new programmer("Rohan", "Python", 5000);

?>