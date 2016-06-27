<?php

namespace app\models;


use yii\base\Model;

class FeedbackForm extends Model
{
	public $name;
	public $email;
	public $feedback;

	public function rules()
	{
		return
		[
			[['name','email','feedback-form'],'required'],
			['email','email']
		];
	}
}