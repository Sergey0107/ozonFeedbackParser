<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?= Html::a('К списку магазинов', ['/shop/index'], ['class'=>'btn btn-primary']) ?>

</div>
