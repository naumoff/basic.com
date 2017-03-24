<?php

namespace app\components;

use Yii;
use yii\base\Action;

class IndexAction extends Action
{
	//=что бы переданная в параметрах контроллера переменная, стала видна
	//=ее надо тут просто объявить. 
	public $mainTitle;
	public $view;
	
	public function run()
	{
		return $this->controller->render($this->view,[
			'mainTitle' => $this->mainTitle
		]);
	}
}