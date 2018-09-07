<!-- Ability to take more than one form is called polymorphism
   ( overloading ) and overloading only works in one class-->
<?php

class Programmer_test{

	public $testing;   //$testing,$coding,$designing
	public function programmer($testing)
	{
         echo $testing;
	}
}

$obj = new Programmer_test();

echo $obj->programmer('webtesting');