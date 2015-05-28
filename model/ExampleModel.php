<?php

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/
 
include_once 'model/BaseModel.php';

class ExampleModel extends BaseModel {

	//sql strings
    private static $sql_findAll = 'SELECT * FROM Example';
    
	//attributes
    private $Id;
    private $Name;

	
	//constructor
    public function __construct() {
		parent::__construct();
    }
	
	// functions to execute database stuff
    public static function allExamples() {
        $connection = PDOSingleton::connection();
        
        $statement = $connection->prepare(self::$sql_findAll);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'ExampleModel');
    }
	
	//getters & setters
    
    public function getId() {
        return $this->Id;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getName() {
        return $this->Name;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }
}
?>