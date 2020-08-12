<?php

include './src/LogGenerator.php';

$generator = new LogGenerator();
$generator->setPattern('Time : :time Status : :status');
$generator->setCount(100000);
$generator->setVariable("status", [1,2,4]);
$generator->setVariable("time", ["10:10","10:13","15:10"]);
$generator->generate();