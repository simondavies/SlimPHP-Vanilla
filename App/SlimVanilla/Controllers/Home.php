<?php

namespace SlimVanilla\Controllers;

use SlimVanilla\Repositories\MessageRepository as Messages;
/**
 * Class Home
 * @package SlimVanilla\Controllers
 */
class Home extends BaseController {

    /**
     * @var
     */
    protected $message;

    function __construct()
    {
        parent::__construct();
        $this->messages = new Messages();
    }

    public function index(){
        //- get all the welcome messages
        $welcomeMessages = $this->messages->getAllWelcomeMessages();
        //-- get total number of welcome messages returned
        $max_count = $welcomeMessages->count() - 1;
        //-- example log call
        $this->log('Total Welcome messages: ' . $max_count, 'help');
        //-- build the view passing in a random welcome message to out put
        $this->view('pages.home',
            ['welcome_message' => $welcomeMessages[rand(0,$max_count)]['critical']]
        );
    }

}