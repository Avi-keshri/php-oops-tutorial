<?php

class Circle{


	const PI =3.14;
	public function area($radius)
	{
		return $radius*$radius* self::PI;
	}
}

$circle =new Circle();
echo $circle->area(1);