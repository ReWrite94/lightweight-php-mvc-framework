<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

require_once 'class/pdosingleton.php';

abstract class AbstractModel {
    
    protected $connection;

    public function __construct() {
        $this->connection = PDOSingleton::connection();
    }
}
?>