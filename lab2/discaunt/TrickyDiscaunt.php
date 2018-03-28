<?php
namespace discaunt;
use models\User;

class TrickyDiscaunt implements DiscauntInterface
{
  public function calculateDiscaunt (User $user, int $total_price)
  {
    $discaunt = 0;
    if (strlen($user->getName()) > 50 && $total_price > 1000)
    {
      $discaunt = 0.1;
    }
    return $discaunt;
  }
}
?>
