<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\TestModel;


class TestController extends Controller{

    public function actionEden() { 
        $model = new TestModel();

        //If the model is successfully populated (i.e., if the user has submitted the HTML form),
        // the action will call validate() to make sure the values entered are valid. 
        if($model->load(Yii::$app->request->post()) && $model->validate()){

            return $this->render('entry-confirm', ['model' => $model]);
        }else{
            return $this->render('test', ['model' => $model]);
        }
         
    }

}

?>