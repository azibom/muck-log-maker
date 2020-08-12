<?php

include dirname(__FILE__).'/MuckGenerator.php';
include dirname(__FILE__).'/FileWriter.php';

class LogGenerator 
{
    private $muckObject;
    private $fileObject;
    private $count = null;

    public function __construct($muckObject = null, $fileObject = null)
    {
        $this->muckObject = $muckObject ?? new MuckGenerator();
        $this->fileObject = $fileObject ?? new FileWriter();
    }

    public function setPattern($pattern) {
        $this->muckObject->setPattern($pattern);
    }

    public function setCount($count) {
        $this->count = $count;
    }

    public function setName($fileName) {
        $this->fileObject->setFileName($fileName);
    }

    public function setVariable($variableName, $variableValues) {
        $this->muckObject->setVariable($variableName, $variableValues);
    }

    public function generate() {
        $logs = $this->muckObject->generateLogs($this->count);
        $this->fileObject->setRows($logs);
        $this->fileObject->print();
    }
}