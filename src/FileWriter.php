<?php

class FileWriter 
{
    const PATH = "/../logs/";
    const defaultFileBehavior = "a";
    const fileExtension = "txt";
    private $fileName = null;
    private $rows;

    public function setFileName($fileName) {
        return $this->fileName = $fileName;
    }

    public function setRows(array $rows) {
        return $this->rows = $rows;
    }

    private function getFile($behavior = self::defaultFileBehavior) {
        $filePath = dirname(__FILE__) . self::PATH . ($this->fileName ?? time()) . "." . self::fileExtension; 
        return fopen($filePath, $behavior);
    }

    public function print() {
        $file = $this->getFile();
        foreach ($this->rows as $key => $value) {
            fwrite($file, $value);
            fwrite($file, "\n");
        }
        fclose($file);
    }
}