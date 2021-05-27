<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $model frontend\models\News */

?>

<div class="row">
    <div class="col-lg-4">
        <div class="card">

            <div class="card-header">
                <h5><?= Html::encode($model->title) ?></h5>
            </div>

            <div class="card-body">

                <?= StringHelper::truncate(strip_tags($model->content),250,'...'); ?>

            </div>
            <div class="card-footer">
                <div class="float-left">
                        <small class="text-muted">
                            Автор: <?= Html::encode($model->user->getShortName()) ?>
                            <br>
                            Опубликованно: <?= Yii::$app->formatter->asDate($model->putdate, 'dd.MM.yyyy')?>
                        </small>
                </div>

                <p class="float-right"><a href="<?= Url::to(['news/view', 'id' => $model->id]); ?>" class="btn btn-primary">Читать далее</a></p>
            </div>
        </div>
    </div>
</div>