<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-form">

    <?php
    $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]);
    ?>

    <?php
    /** @var \h3tech\crud\controllers\AbstractCRUDController $controllerClass */
    foreach($controllerClass::viewRules() as $field => $rule) {
        $blockFolder = "blocks/";
        $blockType = $rule[0];
        $blockExtension = ".php";
        $blockPath = $blockFolder.$blockType.$blockExtension;

        /** @noinspection PhpUndefinedVariableInspection */
        $blockFile = $viewPath."/".$blockPath;
        if (!file_exists($blockFile)) {
            /** @noinspection PhpUndefinedVariableInspection */
            $blockFile = $defaultViewPath.$blockPath;
        }

        $settings = isset($rule[1]) ? $rule[1] : [];
        /** @noinspection PhpIncludeInspection */
        include $blockFile;
    }
    ?>

    <div class="form-group">
        <?= /** @noinspection PhpUndefinedVariableInspection */
        Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>