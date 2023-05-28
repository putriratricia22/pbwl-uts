<?php

namespace Inc;

class koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=db_kos", "root", "");
    }
}

$conn = mysqli_connect("localhost","root","","db_kos") or die(mysqli_connect_error());

?>