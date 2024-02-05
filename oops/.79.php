<?php
    class Employee{
        // Class properties
        public $name;
        public $salary;

        // constructor
        function __construct($name, $salary){
            $this->name = $name;
            $this->salary = $salary;
        }

        // Destructor function
        function __destruct(){
            echo "I am Destructing this function $this->name <br>";
        }
    }
    $rohan = new Employee("Rohan", 70000);
    $ankit = new Employee("Ankit", 30000);
    $sumit = new Employee("Sumit", 56000);

    echo "this salary of rohan is $rohan->salary<br>";
    echo "this salary of ankit is $ankit->salary<br>";
    echo "this salary of sumit is $sumit->salary<br>";
?>