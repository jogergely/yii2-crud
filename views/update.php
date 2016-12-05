<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$title = (isset($model->title) ? $model->title : $model->getPrimaryKey());

/** @noinspection PhpUndefinedVariableInspection */
$this->title = "Update $modelName: $title";
$this->params['breadcrumbs'][] = ['label' => $modelName, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $title, 'url' => ['view', 'id' => $model->getPrimaryKey()]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $formFolder = "/";
    $formName = "_form";
    $formExtension = ".php";
    /** @noinspection PhpUndefinedVariableInspection */
    $formFile = $viewPath.$formFolder.$formName.$formExtension;
    /** @noinspection PhpUndefinedVariableInspection */
    $formPath = file_exists($formFile) ? "" : $relativeDefaultViewPath;

    /** @noinspection PhpUndefinedVariableInspection */
    echo $this->render($formPath.$formName, [
        'model' => $model,
        'viewPath' => $viewPath,
        'defaultViewPath' => $defaultViewPath,
        'controllerClass' => $controllerClass,
        'modelName' => $modelName,
    ]);
    ?>

</div>