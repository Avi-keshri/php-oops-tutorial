<!-- Destructor will call after everything else-->

<?php

class Bill{

	public $dinner=20;
	public $desserts=5;
	public $coldDrink=3;
	public $bill;

	public function dinner($person)
	{
		$this->bill +=$this->dinner*$person;
		return $this;
	}
	public function desserts($person)
	{
		$this->bill +=$this->desserts*$person;
		return $this;
	}
	public function coldDrink($person)
	{
		$this->bill+=$this->coldDrink*$person;
		return $this;
	}
	public function __destruct() {

		echo $this->bill;
	}
}

$bill =new Bill();

$bill->dinner(2)->desserts(1)->coldDrink(1)->bill;