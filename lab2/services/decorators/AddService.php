<?php
namespace services\decorators;

class AddService extends Decorator
{
    public function getService()
    {
        return $this->service->getService();
    }
}