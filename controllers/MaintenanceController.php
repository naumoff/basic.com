<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\MaintenanceMode;

class MaintenanceController extends Controller
{
	public function actionFuck()
	{
		$model = new MaintenanceMode();
		$text = $model->attributes;
		return $this->render('fuck',
			[
				'text' => $text,
			]
		);
	}
}