<?php

namespace frontend\controllers;

use frontend\components\RefinementOfLinks;
use frontend\models\File;
use frontend\models\NewsUser;
use Yii;
use frontend\models\News;
use frontend\models\NewsSearch;
use yii\base\BaseObject;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\behaviors\AccessBehavior;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{

    public $defaultAction = 'list';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'class' => AccessBehavior::className(),
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */

    public function actionList()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=9;
        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $news_user_model = NewsUser::find()->where(['news_id'=>$id, 'user_id' =>Yii::$app->user->id])->count();
        $refinement = new RefinementOfLinks();
        $file_model = File::find()->select(['filepath'])->where(['news_id'=>$id])->asArray()->all();
        $file_model = $refinement->getLinkForFileInput($file_model);
        $file_config_query = File::find()->where(['news_id'=>$id])->asArray()->all();
        $file_config = [];
        foreach ($file_config_query as $item) {
            array_push($file_config,[
                'caption' => $item['filename'],
                'url' => false,
                'downloadUrl' => Url::base(true) . '/' . $item['filepath'],
            ]);
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
            'file_model' => $file_model,
            'file_config' => $file_config,
            'news_user_model' => $news_user_model,
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $model->putdate = date("m.d.Y");
        $model->user_id = Yii::$app->user->id;
        $file_model = new File();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($file_model->load(Yii::$app->request->post())){
                $names = UploadedFile::getInstances($file_model, 'filename');
                foreach ($names as $name){
                    $random_name = Yii::$app->security->generateRandomString(12);
                    $path = 'uploads/' . Yii::$app->user->identity->organization_id . '/news/' . $random_name . '.' . $name->extension;
                    if ($name->saveAs($path)) {
                        $filename = $name->baseName . '.' . $name->extension;
                        $filepath = $path;
                        Yii::$app->db->createCommand()->insert('file',['filename'=>$filename,'filepath'=>$filepath,'news_id'=>$model->id])->execute();
                        $file_model->save();
                    }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'file_model' => $file_model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $file_model_form = new File();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $names = UploadedFile::getInstances($file_model_form, 'filename');
            foreach ($names as $name){
                $random_name = Yii::$app->security->generateRandomString(12);
                $path = 'uploads/' . Yii::$app->user->identity->organization_id . '/news/' . $random_name . '.' . $name->extension;

                if ($name->saveAs($path)) {
                    $filename = $name->baseName . '.' . $name->extension;
                    $filepath = $path;
                    Yii::$app->db->createCommand()->insert('file',['filename'=>$filename,'filepath'=>$filepath,'news_id'=>$id])->execute();
                }
            }
           return $this->redirect(['view', 'id' => $model->id]);
        }
        $refinement = new RefinementOfLinks();
        $file_model = File::find()->select(['filepath'])->where(['news_id'=>$id])->asArray()->all();
        $file_model = $refinement->getLinkForFileInput($file_model);
        $file_config_query = File::find()->where(['news_id'=>$id])->asArray()->all();
        $file_config = [];
        foreach ($file_config_query as $item) {
            array_push($file_config,[
                'caption' => $item['filename'],
                'url' => Url::base(true) .'/file/ajaxdelete?id=' . $item['id'],
                'downloadUrl' => Url::base(true) . '/' . $item['filepath'],
            ]);
        }

        return $this->render('update', [
            'model' => $model,
            'file_model' => $file_model,
            'file_model_form' => $file_model_form,
            'file_config' => $file_config,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['list']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
