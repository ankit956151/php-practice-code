<?php 
    // access modifier 
    // 1. public -- can be accessed in any where
    // 2. private -- can be accessed within the class
    // 3.protected -- accessed from within the class and from derived class
    // by default function are is treated as public 
    // private properties and method can only be accessed by other member function of the class

    class Employee{

        private $name = "Ankit";

        function showName(){
            echo "$this->name";
        }
    }

    

    $ankit = new Employee();

    // this is show th public public function
    // echo $ankit->name;

    // this is show private function
    $ankit->showName();
?>