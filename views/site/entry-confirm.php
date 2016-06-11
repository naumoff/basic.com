<?php
use yii\helpers\Html;
?>
<h4>Вы ввели следующую информацию:</h4>
<ul>
	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
