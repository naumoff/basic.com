<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\FeedbackForm;

class FeedbackFormController extends Controller
{
	public function actionDebugFunc()
	{
		$model = new FeedbackForm();
		$attributes = $model->attributes;
		
		return $this->render('debug',
			[
				'variables'=>$attributes,
			]
		);
	}
	public function feedback()
	{
		$model = new actionFeedbackForm();
		
	}
}