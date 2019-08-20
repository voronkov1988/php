<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.04.2019
 * Time: 9:47
 */

namespace app\controllers;

use app\models\Category;
use app\models\Good;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public $title;

    public function actionIndex(){
        $goods = new Good();
        $goods = $goods->getAllGoods();
        Yii::$app->view->title = 'Домашняя страница';
        return $this->render('index', compact('goods'));
    }

    public function actionView($id){
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);

        $category = new Category();
        $categoryName = $category->getBrowserName($id);
        Yii::$app->view->title = 'Категория '. $categoryName;

        return $this->render('view', compact('goods'));
    }

    public function actionSearch(){
        $text = Yii::$app->request->get('text');
        $text = htmlspecialchars($text);
        $goods = new Good();
        $goods = $goods->getSearchResult($text);
        Yii::$app->view->title = 'Поиск : ' . $text;
        return $this->render('search', compact('goods', 'text'));
    }
}