<?php

namespace backend\controllers;

use Yii;
use backend\models\StationSubdivision;
use backend\models\StationSubdivisionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StationSubdivisionController implements the CRUD actions for StationSubdivision model.
 */
class StationSubdivisionController extends Controller
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
     * Lists all StationSubdivision models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StationSubdivisionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StationSubdivision model.
     * @param integer $station_id
     * @param integer $subdivision_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($station_id, $subdivision_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($station_id, $subdivision_id),
        ]);
    }

    /**
     * Creates a new StationSubdivision model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StationSubdivision();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'station_id' => $model->station_id, 'subdivision_id' => $model->subdivision_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StationSubdivision model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $station_id
     * @param integer $subdivision_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($station_id, $subdivision_id)
    {
        $model = $this->findModel($station_id, $subdivision_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'station_id' => $model->station_id, 'subdivision_id' => $model->subdivision_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StationSubdivision model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $station_id
     * @param integer $subdivision_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($station_id, $subdivision_id)
    {
        $this->findModel($station_id, $subdivision_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StationSubdivision model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $station_id
     * @param integer $subdivision_id
     * @return StationSubdivision the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($station_id, $subdivision_id)
    {
        if (($model = StationSubdivision::findOne(['station_id' => $station_id, 'subdivision_id' => $subdivision_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
