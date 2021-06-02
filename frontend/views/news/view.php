<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\DetailView;

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

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту новость?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
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
                             ],
                    ]);
                    ?>
                    </td>
            </tr>
        </tbody>
    </table>
</div>
