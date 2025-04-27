<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

return [
    'singletons' => [
        EntityManager::class => function () {
            // Pfad zu euren Entitäten
            $paths = [__DIR__ . '/../src/DomainModel'];
            $isDevMode = YII_DEBUG;

            // DB-Verbindungsdaten aus params.php
            $db = require __DIR__ . '/params.php';
            $dbParams = [
                'driver'   => 'pdo_mysql',
                'host'     => $db['db.host'],
                'user'     => $db['db.username'],
                'password' => $db['db.password'],
                'dbname'   => $db['db.database'],
                'charset'  => 'utf8mb4',
            ];

            $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
            return EntityManager::create($dbParams, $config);
        },
    ],
];
