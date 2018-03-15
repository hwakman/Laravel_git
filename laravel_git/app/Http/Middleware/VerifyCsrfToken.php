<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/insert',
        'http://127.0.0.1:8000/updateCommit',
        'http://127.0.0.1:8000/home',
        'http://127.0.0.1:8000/regisCheck',
    ];
}
