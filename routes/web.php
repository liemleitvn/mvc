<?php
/**
 * Created by PhpStorm.
 * User: phanxicopeter
 * Date: 11/6/18
 * Time: 5:08 PM
 */
$router->route('GET', '/posters', function () {
    echo '<a href="/posters/1">1. Poster</a>';
});

$router->route('GET', '/posters/{id}/{b}', 'App\\Controllers\PostController::show');

