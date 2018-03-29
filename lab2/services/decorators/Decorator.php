<?php
namespace services\decorators;
use services\ServiceInterface;

abstract class Decorator implements ServiceInterface
{
    protected $service;
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }
    protected function getComponent()
    {
        return $this->service;
    }
    abstract public function getService();
//
//    public function getService()
//    {
//        return $this->getComponent()->getService();
//    }
}