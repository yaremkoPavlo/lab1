<?php
class Order {
  //private $oreder;
  private $total_price;
  private $user;
  private $goodsArray;

  public function __construct($user) {
    $this->total_price = 0;
    $this->user = $user;
    $this->goodsArray = Array();
  }

  public function chooseGoods($goods, int $number) {
    $this->goodsArray[$goods->id] = $number;
    $total_price = $total_price + $goods->price * $number;

    return $this->goodsArray;
  }

  public function removeGoods($goods) {

    return 0;
  }

  public function getReservationForOrder() {
    //$this->goodsArray
    //$this->order = $order;

    return $order;
  }
  public function getDiscount($order) {
    $this->total_price = $this->total_price * $shop->setDiscaunt($this->user,
                                                                 $this->total_price);
    return 1;
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
