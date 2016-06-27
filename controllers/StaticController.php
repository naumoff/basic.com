<?php

namespace app\controllers;


use yii\web\Controller;

class StaticController extends Controller
{
	//=задает дефолтный ID Action, если его не укажут в адресной строке
	//=например ?r=site/  , то автоматом подставит invalid.
    public $defaultAction = 'invalid';

	public function actions()
	{
		return [
			'invalid'=> [
				'class' => 'app\components\IndexAction',
				'mainTitle' => 'Andrey',
				'view' => 'index'
			],
		];
	}
}