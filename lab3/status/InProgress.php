<?php

namespace status;


class InProgress extends TaskStatus
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('inProgress');
    }

    public function resolved()
    {
        return new Resolved($this->task);
    }

    public function close()
    {
        return new Close($this->task);
    }
}