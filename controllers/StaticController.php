<?php

namespace app\controllers;


use yii\web\Controller;

class StaticController extends Controller
{
//	public $defaultAction = 'invalid';
	public function actions()
	{
		return [
			'invalid'=> [
				'class' => 'app\components\IndexAction',
				'mainTitle' => 'Andrey'
			],
		];
	}
}