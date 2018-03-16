<?php
  class Flover {
    private $name;
    private $price;
    private $avaible;

    public function __constructor($name, $price) {
      $this->name = $name;
      $this->price = $price;
      $this->avaible = true;
    }

    public function setAvaible($av_bool) {
      $this->avaible = $av_bool;
    }

    public function getAvaible() {
      return $this->avaible;
    }

    public function getPrice() {
      return $this->price;
    }
  }
?>
