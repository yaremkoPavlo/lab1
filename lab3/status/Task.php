<?php

namespace status;

class Task
{
    private $status;
    public function __construct()
    {
        new Opened($this);
    }

    public function setStatus(String $status)
    {
        $this->status = $status;
    }

    public function getStatus():String
    {
        return $this->status;
    }
}