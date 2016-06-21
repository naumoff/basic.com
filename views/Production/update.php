<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Production */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Production',
]) . $model->idProduction;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProduction, 'url' => ['view', 'id' => $model->idProduction]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="production-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
