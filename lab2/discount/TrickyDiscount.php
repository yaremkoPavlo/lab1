<?php
namespace discount;
use models\User;

class TrickyDiscount implements DiscountInterface
{
    public function calculateDiscount (User $user, int $total_price)
    {
        $discount = 0;
        if (strlen($user->getName()) > 50 && $total_price > 1000)
        {
            $discount = 0.1;
        }
        return $discount;
    }
}
