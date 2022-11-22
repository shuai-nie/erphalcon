<?php

/**
 * Register application modules
 */
$application->registerModules([
    'frontend' => [
        'className' => 'Erphalcon\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ]
]);
