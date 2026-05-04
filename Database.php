<?php

$data_source_name = 'mysql:host=localhost;dbname=storedb';

$pdo = new PDO($data_source_name, 'root', '',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
