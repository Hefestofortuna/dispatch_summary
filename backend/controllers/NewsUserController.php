<?php

namespace backend\controllers;

use Yii;
use backend\models\NewsUser;
use backend\models\NewsUserSearch;
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

    /**
     * Lists all NewsUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NewsUser model.
     * @param integer $news_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($news_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($news_id, $user_id),
        ]);
    }

    /**
     * Creates a new NewsUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NewsUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_id' => $model->news_id, 'user_id' => $model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NewsUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $news_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($news_id, $user_id)
    {
        $model = $this->findModel($news_id, $user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_id' => $model->news_id, 'user_id' => $model->user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NewsUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $news_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($news_id, $user_id)
    {
        $this->findModel($news_id, $user_id)->delete();

        return $this->redirect(['index']);
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
