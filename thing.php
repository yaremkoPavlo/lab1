<?php
class Thing {
  private $category;
  private $price;
  private $name;
  private $avaible;
  private $iCharact;

  public function __construct (
                  string $category,
                  int $price,
                  string $name,
                  int $avaible,
                  iCharact $iCharact
                              )
  {
    $this->category = $category;
    $this->price = $price;
    $this->name = $name;
    $this->avaible = $avaible;
    $this->iCharact = $iCharact;
  }

  public function setAvaible($number) {
    $this->avaible += $number;
    return 1;
  }

  public function getAvaible() {
    return $this->avaible;
  }
  
  public function getPrice() {
    return $this->price;
  }

  public function getInfo() {
    $infoArray1 = Array("name" => $this->name,
                       "price" => $this->price,
                       "category" => $this->category
                     );
    $infoArray2 = $this->$iCharact->getInfo();
    $infoArray = array_merge($infoArray1, $infoArray2);
    return $infoArray;
  }
}
 ?>
