
<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\App;

return App::config([
    'services' => [
        'App\\' => [
            'resource' => '../src/',
            'exclude' => [
                '../src/{Request/*,Message/*,Kernel.php}'
            ],
        ],
        'mysqli' => [
            'class' => mysqli::class,
            'factory' => [
                \App\Container\DummyFactory::class, 'createDummy'
            ]
        ]
    ]
]);
