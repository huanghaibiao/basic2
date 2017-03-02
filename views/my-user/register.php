<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$this->title = 'My page title';
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password2') ?>
<?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
<?= $this->render('_overview') ?>
<?= $aa ?>
<?=var_dump($this->context)?>
