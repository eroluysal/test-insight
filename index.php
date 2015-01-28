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
        $this->setApplicationInstance($app);
    }

    /**
     * Set the application instance.
     *
     * @param  Application  $app
     * @return void
     */
    protected function setApplicationInstance($app)
    {
        $this->app = $app;
    }

    /**
     * Get the application instance.
     *
     * @return Application
     */
    protected function getApplicationInstance()
    {
        return $this->app;
    }

}
