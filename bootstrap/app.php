<?php
/**
 * Created by PhpStorm.
 * User: phanxicopeter
 * Date: 11/6/18
 * Time: 5:01 PM
 */

/**
 * @param null $className
 * @return \App\Dependencies\App|mixed|object
 * @throws \App\Dependencies\Exception
 */
function app($className = null) {
    if ($className) {
        return (new App\Dependencies\App())->make($className);
    }
    return (new App\Dependencies\App());
}