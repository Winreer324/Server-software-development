<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class Orders extends Controller{
    
    public function actionIndex(){
        $orders = $this->findOrdersByQuery();
        
        return $this->render('index', compact('orders'));
    }

}

?>