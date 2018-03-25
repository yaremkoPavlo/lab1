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
    $arr = [];
    foreach ($this->goodsList as $key => $value)
    {
      $arr[] = $value[0];
    }
    return /*$arr;*/$this->goodsList;
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

  public function setPaymentDetails(iPay $paymetod, Order $order, User $user)
  {
    return $paymetod->payOrder($order, $user);
  }
/*
  public function setReservation(Order $order, array $goods)
  {
    foreach ($goods as $key => $value) {
      //$id = $goods[$key];
      //$val = 0 - $value;
      //$id->setAvaible(-$value);

    }
    return 1;
  }
  */
}

?>
