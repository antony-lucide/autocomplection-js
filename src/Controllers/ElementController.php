<?php

require_once __DIR__ . '/../Models/ElementModel.php';

class ElementController {
    private $model;

    public function __construct($pdo) {
        $this->model = new ElementModel($pdo);
    }

    // Afficher un élément par son ID
    public function show($id) {
        $element = $this->model->getElementById($id);
        if (!$element) {
            die("L'élément demandé n'existe pas.");
        }
        require_once __DIR__ . '/../Views/element_details.php';
    }
}
