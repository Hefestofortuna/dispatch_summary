<?php

namespace frontend\controllers;

use Yii;
use frontend\models\NewsUser;
use yii\base\BaseObject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsUserController implements the CRUD actions for NewsUser model.
 */
class NewsUserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionCreate($news_id)
    {
        if(NewsUser::findOne(['news_id' => $news_id, 'user_id' => Yii::$app->user->id]) == null){
            $model = new NewsUser();
            $model->news_id = $news_id;
            $model->user_id = Yii::$app->user->id;
            $model->save();
            return "Отметка проставлена.";
        }
        else{
            return "Ошибка! Свяжитесь с администратором проекта.";
        }

    }

    /**
     * Finds the NewsUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $news_id
     * @param integer $user_id
     * @return NewsUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($news_id, $user_id)
    {
        if (($model = NewsUser::findOne(['news_id' => $news_id, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
