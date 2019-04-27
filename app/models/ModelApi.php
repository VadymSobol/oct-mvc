<?php


namespace models;

use core\Model;

class ModelApi extends Model{
    public function __construct() {
        parent::__construct();
        $this->table='questions';
    }
}
