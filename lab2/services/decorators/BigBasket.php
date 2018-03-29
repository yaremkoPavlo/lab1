<?php
namespace services\decorators;

class BigBasket extends Decorator
{
    public function getService()
    {
        return $this->service->getService() + 40;
    }
}