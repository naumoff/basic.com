<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sizes */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sizes',
]) . $model->idSize;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sizes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSize, 'url' => ['view', 'id' => $model->idSize]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sizes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
