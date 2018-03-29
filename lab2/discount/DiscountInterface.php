<?php
namespace discount;
use models\User;

interface DiscountInterface
{
    public function calculateDiscount(User $user, int $t_price);
}

