<?php

class MuckGenerator 
{
    const LOG_COUNT = 10;
    private $pattern;
    private $variables = [];

    public function setPattern($pattern) {
        $this->pattern = $pattern;
    }

    public function getPattern() {
        return $this->pattern;
    }

    public function setVariable($variableName, $variableValues) {
        $this->variables[$variableName] = $variableValues;
    }

    public function generate() {
        $log = $this->pattern;
        foreach ($this->variables as $key => $values) {
            $key = ":".$key;
            $value = $values[rand(0, (count($values) - 1))];
            $log = str_replace($key, $value, $log);
        }

        return $log;
    }

    public function generateLogs($count = null) {
        $logs = [];
        $count = $count ?? self::LOG_COUNT;
        for ($i=0; $i < $count; $i++) { 
            $logs[] = $this->generate();
        }

        return $logs;
    }
}