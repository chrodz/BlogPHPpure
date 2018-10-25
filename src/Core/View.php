<?php
/**
 * Created by PhpStorm.
 * User: chrod
 * Date: 25/10/18
 * Time: 11:11 AM
 */

namespace App\Core;

class View
{
    public function render($templateFile, array $vars = array())
    {
        ob_start();
        extract($vars);

        require('src/View/'.$templateFile);

        echo ob_get_clean();
    }

    public function test(){
        echo '<h1>Here TEST</h1>';
    }
}