<?php
class Koneksi {
    protected $con;
    
    public function __construct() {
        $this->con = new mysqli('localhost', 'root', '', 'fsp-uas');
    }

    public function __destruct() {
        $this->con->close();
    }
}

?>