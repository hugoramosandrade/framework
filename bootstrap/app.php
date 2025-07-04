<?php

use Nano\Foundation\Application;

return Application::create(base_path())
    ->withRouting(routes_path('api.php'))
    ->withProviders([
        //
    ])
    ->withMiddlewares([
        //
    ]);