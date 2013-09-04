<div class="form">
 
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-activate-form',
    'enableAjaxValidation'=>false,
)); ?>
 
    <p class="note">Press the button to activate your Account</p>
 
    <?php echo $form->errorSummary($model); ?> 
    <?php echo $form->hiddenField($model,'activation',array('type'=>"hidden",'value'=>Yii::app()->getRequest()->getQuery('activation'))); ?>
    <?php echo $form->hiddenField($model,'email',array('type'=>"hidden",'value'=>Yii::app()->getRequest()->getQuery('email'))); ?>
 
 
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
 
<?php $this->endWidget(); ?>
 
</div><!-- form -->
