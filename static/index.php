<?php

class User{

	static public $name='avinash kumar';
	static public $number=0;
	static public function getName()
	{
		return self::$name='avinash';
	}
	static public function getNumber()
	{
		return self::$number+=1;
	}
}



echo User::getNumber();
echo"<br>";
echo User::getNumber();
echo"<br>";
echo User::getNumber();
echo"<br>";
echo User::getNumber();
echo"<br>";
echo User::getNumber();
echo"<br>";
echo User::getNumber();
echo"<br>";
