<?php

namespace app\components;

use Yii;
use yii\base\Action;

class IndexAction extends Action
{
	public $mainTitle;

	public function run()
	{
		return $this->controller->render('index',[
			'mainTitle' => $this->mainTitle
		]);
	}
}