<?php

interface abc{

	public function test();
	public function xyz();
}
class def implements abc{

	public function test()
	{
	 echo "Test Data";
	}
	public function xyz()
	{
	 echo "xyz";
	}
}

$data =new def();
$data->test();
echo "<br>";
$data->xyz();