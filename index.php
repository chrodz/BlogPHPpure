<?php
/**
 * Created by PhpStorm.
 * User: chrod
 * Date: 24/10/18
 * Time: 05:55 PM
 */

require 'src/Controller/User.php';

//use App\Controller;

$controller = new User();

$controller->loginUser();
