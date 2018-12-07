<?php

// class Robot {
// 	private $name = '';
// 	private $color;
// 	public static function createRedRobot($name) {
// 		return new self($name, 'red');
// 	}
// 	public static function createBlueRobot($name) {
// 		return new self($name, 'blue');
// 	}
// 	private function __construct($name, $color){
// 		$this->setName($name);
// 		$this->color = $color;
// 	}
// 	public function setName($name){
// 		$this->name = (string)filter_var($name);
// 	}
// 	public function getName(){
// 		return $this->name;
// 	}
// 	public function getColor(){
// 		return $this->color;
// 	}
// }

// $a = Robot::createRedRobot('ロボ太郎');
// $b = Robot::createBlueRobot('ロボ次郎');

// echo $a->getColor().PHP_EOL;
// echo $b->getColor();

class dog {
	private $name;
	public function setName($name){
		$name = filter_var($name);
		if($name === false){
			throw new InvalidArgumentException('変な名前');
		}
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
}

$dog1 = new dog;
$dog1->setName('あいう');
echo $dog1->getName();


?>