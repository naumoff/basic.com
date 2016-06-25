<?php
/**
 * path = ../controllers/CountryController.php
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public $layout = 'test';
    
    public function actionIndex()
    {

        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}