<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SizesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sizes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSize') ?>

    <?= $form->field($model, 'idProduct') ?>

    <?= $form->field($model, 'Size') ?>

    <?= $form->field($model, 'Availability') ?>

    <?= $form->field($model, 'PriceCorrection') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
