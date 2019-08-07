<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm; 
?> 
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'namex')->label('Your Name') ?> 
<?= $form->field($model, 'emailx')->label('Your Email') ?>
<div class="form-group"> 
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?> </div>
<?php ActiveForm::end(); ?> 