<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {
    /**
     *
     * @var mysqli
     */
    protected $db;
    
    public function __construct() {
	$this->db=new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    }
    
    public function all() {
	$query="SELECT * from tasks;";
	$result = $this->db->query($query);
	if(!$result){
	    return false;
	}
	return $result->fetch_assoc(MYSQLI_ASSOC);;
    }
}
