<?php

class Thing {
  private $category;
  private $price;
  private $name;
  private $articul;
  private $iCharact;

  public function __construct (
                  string    $category,
                  int       $price,
                  string    $name,
                  string    $articul,
                  iCharact  $iCharact
                              )
  {
    $this->category = $category;
    $this->price    = $price;
    $this->name     = $name;
    $this->articul  = $articul;
    $this->iCharact = $iCharact;
  }

  public function getPrice():int
  {
    return $this->price;
  }

  public function getName():string
  {
    return $this->name;
  }

  public function getArticul():string
  {
    return $this->articul;
  }

  public function getInfo():array
  {
    $infoArray1 = Array(
                  "name"      => $this->name,
                  "price"     => $this->price,
                  "category"  => $this->category,
                  "articul"   => $this->articul
                       );
    $infoArray2 = $this->iCharact->getInfo();
    $infoArray = array_merge($infoArray1, $infoArray2);
    return $infoArray;
  }
}
 ?>
