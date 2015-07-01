<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model drholera\Dhweather\model\WeatherSettings */
/* @var $form ActiveForm */
$asset = drholera\Dhweather\assets\WeatherAssets::register($this);
?>
<div class="form">

    <?php $form = ActiveForm::begin(['id' => 'link_form']); ?>

        <?= $form->field($model, 'city') ?>
    
        <div class="form-group">
            <? echo Html::a('Click me', ['weather/get-weather'], [
                'id' => 'ajax_button',
                'data-on-done' => 'weatherFormDone',
                'data-form-id' => 'link_form',
                'class' => 'btn btn-primary'
            ]); ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form -->
