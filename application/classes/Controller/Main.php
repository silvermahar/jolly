<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template
{

    public function action_index()
    {
        $this->response->body('hello, world!');
    }

} // End Welcome
