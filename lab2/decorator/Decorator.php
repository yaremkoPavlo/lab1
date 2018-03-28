<?php

abstract class Decorator extends Component
{
    protected $_component = null;
    public function __construct(Component $component)
    {
        $this->_component = $component;
    }
    protected function getComponent()
    {
        return $this->_component;
    }
    public function Operation()
    {
        return $this->getComponent()->Operation();
    }
}