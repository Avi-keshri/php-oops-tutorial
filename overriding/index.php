<?php

class Book{

	public $name='Avinash';
	public function author()
	{
		return "The author name are: " .$this->name;
	}
}
class NewBook extends Book
{
	public function author()
	{
		return parent::author()." and Rajesh";
	}
}

$book =new NewBook();

echo $book->author();