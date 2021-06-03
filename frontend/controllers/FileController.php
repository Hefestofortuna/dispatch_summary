<?php

namespace frontend\controllers;

use Yii;
use frontend\models\File;
use frontend\models\FileSearch;
use yii\base\BaseObject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use frontend\components\RefinementOfLinks;

/**
 * FileController implements the CRUD actions for File model.
 */
class FileController extends Controller
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
     * Lists all File models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single File model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new File model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new File();
        if ($model->load(Yii::$app->request->post())) {
            $names = UploadedFile::getInstances($model, 'filename');
            foreach ($names as $name){
                $random_name = Yii::$app->security->generateRandomString(12);
                $path = 'uploads/' . Yii::$app->user->identity->organization_id . '/news/' . $random_name . '.' . $name->extension;
                if ($name->saveAs($path)) {
                    $filename = $name->baseName . '.' . $name->extension;
                    $filepath = $path;
                    Yii::$app->db->createCommand()->insert('file',['filename'=>$filename,'filepath'=>$filepath,'news_id'=>$model->news_id])->execute();
                    $model->save();
                }
            }
            return $this->redirect(['index']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing File model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $refinement = new RefinementOfLinks();
        $file_model = File::find()->select(['filepath'])->where(['id'=>$id])->asArray()->all();
        $file_config = File::find()->where(['id'=>$id])->asArray()->all();
        $file_model = $refinement->getLinkForFileInput($file_model);
        if ($model->load(Yii::$app->request->post())) {
            $names = UploadedFile::getInstances($model, 'filename');
            foreach ($names as $name){
                $random_name = Yii::$app->security->generateRandomString(12);
                $path = 'uploads/' . Yii::$app->user->identity->organization_id . '/news/' . $random_name . '.' . $name->extension;
                if ($name->saveAs($path)) {
                    $filename = $name->baseName . '.' . $name->extension;
                    $filepath = $path;
                    Yii::$app->db->createCommand()->update('file',['filename'=>$filename,'filepath'=>$filepath,'news_id'=>$model->news_id],['id'=>$id])->execute();
                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
            'file_model' => $file_model,
            'file_config' => $file_config[0],
        ]);
    }

    /**
     * Deletes an existing File model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $file = Yii::$app->basePath . '/web/'.$this->findModel($id)->filepath;
        if(file_exists($file)){
            unlink($file);
        }
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    public function actionAjaxdelete($id)
    {
        $file = Yii::$app->basePath . '/web/'.$this->findModel($id)->filepath;
        if(file_exists($file)){
            unlink($file);
        }
        $this->findModel($id)->delete();
        return true;
    }

    /**
     * Finds the File model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return File the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = File::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
