<?php

class Student {

	public $name =array();
	public $attendance;
	public $totalmarks;

	public function studentDetails($name,$attendance,$totalmarks){

		$this->name=$name;
		$this->attendance=$attendance;
		$this->totalmarks=$totalmarks;
	}
}

$class10 = new Student();

$class10->studentDetails(['avinash','rajesh','dhramesh'],true,88);

foreach($class10->name as $value){
	echo $value."<br>";
}


