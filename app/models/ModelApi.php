<?php


namespace models;

use core\Model;

class ModelApi extends Model{
    public function __construct() {
        parent::__construct();
        $this->table='questions';
    }
    
    public function add($question) {
	$query="insert into ".$this->table." values (null, '{$question['author']}', '{$question['text']}', '{$question['delete']}');";
	$this->db->query($query);
    }
    
    public function delete($id) {
	$query = "DELETE FROM ".$this->table." where id=".$id.";";
	$this->db->query($query);
	var_dump($query);
    }
}
