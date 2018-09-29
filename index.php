<?php
class product {
	public $id;
	public $price;
	public $title;
	public $description;
	public $short_desc;
	public $category;
	public $weight;
	public $height;
	public $width;
	public $length;
	public $img_source;
	public $size;

	public function __construct ($id, $price, $title, $description, $short_desc, $category, $weight, $height, $width, $length, $img_source, $size){
		$this->id = $id;
		$this->price = $price;
		$this->title = $title;
		$this->description = $description;
		$this->short_desc = $short_desc;
		$this->category = $category;
		$this->weight = $weight;
		$this->height = $height;
		$this->width = $width;
		$this->length = $length;
		$this->img_source = $img_source;
		$this->size = $size;
	}

	public function product_preview() {
		echo "<div>
		<h3>$this->title</h3>
		<img src=\"$this->img_source\" alt=\"$this->title\">
		<p>$this->short_desc</p>
		<p>$this->size</p>
		<p>$this->price</p>
		<a href=\"#\">Buy</a>
		</div>";
	}

	public function porduct_page() {
		echo "<div>
		<h1>$this->title</h1>
		<p>$this->short_desc</p>
		<span>Article number: $this->id</span>
		<span>$this->category</span>
		<img src=\"$this->img_source\" alt=\"$this->title\">
		<p>$this->price</p>
		<a href=\"#\">Buy</a>
		<p>$this->description</p>
		<p>$this->size</p>
		<p>Weight: $this->weight kg</p>
		<p>Dimentions: $this->height x $this->width x $this->length meters</p>
		</div>";
	}
}

class service extends product {
	public $timeframe;

	public function __construct ($id, $price, $title, $description, $short_desc, $category, $img_source, $timeframe){
		$this->id = $id;
		$this->price = $price;
		$this->title = $title;
		$this->description = $description;
		$this->short_desc = $short_desc;
		$this->category = $category;
		$this->img_source = $img_source;
		$this->timeframe = $timeframe;
	}

	public function product_preview() {
		echo "<div>
				<h3>$this->title</h3>
				<img src=\"$this->img_source\" alt=\"$this->title\">
				<p>$this->short_desc</p>
				<p>$this->timeframe/p>
				<p>$this->price</p>
				<a href=\"#\">Buy</a>
			</div>";
	}

	public function porduct_page() {
		echo "<div>
				<h1>$this->title</h1>
				<p>$this->short_desc</p>
				<span>Article number: $this->id</span>
				<span>$this->category</span>
				<img src=\"$this->img_source\" alt=\"$this->title\">
				<p>$this->price</p>
				<a href=\"#\">Buy</a>
				<p>$this->description</p>
				<p>$this->timeframe/p>
			</div>";
	}
}



$a = new product (1, 99.99, 'black gloves', 'very warm gloves for men', 'warm gloves', 'gloves', 0.5, 0.1, 0.3, 0.1, '#', 'M');
$a->product_preview();
$a->porduct_page();



?>