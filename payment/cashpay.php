<?php
require_once ('ipay.php');
class CashPay implements iPay
{
  public function payOrder (Order $order, User $user):boolean
  {
    $price = $order->getTotalPrice();
    return isset($price) && isset($user);
  }
}

?>
