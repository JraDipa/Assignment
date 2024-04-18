<?php
include 'dbconfig.php';

class Item {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllItems() {
        $stmt = $this->pdo->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addItem($name) {
        $stmt = $this->pdo->prepare ("INSERT INTO items (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
    }

    // Add methods for update and delete as needed
}