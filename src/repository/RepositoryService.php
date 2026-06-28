<?php

namespace App\repository;

require_once __DIR__ . "/../src/Db/MySql.php";

$query = $this->pdo->prepare("SELECT nom,description FROM service");
$query->execute();

$service = $query->fetchAll($this->pdo::FETCH_ASSOC);

return $service;
