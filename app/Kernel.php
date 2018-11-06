<?php
/**
 * Created by PhpStorm.
 * User: phanxicopeter
 * Date: 11/6/18
 * Time: 5:13 PM
 */
namespace App;


use App\Providers\RouteProvider;

class Kernel
{
    public function load() {
        try {
            require_once __DIR__ . '/../bootstrap/app.php';

            $router = app(RouteProvider::class);

            require_once __DIR__ . '/../routes/web.php';

            $router->dispatch();
        } catch(\Exception $e) {
            var_dump($e);
            die;
        }
    }
}