<?php

namespace app\Models;
use Yii;
use yii\base\Model;

class TestModel extends Model{

    public $namex;
    public $emailx;

    public function rules(){
        return [
            [['namex','emailx'],'required'],
            ['emailx','email']
        ];
    
       /* $model = new EntryForm(); 
        $model->name = 'Qiang'; 
        $model->email = 'bad'; 
        if ($model->validate()) 
        { // Good! 
        } 
        else {
             // Failure! // 
            $model->getErrors();
        }*/
    }
    
}
?>