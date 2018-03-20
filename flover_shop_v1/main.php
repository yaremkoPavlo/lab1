<?php
  include "delivery.php";
  include "flover.php";
  include "live_flover.php";
  include "order.php";
  include "plastic_flover.php";
  include "shop.php";

    $romashka = new Flover("romashka", 12);
    $rose = new Live_flover("rose", 35, false, 85);
    $shop = new Shop();
    $nova_poshta = new Delivery();

    $order1 = new Order($shop, $romashka);
    $order1->buy(12);
    $order1->delivery($nova_poshta, "lviv");
    var_dump($order1->getTotalPrice());

    $order2 = new Order($shop, $rose);
    $order2->buy(3);
    var_dump($order2->getTotalPrice());

?>
