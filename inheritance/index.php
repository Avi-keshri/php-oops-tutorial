<?php

class Fruits{

	public $name;
	public function setName($name)
	{
		$this->name=$name;
	}
}
class Apple extends Fruits{

	public function juice(){
		echo "juice";
	}
}

class Mango extends Fruits{

}

$apple =new Apple();
$apple->setName('My apple');
echo $apple->name;

echo"<br>";
$mango =new Mango();
$mango->setName('My mango');
echo $mango->name;
echo "<br>";
$apple->juice();