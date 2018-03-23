<?php
class Order {
  private $total_price;
  private $user;
  private $goodsList;

  public function __construct(User $user) {
    $this->total_price = 0;
    $this->user = $user;
    $this->goodsList = Array();
  }

  public function chooseGoods(Thing $goods, int $number) {
    $this->goodsList[$goods] = Array($goods, $number);
    $total_price = $total_price + $goods->getPrice() * $number;

    return $this->goodsList;
  }

  public function removeGoods($goods, $number) {
    //unset($this->goodsList[$goods->id]);
    return 0;
  }

  public function getReservationForOrder() {
    $shop->setReservation($this; $this->goodsList);
    return 1;
  }

  public function getDiscount($order) {
    $discaunt = $shop->setDiscaunt($this->user, $this->total_price);
    $this->total_price = $this->total_price * (1 - $discaunt);
    return $discaunt;
  }

  public function getDeliveryDetails($delivery, $address) {
    $result = $delivery->setDeliveryDetails($address);
    $this->total_price += $result;
    return 1;
  }

  public function getPaymentDetail($order, $payment) {
    return 1;
  }

  public function getConfirmStatus($order) {
    return 0;
  }

}
 ?>
