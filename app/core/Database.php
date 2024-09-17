<?php

class Database extends PDO {
    public function __construct() {
        $config = require_once '../config/config.php';
        parent::__construct("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_password']);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}

?>
