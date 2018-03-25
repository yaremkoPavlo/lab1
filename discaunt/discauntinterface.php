<?php
interface DiscauntInterface
{
  public function calculateDiscaunt(User $user, int $t_price);
}
?>
