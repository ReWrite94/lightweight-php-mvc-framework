<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

require_once 'class/PDOSingleton.php';

abstract class BaseModel {
    
    protected $connection;

    public function __construct() {
        $this->connection = PDOSingleton::connection();
    }
}
?>