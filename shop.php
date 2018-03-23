<?php
class Shop
{

  private $discaunter;

  public function __construct( DiscauntInterface $discaunter) {
    $this->discaunter = $discaunter;
  }

  public function viewGoods() {
    return 1;
  }

  public function setDiscaunt($user, int $t_price) {
    return $this->$discaunter->calculateDiscaunt($user, $t_price);
  }

  public function setDeliveryDetails($deliver, $address) {
    return 1;
  }

  public function setReservation(Order $order, array $goods) {
    foreach ($goods as $key => $value) {
      //$id = $goods[$key];
      //$val = 0 - $value;
      //$id->setAvaible(-$value);

    }
    return 1;
  }

  public function setPaymentDetails() {
    return 1;
  }
}
?>
