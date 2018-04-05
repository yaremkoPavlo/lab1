<?php

namespace status;


class Opened extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('opened');
    }

    public function inProgress()
    {
        return new InProgress($this->task);
    }
}