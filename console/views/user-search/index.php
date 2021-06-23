<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Searches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-search-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Search', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            //'email:email',
            //'status',
            //'created_at',
            //'updated_at',
            //'is_admin:boolean',
            //'subdivision_id',
            //'organization_id',
            //'name',
            //'post_id',
            //'description',
            //'reinstruction:boolean',
            //'verification_token',
            //'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
