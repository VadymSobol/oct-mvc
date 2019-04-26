<?php

namespace controllers;

use core\Controller;

class ControllerQuestions extends Controller {

    public function action_index() {
        $this->view->render('questions_index_view');
    }

}
