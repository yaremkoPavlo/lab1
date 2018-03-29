<?php
namespace delivery;

class Novaposhta implements iDelivery
{
  public function delive (string $address):int
  {
    $price = 0;
    $price = strlen($address);
    return $price;
  }
}
