<?php
namespace models;
use discaunt\DiscauntInterface;
use product\Product;
use delivery\iDelivery;
use payment\iPay;

class Shop
{
  private $discaunter;
  private $googdsList;
  private $paymentMethods;


  public function __construct( DiscauntInterface $discaunter, iPay $payMethod)
  {
    $this->discaunter = $discaunter;
    $this->goodsList = Array();
    $this->paymentMethods = Array($payMethod);
  }

  public function addItem (Product $item, int $number)
  {
    $this->goodsList[$item->getArticul()] = Array($item, $number);
  }

  public function viewGoods():array
  {
    return $this->goodsList;
  }

  public function setDiscauntMetod(DiscauntInterface $discaunter)
  {
    $this->discaunter = $discaunter;
  }

  public function addPaymentMethod(iPay $payMethod):void
  {
      $this->paymentMethods[] = $payMethod;
  }

  public function getPeymentDetails():array
  {
      return $this->paymentMethods;
  }

  public function setDiscaunt(User $user, int $t_price):float
  {
    return $this->discaunter->calculateDiscaunt($user, $t_price);
  }

  public function setAvaible(Product $product, int $number)
  {
    $this->goodsList[$product->getArticul()][1] += $number;
  }

  public function getAvaible(Product $product):int
  {
    return $this->goodsList[$product->getArticul()][1];
  }

  public function setDeliveryDetails(iDelivery $delivery, string $address):int
  {
    return $delivery->delive($address);
  }

  public function setPaymentDetails(int $numberInArray, float $t_price, User $user)
  {
    return $this->paymentMethods[$numberInArray]->payOrder($t_price, $user);
  }

  public function setReservation(Order $order, array $reservList)
  {
    foreach ($reservList as $key => $value) {
      $this->setAvaible($value[0], -$value[1]);
    }
  }

}

?>
