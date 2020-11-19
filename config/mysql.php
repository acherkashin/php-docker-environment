<?php

return [
    'class' => yii\db\Connection::class,
    'dsn' => 'mysql:host=' . ($_ENV['MUSQL_HOST'] ?? 'mysql:3306') . ';dbname='  . ($_ENV['MYSQL_DB'] ?? 'mysql_db'),
    'username' => $_ENV['MYSQL_USER'] ?? 'root',
    'password' => $_ENV['MYSQL_PASSWORD'] ?? 'password',
    'charset' => 'utf8',
];
