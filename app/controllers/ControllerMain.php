<?php

namespace controllers;

use core\Controller;

class ControllerMain extends Controller {

    public function action_index() {
	$this->view->render('main_index_view');
    }

    public function action_create() {
	echo 'Main controller action create'; //TODO delete 
	//TODO action
    }

}
