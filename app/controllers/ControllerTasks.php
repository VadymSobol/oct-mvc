<?php


namespace controllers;

use core\Controller;
use models\ModelTasks;

class ControllerTasks extends Controller {
    
    public function __construct() {
	parent::__construct();
	$this->model=new ModelTasks();
    }
    
    public function action_index() {
	$this->view->tasks= $this->model->all();
	$this->view->render('tasks_index_view');
    }
}
