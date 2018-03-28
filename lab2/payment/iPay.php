<?php
namespace payment;
use models\User;

interface iPay
{
  public function payOrder(float $t_price, User $user);
}
 ?>
