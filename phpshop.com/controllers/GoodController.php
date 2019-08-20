<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.04.2019
 * Time: 22:04
 */

namespace app\controllers;
use app\models\Good;
use yii\web\Controller;

class GoodController extends Controller
{
    public $title;

    public function actionIndex($name){
        $good = new Good();
        $good = $good->getOneGood($name);
        \Yii::$app->view->title = 'Продукт ' . $good['name'];
        return $this->render('index', compact('good'));

    }
}