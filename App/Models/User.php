<?php

namespace App\Models;

use PDO;
use \Core\Model as BaseModel;
/**
 * Example user model
 *
 * PHP version 8.0
 */
class User extends BaseModel
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function where($username, $password) {
        $db = static::getDB();

        $stmt = $db->query("SELECT * FROM `users` WHERE `username`=\"$username\" AND `password`=\"$password\"");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($name, $username, $password) {
        $db = static::getDB();

        $stmt = $db->query("INSERT INTO `users` (name, username, password) VALUES (\"$name\", \"$username\", \"$password\")");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function checkUser($username) {
        $db = static::getDB();

        $stmt = $db->query("SELECT * FROM `users` WHERE `username`=\"$username\"");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
