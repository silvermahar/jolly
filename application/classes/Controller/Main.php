<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{
    public function before() {
        parent::before();

        if (!Auth::instance()->logged_in()) {
            //HTTP::redirect('login');
        }
    }

} // End Welcome
