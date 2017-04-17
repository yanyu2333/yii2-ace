<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 17-4-15
 * Time: 下午11:01
 */
namespace  home\controllers;

use yii\web\Controller;

class Site2Controller extends Controller{
    public function actionIndex(){
        //$content
        $data = [
            'name' => '123'

        ];
       return $this->render('index',$data);
    }
}