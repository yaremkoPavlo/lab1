<?php
require_once ('ipay.php');
class CashPay implements iPay
{
  public function payOrder (float $t_price, User $user)
  {
    return true;
  }
}

?>
