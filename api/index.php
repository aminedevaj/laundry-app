<?php

// 1. Cree l-fichie sqlite f /tmp ila makanch
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// 2. Load Laravel
require __DIR__ . '/../public/index.php';