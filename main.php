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

    $order1 = new Order($romashka);
    $order1->buy($shop, 12);
    $order1->delivery($shop, $nova_poshta, "lviv");
    var_dump($order1->getTotalPrice());
    var_dump($rose);

    $order2 = new Order($rose);
    $order2->buy($shop, 3);
    $order2->getTotalPrice();

?>
