<?php
/**
 * Created by PhpStorm.
 * User: chrod
 * Date: 24/10/18
 * Time: 06:03 PM
 */
namespace Controller;

use Model\UserModel;
//require 'Model/UserModel.php';

class User
{

    public function loginUser(){
        if(isset($_SESSION['loged'])){

        }else{
            require 'View/layout.php';
        }
    }
}