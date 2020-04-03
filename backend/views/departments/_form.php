<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\backend\models\Companies::find()->all(),'company_id','company_name'),
        [
                'prompt'=>'Select Company'
        ]
    )?>

    <?= $form->field($model, 'branches_branch_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\backend\models\Branches::find()->all(),'branch_id','branch_name'),
        ['prompt'=>'Select Branch']
    )?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
