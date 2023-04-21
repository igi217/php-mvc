<?php

namespace App\Controllers;

use \Core\View;
use \Core\Controller as BaseController;
use App\Models\User;
/**
 * Login controller
 *
 * PHP version 8.0
 */
class LoginController extends BaseController
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Auth/login.php');
    }

    public function loginAction() {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $user = User::where($username, $password);

        if(count($user) <= 0) {
            View::render('Auth/login.php', ['error' => 'Failed to Login with Wrong credentials']);
            return;
        }

        $_SESSION['user'] = $user[0];
        \header("Location: /");
    }
    public function logoutAction() {
        unset($_SESSION['user']);
        \header("Location: /");

    }
    
}
