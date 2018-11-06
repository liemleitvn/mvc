<?php
/**
 * Created by PhpStorm.
 * User: phanxicopeter
 * Date: 11/6/18
 * Time: 5:54 PM
 */
namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function index() {
        die("xxx");
    }

    public function show(Request $request, $id, $b) {
        var_dump($id, $b);
        die("OK");
    }
}