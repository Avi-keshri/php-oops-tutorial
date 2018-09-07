
<!-- Instance will not be create of abstract class(means object) it only be extends and its
 methods are uses. -->
<?php

abstract class Test{

	abstract public function getArea();
}
class Test2 extends Test{

	public function getArea() {
		echo "data";
	}
}

$test =new Test2();
$test->getArea();
