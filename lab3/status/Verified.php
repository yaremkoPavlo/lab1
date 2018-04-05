<?php

namespace status;

class Verified extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('verified');
    }

    public function close()
    {
        return new Close($this->task);
    }
}