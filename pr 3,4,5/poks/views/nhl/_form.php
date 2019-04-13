<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'match')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'win')->textInput() ?>

    <?= $form->field($model, 'lose')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
