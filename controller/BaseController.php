<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

abstract class BaseController {
    
    protected $template; 
    public function __construct($template) {
        $this->template = $template;
    }
    
    public abstract function execute();
}
?>