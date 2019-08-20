<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.04.2019
 * Time: 10:40
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;
use yii\debug\models\timeline\Search;
use yii\helpers\Html;

class Good extends ActiveRecord
{
    public static function tableName(){
        return'good';
    }
    public function getAllGoods(){
        $goods = Yii::$app->cache->get('goods');
        if (!$goods){
            $goods = Good::find()
                ->asArray()
                ->all();
            Yii::$app->cache->set('goods', $goods, '10');
        }
        return $goods;
    }

    //нет, просто отступ, индекс кэша в этом случае будет
    //$id .  '_catGoods'
    //sushi_catGoods
    //или
    //rolls_catGoods
    //
    //разные ключи кэша, для разных категорий
    // = разные данные в кэше для каждой категории
    public function getGoodsCategories($categoryId){ //берём продукты определённой категории по $id
       $catGoods = Yii::$app->cache->get( $categoryId . '_cacheName');  // это ключ кэша, он должен быть разный
        // для разных категорий,
        // иначе будет грузиться всё время один кэш
       if (!$catGoods){
           $catGoods = Good::find()
               ->where(['category' => $categoryId]) // ищем в базе продукты 'category' которых = $id
               ->asArray()
               ->all();
           Yii::$app->cache->set(  $categoryId . '_cacheName', $catGoods, '300');
       }
        return $catGoods;
    }

    public function getOneGood($name){
        return Good::find()->where(['link_name' => $name]) -> one();
    }

    public function getSearchResult($text){
        $searchResult = Good::find()
            ->where(['like', 'name', $text])
            ->asArray()
            ->all();

        return $searchResult;
    }

}