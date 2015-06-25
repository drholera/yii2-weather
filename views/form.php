<?php
    use Dhweather;
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['id' => 'dhweather-widget']); ?>
    <?= $form->field($model, 'country'); ?>
    <?= $form->field($model, 'city'); ?>
<?php ActiveForm::end(); ?>
