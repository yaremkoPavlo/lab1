<?php
class Shop
{
  private $discaunter;
  private $googdsList;

  public function __construct( DiscauntInterface $discaunter)
  {
    $this->discaunter = $discaunter;
    $this->goodsList = Array();
  }

  public function addItem (Thing $item, int $number)
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

  public function setDiscaunt(User $user, int $t_price):float
  {
    return $this->discaunter->calculateDiscaunt($user, $t_price);
  }

  public function setAvaible(Thing $goods, int $number)
  {
    $this->goodsList[$goods->getArticul()][1] += $number;
  }

  public function getAvaible(Thing $goods):int
  {
    return $this->goodsList[$goods->getArticul()][1];
  }

  public function setDeliveryDetails(iDelivery $delivery, string $address):int
  {
    return $delivery->delive($address);
  }

  public function setPaymentDetails(iPay $paymetod, float $t_price, User $user)
  {
    return $paymetod->payOrder($t_price, $user);
  }

  public function setReservation(Order $order, array $goodsList)
  {
    foreach ($goodsList as $key => $value) {
      $this->goodsList[$key][1] -= $value;
    }
  }
  
}

?>
