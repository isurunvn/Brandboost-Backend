<?php

class Model {
    protected $db;
    protected $table;

    public function __construct() {
        $this->db = new Database();
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute($id);
        return $stmt->fetch();
    }

    public function findAll() {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll();
    }
}

?>
