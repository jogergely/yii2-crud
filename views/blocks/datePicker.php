<?php
use kartik\date\DatePicker;

/** @noinspection PhpUndefinedVariableInspection */
echo $form->field($model, $field)->widget(DatePicker::className(), [
    'name' => $field,
    'value' => date('Y-m-d', strtotime('+2 days')),
    'options' => ['placeholder' => 'Select date...'],
    'readonly' => true,
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'todayHighlight' => true,
    ]
]);