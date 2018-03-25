<?php
ini_set ( 'display_errors' , 1 );
error_reporting ( E_ALL );

require_once ('thing/thing.php');
require_once ('thing/characttv.php');
require_once ('shop.php');
require_once ('user.php');
require_once ('discaunt/trickydiscaunt.php');
require_once ('delivery/novaposhta.php');
require_once ('order.php');
require_once ('payment/cashpay.php');

//create new things
$samstv23c  = new CharactTV("china", 23, "1920*1080", false);
$samstv23   = new Thing("TV", 2300, "samsung", "g1223", $samstv23c);
$lgsmart32c = new CharactTV("korea", 32, "1920*1080", true);
$lgsmart32  = new Thing("TV", 2100, "lg", "lw2134", $lgsmart32c);
$toshtv21c  = new CharactTV("japan", 21, "1378*768", false);
$toshtv21   = new Thing("TV", 1500, "toshiba", "tsh2165", $toshtv21c);
//create new user
$userVasia = new User('Vasia Pupkin', 'Zambia, Resbuplic', 'vasi@pupkin.com');
//create new shop and new type of discaunt
$trickDiscaunt = new TrickyDiscaunt();
$shop = new Shop ($trickDiscaunt);
//create delivery method
$novaposhta = new NovaPoshta();
//create payment method
$cashpay = new CashPay();
//add goods
$shop->addItem($samstv23, 20);
$shop->addItem($lgsmart32, 10);
$shop->addItem($toshtv21, 5);
//view goods
var_dump($shop->viewGoods());
echo '<br /><br />';
//add goods to order
$order1 = new Order($userVasia);
$order1->chooseGoods($samstv23, 3);
$order1->chooseGoods($lgsmart32, 5);
//remove item from basket
$order1->removeGoods($samstv23, 1);
var_dump($order1->viewBasket());
echo '<br /><br />';
//calculate total price
var_dump($order1->calculateTotalPrice());
//get discaunt
$order->getDiscaunt($shop);

?>
