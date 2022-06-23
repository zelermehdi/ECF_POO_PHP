<?php
require_once ('category.php');

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
	public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name=$name;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price=$price;
  }

  public function getPromotion()
  {
    return $this->promotion;
  }
  public function setPromotion($promotion)
  {
    $this->promotion=$promotion;
  }

  public function getDiscount()
  {
    return $this->discount;
  }
  public function setDiscount($discount)
  {
    $this->discount=$discount;
  }

  public function getCategories()
  {
    return $this->categories;
  }
  public function setCategories($categories)
  {
    $this->categories=$categories;
  }



}



$produit1= new Product( "PC Portable Gaming MSI GL75 Leopard 10SFK-457FR 17,3 Intel Core i7 16 Go RAM 256 Go SSD + 1 To SATA Noir",1999 , "oui", 33,"ordinateurs portables");
 $produit2=new Product("PC Portable Gaming Asus TUF505DV-HN232T 15.6 AMD Ryzen 7 16 Go RAM 512 Go SSD Noir",1499 ,"Oui", 0.33,"Ordinateurs Portables");
 $produit3=new product("MICHAËL GREGORIO",43,"non","non","Spectacles Rodez");
 $produit4=new product("DANIEL GUICHARD",43,"non",0.2,"Spectacles Rodez");
 $produit5=new product("PC Portable Gaming Acer Predator Triton 700 PT715-51-76D4 15.6 Gaming Intel Core i7 32 Go RAM 256 Go SSD + 256 Go SATA Noir",3499,"non","non","Ordinateurs Portables");

$tableProduct=[$produit1,$produit2,$produit3,$produit4,$produit5];


// 4/ Afficher la liste des produits en promotion. Information affichée : nom du produit

foreach($tableProduct as $product) {
  if($product->getPromotion()!=="non" ){
    echo $product->getName()."</br> ";
  }
}

// 5/ Afficher la liste des produits bénéficiant d’une remise. Informations affichées : nom du produit, montant sans remise, montant avec remise


// fonction pour calculer la remise 


function discountprice($price, $discount){
$discountPrice = $price-($price*$discount);
return $discountPrice;
}


foreach($tableProduct as $product ) {
  if($product->getDiscount()!=="non"){
    echo   $product->getName(),$product->getprice(),discountprice($product->getprice(),$product->getDiscount())."</br>"  ;

}
}



// 6/ Afficher la liste des produits triés par leur nom. Information affichée : nom du produit

$alphabet= ["PC Portable Gaming MSI GL75 Leopard 10SFK-457FR 17,3 Intel Core i7 16 Go RAM 256 Go SSD + 1 To SATA Noir","PC Portable Gaming Asus TUF505DV-HN232T 15.6 AMD Ryzen 7 16 Go RAM 512 Go SSD Noir","MICHAËL GREGORIO" ,"DANIEL GUICHARD","PC Portable Gaming Acer Predator Triton 700 PT715-51-76D4 15.6 Gaming Intel Core i7 32 Go RAM 256 Go SSD + 256 Go SATA Noir"];
sort($alphabet);
print_r($alphabet);









?>











