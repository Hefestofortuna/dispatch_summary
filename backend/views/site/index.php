<?php
/** @var Array[] $controllers */
$this->title = 'Starter Page';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <?php foreach ($controllers as $items): ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                'title' => $items,
                'text' => $items,
                'linkUrl' => $items,
                'icon' => 'fas fa-shopping-cart',
            ]) ?>
        </div>
            <?php endforeach; ?>
    </div>

</div>