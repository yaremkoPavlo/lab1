<?php
class Order {
  //private $oreder;
  private $total_price;
  private $user;
  private $goods;

  public function __construct($user) {
    $this->total_price = 0;
    $this->user = $user;
    $this->goods = Array();
  }

  public function chooseGoods($goods) {
    $this->goods[] = $goods;
    $total_price = $total_price + $goods->price;
    return 1;
  }
  public function order($order) {
    //$this->order = $order;
    return $order;
  }
  public function getDiscount($order) {
    $this->total_price = $this->total_price * $shop->setDiscaunt($this->user,
                                                                 $this->total_price);
    return 1;
  }
  public function getDeliveryDetails($delivery, $address) {
    $delivery->setDelivery($address);
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
