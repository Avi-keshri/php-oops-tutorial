<?php

interface Test{

	public function dosomething();
}

class ABC implements Test{

	public function dosomething()
	{
		echo "Doing something from Abc class";
	}

}

class DEF implements Test{

	public function dosomething(){
		echo "Doing something from Def class";
	}
}
function test(Test $def)
{
	$def->dosomething();
}


$def = new DEF();
test($def);
