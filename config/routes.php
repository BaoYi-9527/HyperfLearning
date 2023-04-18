<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

Router::get('/php_version', function () {
    return PHP_VERSION;
});

# Admin
Router::addGroup('/admin', function () {
    # index
    Router::get('/index', [\App\Controller\Admin\AdminController::class, 'index']);
});

# Api
Router::addGroup('/v1', function () {
    # index
    Router::get('/index', [\App\Controller\Api\ApiController::class, 'index']);
});

