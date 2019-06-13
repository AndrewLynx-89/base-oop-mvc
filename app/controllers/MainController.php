<?php

namespace app\controllers;


class MainController extends FrontController
{
    public function indexAction()
    {
        $this->setMeta('Главная страница');
    }
}