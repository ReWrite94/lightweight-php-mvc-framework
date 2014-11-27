<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

class UserController extends AbstractController { 
    public function execute() {    
        $action = $_GET["page"];
    
        switch ($action) {
            case 'index' : {
                $this->template->addParam("title", "Startseite");
                $this->template->setContent("view/user/home.php");
                $this->template->render();
                break;
            }
            case 'logout' : {
                session_destroy();
                header("Location: index.php");
                break;
            }
            default : {
                $this->template->addParam("title", "Startseite");
                $this->template->setContent("view/user/home.php");
                $this->template->render();
                break;
            }
        }
    }
}

?>
