<?php

namespace app\controllers;

use app\models\BlockMenu;
use yii\web\Controller;

class BlockController extends Controller
{
	public function actionMyBlock()
	{
		$object = new BlockMenu();
		$array = $object->attributes;
		return $this->render('my-block',$array);
	}
}