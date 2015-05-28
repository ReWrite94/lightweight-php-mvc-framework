<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

class PDOSingleton{

    private static $connection = null;
	private static $host = "localhost";
	private static $dbname = "";
	private static $user = "root";
	private static $pass = "";

    public static function connection() {
        if (self::$connection == null) {
            self::$connection = new PDO('mysql:dbname='.self::$dbname.';host='.self::$host, self::$user, self::$pass);
        }
        return self::$connection;
    }

}

?>