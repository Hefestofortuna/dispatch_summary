<?php

namespace frontend\controllers;

use frontend\models\Subdivision;
use Yii;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

class OrganizationController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSubdivision()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $organization_id = $parents[0];
                $out = Subdivision::find()->where(['organization_id'=>'16'])->all();
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                return ['output'=>$out, 'selected'=>'title'];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }

}
