<?php

abstract class  goods {
	protected $id;
	protected $price;
	protected $name;
	protected $description;
	protected $category;

	function __construct() {}

	function sales_sum ($sales) {}
}


class countable_good extends goods {
	public $id;
	public $price;
	public $name;
	public $description;
	public $category;

	function __construct($id, $price, $name, $description, $category) {
		$this->id = $id;
		$this->price = $price;
		$this->name = $name;
		$this->description = $description;
		$this->category = $category;
	}

	function sales_sum ($sales) {
		$sum = $this->price * $sales;
		return $sum;
	}
}


// у цифрового товара цена не будет задаваться при создании объекта, но передавать цена штучного товара, на оснвоании которй будет высчитываться цена цифрового товара.
class digital_good extends countable_good {
	public $countable_good_price; // цена штучного товара 
	
	function __construct($id, $name, $description, $category, $countable_good_price) {
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->category = $category;
		$this->countable_good_price = $countable_good_price;
		$this->price = ($this->countable_good_price / 2); // создаем цену на основании цены штучного товара
	}

	function sales_sum ($sales) {
		$sum = $this->price * $sales;
		return $sum;
	}
}


?>