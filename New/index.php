<!--New keyword Creates an unique id of that object-->

<?php

class Test{

	public $a;
	public $b;

	public function __construct($a ,$b) {
		$this->a = $a;
		$this->b = $b;
	}
}

$obj =new Test(1,2);
$obj1 =new Test(1,2);

echo "<pre>";
var_dump($obj);

echo "<pre>";
var_dump($obj1);

