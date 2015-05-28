<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/
 
require_once 'controller/BaseController.php';

require_once 'class/Template.php';

require_once 'controller/UserController/UserController.php';
require_once 'controller/AsyncController/AsyncController.php';

/* Model Classes */
//Here you have to require all model-classes you want to use!
require_once 'model/ExampleModel.php';

class FrontController extends BaseController {
    
    public function execute() {
		if (filter_input(INPUT_GET, "ajax")) {
			$controller = new AsyncController($this->template);           
            $controller->execute();   
			return;
		}
	
        if (isset($_SESSION["ID"])) {
			// if  User is logged in, execute the UserController. You can also add other Controller (AdminController for backend).
			$controller = new UserController($this->template);           
            $controller->execute();                
        }
        else
        {
			//here you should handle register/login or use another controller! You could also execute the UserController if you don't need authentification.
			$this->template->addParam("title", "Login");
			$this->template->setContent('view/user/login.php');
			$this->template->render();
        }
    }
}

?>
