<?php
  class Shop {

    public function sell ($flover) {
        return 1;//$flover->getPrice();
    }

    public function delivery ($company, $address) {
      return $company->do_delivery($address);
    }

    public function provide_services ($service) {
      return $service->price;
    }
  }
?>
