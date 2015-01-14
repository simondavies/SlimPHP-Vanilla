<?php

namespace SlimVanilla\Controllers;
/**
 * Class BaseController
 * @package SimonDavies\SlimVanilla\Controllers
 */
class BaseController {
    /**
     * @object $app
     */
    protected $app;
    /**
     * @param $app
     */
    public function __construct($app){
        $this->app = $app;
    }

}