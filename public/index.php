<?php

use App\Kernel;

$_SERVER['HTTP_X-Forwarded-Proto'] = 'https';

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
