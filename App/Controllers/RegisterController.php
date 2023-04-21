<?php

namespace App\Controllers;

use \Core\View;
use \Core\Controller as BaseController;
use App\Models\User;
/**
 * Register controller
 *
 * PHP version 8.0
 */
class RegisterController extends BaseController
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Auth/register.php');
    }
    /*
    *
    * Register Form Handling
    *
    */
    public function registerAction() {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usersWithUsername = User::checkUser($username);

        if(count($usersWithUsername) > 0) {
            View::render('Auth/register.php', [
                'error' => 'Username already exists'
            ]);
            return;
        }
        $data = User::create($name, $username, md5($password));

        $_SESSION['user'] = [
            'name' => $name,
            'username' => $username
        ];

        \header("Location: /");

    }

    
}
