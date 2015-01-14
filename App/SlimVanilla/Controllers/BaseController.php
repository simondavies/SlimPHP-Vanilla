<?php

namespace SlimVanilla\Controllers;
/**
 * Class BaseController
 * @package SlimVanilla\Controllers
 */
class BaseController {
    /**
     * @object $app
     */
    protected $app;

    /**
     * @var array
     */
    private $log_types = ['debug','info','notice','warning','error','critical','alert','emergency'];

    public function __construct(){
        global $app;
        $this->app = $app;
    }

    /**
     * Simplify the call to the view render and enable dot syntax for file paths
     * @param $template
     * @param $params
     */
    protected function view($template, $params = []){
        /**
         * Enable use to pass in the path to the view as '/' or '.' for example
         *  'foldername/viewname'
         *  'foldername.viewname' this will parse as 'foldername/viewname'
         *  then append a .php to the file name
         */
        $view = str_replace('.', '/', $template);
        $this->app->render($view . '.php', $params);
    }

    /**
     * @param $log_message
     * @param $type
     * @return mixed
     */
    protected function log($log_message, $type){
        //-- let check we have the type requested and use
        if(in_array($type, $this->log_types)) {
            $this->app->log->$type($log_message);
        } else {
            //-- else use a default
            $this->app->log->info($log_message);
        }
    }

}