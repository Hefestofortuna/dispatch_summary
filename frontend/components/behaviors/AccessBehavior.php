<?php

namespace frontend\components\behaviors;

use yii;
use yii\base\Behavior;
use yii\web\Controller;

class AccessBehavior extends Behavior
{
    function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'checkAccess',
        ];
    }

    public function checkAccess()
    {

        if (Yii::$app->user->isGuest) {
            return Yii::$app->getResponse()->redirect(array('site/login'));
        }
    }

}

