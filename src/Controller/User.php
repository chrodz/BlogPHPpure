<?php
/**
 * Created by PhpStorm.
 * User: chrod
 * Date: 24/10/18
 * Time: 06:03 PM
 */
require 'src/Core/View.php';
require 'src/Core/Route.php';

use App\Core\View as View;
use App\Core\Route as Route;

class User
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function loginUser(){
        if(isset($_SESSION['loged'])){

        }else{

            return $this->view->render(
                'layout.php',
                array(
                    'template' => 'home.php'
                )
            );

        }
    }

    public function test(){
        echo 'dadadad';
    }
}