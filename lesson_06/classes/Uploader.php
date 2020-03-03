<?php

class Uploader
{
    public $input_name = 'file';
    public function __construct()
    {
        $this->input_name;
    }
    public function isUploaded() {
        if (isset($_FILES[$this->input_name])) {
            return true;
        } else {
            return false;
        }
    }
    public function upload() {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->input_name]['tmp_name'], __DIR__ . '/../pictures/test.png');
        }
    }
}
