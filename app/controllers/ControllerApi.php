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
    
    public function action_addquestion() {
	//TODO в идеале нужно валидировать входящие данные
	$question = filter_input_array(INPUT_POST);
	$this->model->add($question);
    }
    
    public function action_deletequestion() {
	$id=filter_input(INPUT_POST,'id');
	$this->model->delete($id);
    }
    public function action_addphoto() {
	var_dump($_FILES);
    }
}
