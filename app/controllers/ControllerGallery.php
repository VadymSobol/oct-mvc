<?php


namespace controllers;

use core\Controller;

class ControllerGallery extends Controller{
    
    public function action_index() {
	$this->view->render('gallery_index_view');
    }
}
