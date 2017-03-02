<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name2') ?>
<?= $form->field($model, 'email2')->label('what is you email') ?>
<div class="form-group">
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>