<?php

namespace App\Config;

use PDO;
use PDOException;

class Database {
    public static function getConnection() {
        $host = 'localhost';
        $dbname = 'moteur_recherche';
        $username = 'root';
        $password = '';

        try {
            return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }
}
