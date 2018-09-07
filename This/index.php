<!-- This keyword works as object reference -->
<?php

class Test{
	 public $a;
	 public $b;
	public function __construct($a ,$b)
	{
		$this->a= $a;
		$this->b= $b;
		echo "<pre>";
		print_r($this);
	}
}

$obj =new Test(1,2);
$obj1 =new Test(2,4);



