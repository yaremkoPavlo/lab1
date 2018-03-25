<?php
require_once ('idelivery.php');
class NovaPoshta implements iDelivery
{
  public function delive (string $address):int
  {
    $price = 0;
    $price = strlen($address);
    return $price;
  }
}
?>
