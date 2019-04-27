<?php

namespace core;

use mysqli;

class Model {

    /**
     *
     * @var mysqli
     */
    protected $db;
    /**
     *
     * @var string
     */
    protected $table;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
    }
    
    public function all() {
        $query = "SELECT * from ".$this->table.";";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetch_all(MYSQLI_ASSOC);
        ;
    }

}
