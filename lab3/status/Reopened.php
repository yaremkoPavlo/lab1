<?php

namespace status;

class Reopened extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('reopened');
    }

    public function inProgress()
    {
        return new InProgress($this->task);
    }
}