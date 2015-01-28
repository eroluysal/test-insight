<?php namespace Framework\System;

class Application {

    /**
     * Application bindings.
     *
     * @var Application
     */
    protected $app = array();

    /**
     * Create a new Application instance.
     *
     * @param  Application  $app
     * @return Application
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

}
