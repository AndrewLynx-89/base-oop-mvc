<?php

use engine\Router\Router;

    Router::add('', ['controller' => 'Main', 'action' => 'index']);
    Router::add('(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?');