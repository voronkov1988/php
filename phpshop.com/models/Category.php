<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.04.2019
 * Time: 11:24
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }
    public function getCategories(){
        return Category::find()->asArray()->all();
    }

    public function getBrowserName($code){
        $categoryes = Category::find()->where(['cat_name' => $code])->asArray()->one();
        return $categoryes['browser_name'];
    }
}