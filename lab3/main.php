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
$doTaskStatus = new Opened($task1);
echo $task1->getStatus();
echo '<br />';
$doTaskStatus = $doTaskStatus->inProgress();
$doTaskStatus = $doTaskStatus->resolved();
echo $task1->getStatus();
echo "<br />";
$doTaskStatus = $doTaskStatus->verified();
$doTaskStatus = $doTaskStatus->close();
echo $task1->getStatus();



