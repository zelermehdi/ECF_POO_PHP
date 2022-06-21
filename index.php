<?php

class Product {

	private $name;
	private $price;
    private $promotion;
    private $discount;
private $categories;
	
	public function __construct($name,$price,$promotion,$discount,$categories) {
		$this->name=$name;
		$this->price=$price;
        $this-> promotion=$promotion;
    $this-> discount=$discount;
	$this-> categories=$categories;
	}
}




$produitPromotion = new Product( "PC Portable Gaming MSI GL75 Leopard 10SFK-457FR 17,3 Intel Core i7 16 Go RAM 256 Go SSD + 1 To SATA Noir",1999 , "oui", 33,"ordinateurs protables");
 $produitPromotion1=new Product("PC Portable Gaming Asus TUF505DV-HN232T 15.6 AMD Ryzen 7 16 Go RAM 512 Go SSD Noir",1499 ,"Oui", 33,"Ordinateurs Portables");
 



$tablePromotion = array(
	$produitPromotion,
	$produitPromotion1
);
var_dump($tablePromotion);
// $produitRemise= new Product("DANIEL GUICHARD",43, );


?>