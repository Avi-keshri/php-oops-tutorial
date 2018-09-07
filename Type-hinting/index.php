<?php
include_once ('person.php');
class Book{

	public $price;
	public $authors;
	public function priceRate(int $price)
	{
		$this->price=$price;
	}
	public function authors(Person $authorName){
		$this->authors= $authorName->names();
	}
}
$book = new Book();
$authorName = new Person();

$book->authors($authorName);
print_r($book->authors);