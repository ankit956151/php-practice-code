<?php
class player{

    // properties
    public $name;
    public $speed = 5;
    public $running = false;

    // Method
    function set_name($name){
        $this->name = $name; 
    }
    function get_name(){
        return $this->name;
    }
    function run(){
        $this ->running = true;
    }
    function stopRun(){
        $this ->running = false;
    }
}
echo "let start oops using gta vice city <br>";
$player1 = new Player();
$player1->set_name('Ankit');
echo $player1->get_name();
echo $player1->speed;
echo "<br>";
$player3 = new Player();
$player3->set_name('Sumit');
echo $player3->get_name();

?>