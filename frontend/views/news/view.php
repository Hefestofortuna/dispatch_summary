<?php

use kartik\file\FileInput;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */
/* @var $file_model frontend\models\File */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <div class="float-left">
            <p>
                <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены, что хотите удалить эту новость?',
                        'method' => 'post',
                    ],
                ]) ?>
        </div>
        <div class="float-right">
            <?php

            Modal::begin([
                'title' => 'Список ознакомившихся',
                'toggleButton' => [
                    'class' =>'btn btn-primary',
                    'label' => 'Список ознакомившихся',
                ],
            ]);
            if(!is_null($news_user_model)){
                foreach ($news_user_model as $item)
                    echo $item['name'] . "<hr>\n";
            }
            else{
                echo "Пока с новостью никто не ознакомлен.";
            }
            Modal::end();
            ?>
            </p>
        </div>
    </div>
    <table class="table table-striped table-bordered detail-view">
        <tbody>
            <tr>
                <th><?= $model->getAttributeLabel('title') ?></th>
                <td><h5><?= $model->title ?></h5></td>
            </tr>
            <tr>
                <th><?= $model->getAttributeLabel('content') ?></th>
                <td><?= $model->content ?></td>
            </tr>
            <tr>
                <th><?= $model->getAttributeLabel('user_id') ?></th>
                <td><?= $model->user->name ?></td>
            </tr>
            <tr>
                <th><?= $model->getAttributeLabel('putdate') ?></th>
                <td><?= Yii::$app->formatter->asDate($model->putdate, 'dd.MM.Y')  ?></td>
            </tr>
            <tr>
                <th>Файлы</th>
                <td> <?= FileInput::widget([
                        'name' => 'input-ru[]',
                        'pluginOptions' => [
                            'initialPreview'=>$file_model,
                            'initialPreviewAsData'=>true,
                            'showCaption' => false,
                            'showRemove' => false,
                            'showUpload' => false,
                            'showBrowse' => false,
                            'preferIconicPreview' => true,
                            'initialPreviewConfig'=>$file_config,
                            'initialPreviewShowDelete' => false,
                             ],
                    ]);
                    ?>
                    </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex flex-row-reverse">
        <?php Pjax::begin(['enablePushState' => false]); ?>
        <?php
            if($news_user_submit_model == 0){
                echo Html::a('Ознакомлен(а)', ['/news-user/create', 'news_id' => $model->id], ['class' => 'btn btn-success ']);
            }
        ?>
        <?php Pjax::end(); ?>
    </div>
</div>
