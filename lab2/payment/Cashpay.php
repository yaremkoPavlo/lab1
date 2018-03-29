<?php
namespace payment;
use models\User;

class CashPay implements iPay
{
  public function payOrder (float $t_price, User $user)
  {
    return true;
  }
}
