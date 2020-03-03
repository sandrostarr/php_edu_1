<?php
require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public function __construct($path) {
        parent::__construct($path);
    }
    public function GetData() {
        return parent::GetData();
    }
    public function append($text) {
        $this->file_data[] = $text . PHP_EOL;
    }
    public function save() {
        file_put_contents($this->path, $this->file_data);
    }
}
