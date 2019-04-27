<?php


namespace controllers;

use core\Controller;
use models\ModelApi;

class ControllerApi extends Controller{
    public function __construct() {
        parent::__construct();
        $this->model=new ModelApi(); 
    }
    
    public function action_index() {
        
    }
    
    public function action_questions() {
        $questions = $this->model->all();
        $json_text = json_encode($questions);
        header("Content-type: application/json;");
        echo $json_text;
    }
}
