<?php
$db_config = array(
    'server'   => $_ENV['DATABASE_SERVER'], // Usually localhost
    'database' => $_ENV['DATABASE_NAME'], // The database name
    'username' => $_ENV['DATABASE_USER'], // The database username
    'password' => $_ENV['DATABASE_PASSWORD'], // The database password
    'verbose' => true // If true errors will be shown
);
?>