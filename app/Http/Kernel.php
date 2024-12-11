<?php

namespace App\Http;

protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Auth::class,
];