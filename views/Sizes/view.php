<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sizes */

$this->title = $model->idSize;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sizes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sizes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idSize], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idSize], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idSize',
            'idProduct',
            'Size',
            'Availability',
            'PriceCorrection',
        ],
    ]) ?>

</div>
