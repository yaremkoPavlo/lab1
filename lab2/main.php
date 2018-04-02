<?php
ini_set ( 'display_errors' , 1 );
error_reporting ( E_ALL );

include "autoloader.php";

use product\Product;
use product\CharacteristicTv;
use models\Shop;
use models\User;
use models\Order;
use discount\TrickyDiscount;
use delivery\Novaposhta;
use payment\Cashpay;
use product\CharacteristicFlowerChamomile;
use product\CharacteristicFlowerRose;
use services\Basket;
use services\Card;
use services\Package;
use services\Ribbon;
use services\decorators\AddService;
use services\decorators\BigBasket;


//create new things
$samstv23c  = new CharacteristicTv("china", 23, "1920*1080", false);
$samstv23   = new Product("TV", 2300, "samsung", "g1223", $samstv23c);
$lgsmart32c = new CharacteristicTv("korea", 32, "1920*1080", true);
$lgsmart32  = new Product("TV", 2100, "lg", "lw2134", $lgsmart32c);
$toshtv21c  = new CharacteristicTv("japan", 21, "1378*768", false);
$toshtv21   = new Product("TV", 1500, "toshiba", "tsh2165", $toshtv21c);

//create new user
$userVasia = new User('Vasia Pupkin', 'Zambia, Resbuplic', 'vasi@pupkin.com');

//create delivery method
$novaposhta = new Novaposhta();

//create payment method
$cashpay = new CashPay();

//create type of discount
$trickDiscaunt = new TrickyDiscount();

//create new shop
$shop = new Shop ($trickDiscaunt, $cashpay);

//add goods
$shop->addItem($samstv23,20)->addItem($lgsmart32,10)->addItem($toshtv21,5);

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

//get discount
$order1->getDiscount($shop);

//reserve goods
$order1->getReservationForOrder($shop);

//get delivery
$order1->getDeliveryDetails($shop, $novaposhta, $userVasia->getAddress());

//view available payment methods
$shop->getPeymentDetails();

//pay and get confirm
$order1->setPaymentDetails($shop,0);

//////////////////////////////////////////////////////
////-------------------part two------------------/////
//////////////////////////////////////////////////////

//create characteristics to flowers
$redRose40C   = new CharacteristicFlowerRose('red', 40);
$redRose80C   = new CharacteristicFlowerRose('red', 80, true);
$whiteRose30C = new CharacteristicFlowerRose('white', 30);
$whiteRose50C = new CharacteristicFlowerRose('white', 50, true);
$chamomileC       = new CharacteristicFlowerChamomile();
$yellowChamomileC = new CharacteristicFlowerChamomile('yellow');

//create flowers
$redRose40   = new Product('flower', 10, 'red rose','rose40rf', $redRose40C);
$redRose80   = new Product('flower', 35, 'long red rose', 'rose80rt', $redRose80C);
$whiteRose30 = new Product('flower', 15, 'little white rose', 'rose30wf', $whiteRose30C);
$whiteRose50 = new Product('flower', 25, 'white rose', 'rose50wt', $whiteRose50C);
$chamomile       = new Product('flower', 10, 'chamomile', 'chamomile1', $chamomileC);
$yellowChamomile = new Product('flower', 12, 'yellow chamomile', 'chamomileY', $yellowChamomileC);

//create flower shop
$flowerShop = new Shop($trickDiscaunt, $cashpay);

//add flowers to shop
$flowerShop->addItem($redRose40,20)->addItem($redRose80,80)->addItem($whiteRose30,30)->addItem($whiteRose50,20)
           ->addItem($chamomile,120)->addItem($yellowChamomile,50);

//view products
$flowerShop->viewGoods();

//make order
$order1 = new Order($userVasia);

//add products to order
$order1->chooseProduct($flowerShop,$redRose40, 12);

//calculate sum
$order1->calculateTotalPrice();

//create service
$basketService = new Basket();
$cardService = new Card();
$bigBasket = new BigBasket($basketService);
//$addService = new AddService($cardService);
//$bigBasket->getService();
//$addService->getService();


//add service to order
$order1->getService($bigBasket);

//get discaunt
$order1->getDiscount($flowerShop);

//reserve goods
$order1->getReservationForOrder($flowerShop);

//get delivery
$order1->getDeliveryDetails($flowerShop, $novaposhta, $userVasia->getAddress());

//view available payment methods
$shop->getPeymentDetails();

//pay and get confirm
$order1->setPaymentDetails($flowerShop,0);

echo 'end';