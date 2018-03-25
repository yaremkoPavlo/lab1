<?php
class Order {
  private $total_price;
  private $user;
  private $goodsList;

  public function __construct(User $user)
  {
    $this->total_price  = 0;
    $this->user         = $user;
    $this->goodsList    = Array();
  }

  public function chooseGoods(Thing $goods, int $number):array
  {
    $this->goodsList[$goods->getArticul()] = Array($goods, $number);
    return $this->goodsList;
  }

  public function removeGoods(Thing $goods, int $number):array
  {
    $key = $goods->getArticul();
    if ($number < $this->goodsList[$key][1])
    {
      $this->goodsList[$key][1] -= $number;
    }
    else
    {
      unset($this->goodsList[$key]);
    }
    return $this->goodsList;
  }

  public function calculateTotalPrice():int
  {
    foreach ($this->goodsList as $key => $value) {
      $this->total_price += $this->goodsList[$key][0]->getPrice()
                          * $this->goodsList[$key][1];
    }
    return $this->total_price;
  }

  public function getDiscaunt(Shop $shop):float
  {
    $discaunt = $shop->setDiscaunt($this->user, $this->total_price);
    $this->total_price = $this->total_price * (1 - $discaunt);
    return $discaunt;
  }

  public function getTotalPrice():float
  {
    return $this->total_price();
  }
/*
  public function getReservationForOrder() {
    $shop->setReservation($this; $this->goodsList);
    return 1;
  }
*/
  public function getPaymentDetail (
                                Shop $shop,
                                iPay $payment,
                                User $user
                                    ):boolean
  {
    return $shop->setPaymentDetails($payment, $this, $user);
  }

  public function getDeliveryDetails(
                                  Shop $shop,
                                  iDelivery $delivery,
                                  string $address
                                    ):int
  {
    $result = $shop->setDeliveryDetails($delivery, $address);
    $this->total_price += $result;
    return $result;
  }

  public function viewBasket():array
  {
    return $this->goodsList;
  }

/*
  public function getConfirmStatus($order) {
    return 0;
  }
*/
}
 ?>
