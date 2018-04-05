<?php

namespace status;

abstract class TaskStatus
{
    protected $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

}