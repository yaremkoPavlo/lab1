<?php
  class Order {
    private $flover;
    private $is_bought;
    private $total_price;

    public function __construct($flover) {
      $this->flover = $flover;
      $this->is_bought = false;
      $this->total_price = 0;
    }

    public function buy($shop, $number) {
       $result = $shop->sell($this->flover);
       $this->is_bought = true;
       $this->total_price = $this->total_price + $result * $number;
       return $this->total_price;
    }

    public function delivery ($shop, $company, $address) {
      if ($this->is_bought) {
        $result = $shop->delivery($company, $address);
        if (is_int($result)) {
          $this->is_bought = false;
          $this->total_price += $result;
        }
      } else {
        echo "you should buy first";
      }
      return $this->total_price;
    }

    public function get_services($shop, $service) {
      $result = $shop->provide_services($service);
      if (is_int($result)) {
        $this->is_bought = true;
        $this->total_price += $result;
      }
      return $this->total_price;
    }

    public function getTotalPrice() {
      return $this->total_price;
    }
  }
?>
