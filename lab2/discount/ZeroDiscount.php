<?php
namespace discount;
use models\User;

class ZeroDiscount implements DiscountInterface
{
    public function calculateDiscount(User $user, int $t_price)
    {
        return 0;
    }
}