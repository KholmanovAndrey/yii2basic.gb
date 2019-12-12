<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 04.12.2019
 * Time: 16:33
 */

namespace app\commands;

use yii\console\Controller;

class RbacController extends Controller
{
    /**
     * php yii rbac/init
     * @throws \Exception
     */
    public function actionInit()
    {
        $role = \Yii::$app->authManager->createRole('admin');
        $role->description = 'Admin';
        \Yii::$app->authManager->add($role);

        $role = \Yii::$app->authManager->createRole('user');
        $role->description = 'User';
        \Yii::$app->authManager->add($role);
    }
}