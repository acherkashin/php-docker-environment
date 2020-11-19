<?php

return [
    'class' => yii\db\Connection::class,
    'dsn' => 'pgsql:host=' . ($_ENV['PG_HOST'] ?? 'postgres') . ';dbname=' . ($_ENV['PG_DB'] ?? 'postgres_db'),
    'username' => $_ENV['PG_USER'] ?? 'postgres',
    'password' => $_ENV['PG_PASSWORD'] ?? 'password',
    'charset' => 'utf8',
];
