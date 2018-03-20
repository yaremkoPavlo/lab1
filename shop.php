<?php
class Shop {
  public function viewGoods() {
    return 1;
  }
  private function calculateDiscaunt($user, int $t_price) {
    return 1;
  }
  public function setDiscaunt($user, int $t_price) {
    return $this->calculateDiscaunt($user, $t_price);
  }
  public function setDelivery($deliver, $address) {
    return 1;
  }

}
?>
