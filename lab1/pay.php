<?php
class Pay {
  private $method;

  public function __construct($method) {
    $this->method = $method;
  }

  public function pay($price) {
    switch ($this->method) {
      case 'visa':
      case 'mastercard':
        $result = $this->cardpay($price);
        break;
      case 'bitcoint':
        $result = $this->bitcointpay($price);
        break;
      case 'cash':
      default:
        $result = $this->cashpay($price);
        break;

      return $result;
    }
  }

  private function cardpay($sum) {
    #do some transaction
    return $sum;
  }

  private function bitcointpay($btc) {
    #do some transaction
    return $btc;
  }

  private function cashpay($cash) {
    #do some transaction
    return $cash;
  }
}
?>
