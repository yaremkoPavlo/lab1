<?php
namespace models;
use discount\DiscountInterface;
use product\Product;
use delivery\iDelivery;
use payment\iPay;

class Shop
{
  private $discounter;
  private $goodsList;
  private $paymentMethods;


  public function __construct(DiscountInterface $discounter, iPay $payMethod)
  {
    $this->discounter = $discounter;
    $this->goodsList = Array();
    $this->paymentMethods = Array($payMethod);
  }

  public function addItem (Product $item, int $number):Shop
  {
    $this->goodsList[$item->getArticul()] = Array($item, $number);
    return $this;
  }

  public function viewGoods():array
  {
    return $this->goodsList;
  }

  public function setDiscauntMetod(DiscountInterface $discounter)
  {
    $this->discounter = $discounter;
  }

  public function addPaymentMethod(iPay $payMethod):void
  {
      $this->paymentMethods[] = $payMethod;
  }

  public function getPeymentDetails():array
  {
      return $this->paymentMethods;
  }

  public function setDiscount(User $user, int $t_price):float
  {
    return $this->discounter->calculateDiscount($user, $t_price);
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

  public function setReservation(array $reservList)
  {
    foreach ($reservList as $key => $value) {
      $this->setAvaible($value[0], -$value[1]);
    }
  }

}
