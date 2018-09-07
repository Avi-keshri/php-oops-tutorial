<?php

trait Hello{

	public function sayHello()
	{
		echo "Hello";
	}
	public static function staticMethod()
	{
		echo "Static";
	}
	public abstract function abstractMethod();

}

trait EveryOne{

	public function everyOne()
	{
		echo "Everyone";
	}
}


class HelloWorld{

	use Hello,Everyone;
	public function sayWorld()
	{
		echo"Hello World";
	}
	public function abstractMethod()
	{
		echo "Abstarct Method";
	}
}

$obj = new HelloWorld();

echo $obj->sayHello();
echo "<br>";
echo $obj->everyOne();
echo "<br>";
echo $obj->abstractMethod();

echo "<br>";
echo HelloWorld::staticMethod();
