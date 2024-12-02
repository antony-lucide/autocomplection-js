<?php

class ElementModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Rechercher les éléments
    public function searchElements($query) {
        $stmt = $this->pdo->prepare("
            SELECT * FROM elements 
            WHERE name LIKE :query OR description LIKE :query
        ");
        $stmt->execute(['query' => "%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer un élément par ID
    public function getElementById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM elements WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
