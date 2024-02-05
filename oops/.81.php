<?php 
    echo "what is inheritance ?<br>";

    class Employee{

        public $name = "Ankit";
        private $salary = 18000;
        private $grade = 3;
        
        function setSalary($salary){
            $this->salary = $salary;
        }
        function getSalary(){
            echo "The salary of this employee is $this->name is $this->salary <br>";

        }

        function showName(){
            echo "The name of this employee is $this->name";
        }
    }

    // Inhariting a new class programmer for employee extent for employee
    class Programmer extends Employee{
        private $language = "php";

        function changelanguage($lang){
            $this->language = $lang;
            echo $this-> grade;
            // echo $this-> grade; ----> this will throw an error because grade is private in the parent class
        }
    }


    $ankit = new Employee();
    $ankit-> name="Ankit<br>";
    $ankit->setSalary(5000000);
    $ankit->getSalary();
    $ankit->showName();

    $rohan = new Employee();
    $rohan-> name="rohan<br>";
    $rohan->setSalary(300000000);
    $rohan->getSalary();
    $rohan->showName();

    $geeta = new programmer();
    $geeta-> name="Geeta<br>";
    echo $geeta->changeLanguage("php");
    $geeta->getSalary();
    $geeta->showName();
?>