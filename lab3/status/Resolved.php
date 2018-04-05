<?php

namespace status;

class Resolved extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('resolved');
    }

    public function verified()
    {
        return new Verified($this->task);
    }

    public function reopened()
    {
        return new Reopened($this->task);
    }
}