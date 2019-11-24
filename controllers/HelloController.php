<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 24.11.2019
 * Time: 13:54
 */

namespace app\controllers;


class HelloController
{
    public function actionWorld()
    {
        return $this->render('world');
    }
}