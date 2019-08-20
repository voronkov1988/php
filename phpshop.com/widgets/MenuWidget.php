<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.04.2019
 * Time: 11:21
 */

namespace app\widgets;

use app\models\Category;
use yii\base\Widget;


class MenuWidget extends Widget
{
    public $data;

    public function run()
    {
        $this->data = new Category();
        $this->data = $this->data->getCategories();
        $this->data = $this->CategoryToTemplate($this->data);
        return $this->data;
    }

    public function categoryToTemplate($data){
        ob_start();
        include __DIR__ .'/template/menu.php';
        return ob_get_clean();
    }
}