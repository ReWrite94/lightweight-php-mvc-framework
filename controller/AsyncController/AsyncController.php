<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

class AsyncController extends BaseController { 
    public function execute() {    
        $action = $_GET["requestedData"];
    
        switch ($action) {
            case 'example' : {
                echo json_encode( array(1,2,3,4,5) );
				return;
            }
            default : {
                echo json_encode(array());
                return;
            }
        }
    }
}

?>