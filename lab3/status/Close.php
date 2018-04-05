<?php

namespace status;


class Close extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('close');
    }
}