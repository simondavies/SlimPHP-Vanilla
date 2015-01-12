<?php

namespace SimonDavies\SlimVanilla\Controllers;

use SimonDavies\SlimVanilla\Models\Messages as Messages;
/**
 * Class Home
 * @package SimonDavies\SlimVanilla\Controllers
 */
class Home extends BaseController{

    /**
     * Default Home Class method
     */
    public function index(){

        //-- Lets get a list of all set welcome messages
        $messages = Messages::all();
        $max_count = $messages->count() - 1;
        $welcome_message = $messages[rand(0,$max_count)]['message'];

        //-- render the view called
        $this->app->render('home.php', ['welcome_message'=>$welcome_message]);
    }

}