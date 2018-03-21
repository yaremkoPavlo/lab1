<?php
class Shop {

  public function viewGoods() {
    return 1;
  }

  public function setDiscaunt($user, int $t_price) {
    return $this->calculateDiscaunt($user, $t_price);
  }

  public function setDeliveryDetails($deliver, $address) {
    return 1;
  }

  public function setReservation($goods) {
    foreach ($goods as $key => $value) {
      //$goods[$key]->
      # code...
    }
    //$item->setAvaible()
  }

  public function setPaymentDetails() {
    return 1;
  }

  private function calculateDiscaunt($user, int $t_price) {
    return 1;
  }
}
?>
