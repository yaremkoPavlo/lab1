<?php
interface iPay
{
  public function payOrder(Order $order, User $user):boolean;
}
 ?>
