<?php

namespace status;

abstract class TaskStatus
{
    protected $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function opened()
    {
        echo 'not allowed';
        return $this;
    }

    public function inProgress()
    {
        echo 'not allowed';
        return $this;
    }

    public function resolver()
    {
        echo 'not allowed';
        return $this;
    }

    public function reopened()
    {
        echo 'not allowed';
        return $this;
    }

    public function verified()
    {
        echo 'not allowed';
        return $this;
    }

    public function close()
    {
        echo 'not allowed';
        return $this;
    }
}