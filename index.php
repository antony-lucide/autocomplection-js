<?php

require_once __DIR__ . '/src/Config/db.php';
require_once __DIR__ . '/src/Controllers/SearchController.php';
require_once __DIR__ . '/src/Controllers/ElementController.php';

// Initialiser la connexion PDO
$pdo = getDatabaseConnection();

// Dispatcher les requêtes
$controller = $_GET['controller'] ?? 'search';
$action = $_GET['action'] ?? 'index';

if ($controller === 'search') {
    $searchController = new SearchController($pdo);

    if ($action === 'index') {
        $searchController->index();
    } elseif ($action === 'search') {
        $query = $_GET['query'] ?? '';
        $searchController->search($query);
    }
} elseif ($controller === 'element') {
    $elementController = new ElementController($pdo);

    if ($action === 'show') {
        $id = $_GET['id'] ?? 0;
        $elementController->show($id);
    }
} else {
    echo "Page non trouvée.";
}
