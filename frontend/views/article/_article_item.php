<?php
/* @var $model \frontend\models\Article*/
?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/article/view','id'=>$model->id])?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title)?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(),40)?>
    </div>
    <p class="text-muted text-right">
        <small>Created At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at)?></b>  By: <b><?php echo $model->createdBy->username; ?></b></small>
    </p>
</div>
