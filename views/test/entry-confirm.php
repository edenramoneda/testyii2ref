<?php
use yii\helpers\Html;
?>
<h3>This is an entry confirm</h3>
    <ul> 
        <li>
            <label>Name</label>: <?= Html::encode($model->namex) ?>
        </li> 
        <li><label>Email</label>: <?= Html::encode($model->emailx) ?>
        </li> 
    </ul>