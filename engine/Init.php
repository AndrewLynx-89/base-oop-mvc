<?php

namespace engine;

use engine\ErrorHandler\ErrorHandler;
use engine\Registry\Registry;
use engine\Router\Router;

class Init
{
    public static $app;
    
    public function __construct()
    {
        session_start();

        Router::run();
    }
}