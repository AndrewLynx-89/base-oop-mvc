<?php

namespace app\controllers\admin;

use app\models\User;
use engine\Base\Controller;

class AdminController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
    }

}