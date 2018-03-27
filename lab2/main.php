<?php
ini_set ( 'display_errors' , 1 );
error_reporting ( E_ALL );

require_once ('product/product.php');
require_once ('product/characttv.php');
require_once ('shop.php');
require_once ('user.php');
require_once ('discaunt/trickydiscaunt.php');
require_once ('delivery/novaposhta.php');
require_once ('order.php');
require_once ('payment/cashpay.php');

//create new things
$samstv23c  = new CharactTV("china", 23, "1920*1080", false);
$samstv23   = new Product("TV", 2300, "samsung", "g1223", $samstv23c);
$lgsmart32c = new CharactTV("korea", 32, "1920*1080", true);
$lgsmart32  = new Product("TV", 2100, "lg", "lw2134", $lgsmart32c);
$toshtv21c  = new CharactTV("japan", 21, "1378*768", false);
$toshtv21   = new Product("TV", 1500, "toshiba", "tsh2165", $toshtv21c);
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
$shop->viewGoods();
//add items to order
$order1 = new Order($userVasia);
$order1->chooseProduct($shop, $samstv23, 3);
$order1->chooseProduct($shop, $lgsmart32, 5);
//remove item from basket
$order1->removeGoods($samstv23, 1);
$order1->viewBasket();
//calculate total price
$order1->calculateTotalPrice();
//get discaunt
$order1->getDiscaunt($shop);
//reserve goods
$order1->getReservationForOrder($shop);
//get delivery
$order1->getDeliveryDetails($shop, $novaposhta, $userVasia->getAddress());
//pay and get confirm
var_dump($order1->getPaymentDetail($shop, $cashpay, $userVasia));

//////////////////////////////////////////////////////
////part two/////
require_once 'product/CharacteristicFlowerChamomile.php';
require_once 'product/CharacteristicFlowerRose.php';

//create characteristics to flowers
$redRose40C = new CharacteristicFlowerRose('red', 40);
$redRose80C = new CharacteristicFlowerRose('red', 80, true);
$whiteRose30C = new CharacteristicFlowerRose('white', 30);
$whiteRose50C = new CharacteristicFlowerRose('white', 50, true);
$chamomileC       = new CharacteristicFlowerChamomile();
$yellowChamomileC = new CharacteristicFlowerChamomile('yellow');

//create flowers
$redRose40 = new Product('flower', 10, 'red rose','rose40rf', $redRose40C);
$redRose80 = new Product('flower', 35, 'long red rose', 'rose80rt', $redRose80C);
$whiteRose30 = new Product('flower', 15, 'little white rose', 'rose30wf', $whiteRose30C);
$whiteRose50 = new Product('flower', 25, 'white rose', 'rose50wt', $whiteRose50C);
$chamomile = new Product('flower', 10, 'chamomile', 'chamomile1', $chamomileC);
$yellowChamomile = new Product('flower', 12, 'yellow chamomile', 'chamomileY', $yellowChamomileC);
