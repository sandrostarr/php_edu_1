<?php

class TextFile
{
    public $path;
    protected $file_data;
    public function __construct($path) {
        $this->path = $path;
        $this->file_data = file($path);
    }
    public function GetData() {
        return $this->file_data;
    }
}