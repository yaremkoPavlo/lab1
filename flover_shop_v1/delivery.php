<?php
  class Delivery {

    private function calc_price($add) {
      return strlen($add);
    }

    public function do_delivery($address) {
      return $this->calc_price($address);
    }
  }

?>
