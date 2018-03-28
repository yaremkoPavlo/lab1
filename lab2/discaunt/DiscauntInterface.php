<?php
namespace discaunt;
use models\User;

interface DiscauntInterface
{
  public function calculateDiscaunt(User $user, int $t_price);
}
?>
