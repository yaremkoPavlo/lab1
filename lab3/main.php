<?php

ini_set ( 'display_errors' , 1 );
error_reporting ( E_ALL );

function autoLoader ($class) {
    $class = str_replace('\\','/',$class) . '.php';
    if (file_exists($class)) {
        require_once $class;
    }
}
spl_autoload_register('autoLoader');

use status\Task;
use status\Opened;

$task1 = new Task();
echo $task1->getStatus();

$doTaskStatus = new Opened($task1);
$doTaskStatus = $doTaskStatus->inProgress();

$doTaskStatus = $doTaskStatus->close();
echo $task1->getStatus();



