<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

use yii\base\Event;
use yii\base\View;
use yii\db\Query;


Event::on(View::className(), View::EVENT_BEFORE_RENDER, function() {
    $query = new Query;

    $data= $query->select('store_id,store_name')->from('store')->all();

    // $query2 = new Query;

    // $data2= $query2->select('name,menu_id')
    // ->from('submenu')->all(); 

    // Yii::$app->view->params['data'] = $data;
    Yii::$app->view->params['store_menu'] = $data;

});
