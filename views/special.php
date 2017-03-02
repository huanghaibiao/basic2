<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Special */
/* @var $form ActiveForm */
?>
<div class="special">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'sort') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- special -->
