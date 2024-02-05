<?php
    class Employee{
        // Class properties
        public $name;
        public $salary;

        // Class methods
        // Constructor - it allows you to initializae object. it is the code which is executed whenever a new object is instantiated.

        // constructor without argument
        // function __construct(){
        //     echo "this is my constructor for employee<br>";
        // }

        // constructor with argument
        function __construct($name, $salary){
            $this->name = $name;
            $this->salary = $salary;
        }
    }
    $rohan = new Employee("Rohan", 70000);
    $ankit = new Employee("Ankit", 30000);
    $sumit = new Employee("Sumit", 56000);

    echo "this salary of ankit is $ankit->salary<br>";
    echo "this salary of sumit is $sumit->salary<br>";
    echo "this salary of rohan is $rohan->salary<br>";
?>