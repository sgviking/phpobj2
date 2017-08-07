<?php
class Foo {
    public $filename = '/tmp/foo.log';
    public $data = 'test';
    function __destruct() {
        echo "Creating log file: " . $this->filename;
        file_put_contents($this->filename, $this->data);
    }
}
