<?php

require_once __DIR__ . '/vendor/autoload.php';  // Inclure l'autoloader de Composer

use App\Config\Database;  // Importer la classe Database

// Initialiser la connexion PDO
$pdo = Database::getConnection();

// Dispatcher les requêtes
$controller = $_GET['controller'] ?? 'search';
$action = $_GET['action'] ?? 'index';

if ($controller === 'search') {
    $searchController = new App\Controllers\SearchController($pdo);

    if ($action === 'index') {
        $searchController->index();
    } elseif ($action === 'search') {
        $query = $_GET['query'] ?? '';
        $searchController->search($query);
    }
} elseif ($controller === 'element') {
    $elementController = new App\Controllers\ElementController($pdo);

    if ($action === 'show') {
        $id = $_GET['id'] ?? 0;
        $elementController->show($id);
    }
} else {
    echo "Page non trouvée.";
}
