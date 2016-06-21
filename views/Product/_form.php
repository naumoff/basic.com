<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCategory')->textInput() ?>

    <?= $form->field($model, 'idProduction')->textInput() ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'BasePrice')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
