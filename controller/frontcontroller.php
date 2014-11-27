<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/
 
require_once 'controller/abstractcontroller.php';

require_once 'class/template.php';

require_once 'controller/UserController/UserController.php';

/* Model Classes */
//Here you have to require all model-classes you want to use!
require_once 'model/example.php';

class FrontController extends AbstractController {
    
    public function execute() {
        if (isset($_SESSION["ID"])) {
			// if player is User (logged in), call the Usercontroller. You can also add other Controller (Admincontroller for backend for example).
			$controller = new UserController($this->template);           
            $controller->execute();                
        }
        else
        {
			// Here you should handle register/login or use another Controller! You could also use the Usercontroller if you don't need authentification.
			$this->template->addParam("title", "Login");
			$this->template->setContent('view/user/login.php');
			$this->template->render();
        }
    }
}

?>