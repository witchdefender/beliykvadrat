<script type='text/javascript'>
    $(document).ready(function () {
        $('#mail-template-form').liTranslit({
            elName: '#MailTemplate_name',
            elAlias: '#MailTemplate_code'
        });
    })
</script>

<?php
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id'                     => 'mail-template-form',
        'enableAjaxValidation'   => false,
        'enableClientValidation' => true,
        'type'                   => 'vertical',
        'htmlOptions'            => array('class' => 'well'),
    )
); ?>

<div class="alert alert-info">
    <?php echo Yii::t('MailModule.mail', 'Fields, with'); ?>
    <span class="required">*</span>
    <?php echo Yii::t('MailModule.mail', 'are required.'); ?>
</div>

<?php echo $form->errorSummary($model); ?>

<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->dropDownListGroup(
            $model,
            'event_id',
            array(
                'widgetOptions' => array(
                    'data'        => CHtml::listData(MailEvent::model()->findAll(), 'id', 'name'),
                    'htmlOptions' => array('empty' => Yii::t('MailModule.mail', '--choose--')),
                ),
            )
        ); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup($model, 'name'); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup($model, 'code'); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup($model, 'from'); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup($model, 'to'); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup($model, 'theme'); ?>
    </div>
</div>
<div class='row'>
    <div class="col-sm-12 form-group">
        <?php echo $form->labelEx($model, 'body'); ?>
        <?php $this->widget(
            $this->module->editor,
            array(
                'model'     => $model,
                'attribute' => 'body',
                'options'   => $this->module->editorOptions,
            )
        ); ?>
    </div>

</div>
<div class='row'>
    <div class="col-sm-12 form-group">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php $this->widget(
            $this->module->editor,
            array(
                'model'     => $model,
                'attribute' => 'description',
                'options'   => $this->module->editorOptions,
            )
        ); ?>
    </div>

</div>
<div class='row'>
    <div class="col-sm-7">
        <?php echo $form->dropDownListGroup(
            $model,
            'status',
            array(
                'widgetOptions' => array(
                    'data'        => $model->getStatusList(),
                    'htmlOptions' => array(),
                ),
            )
        ); ?>
    </div>
</div>

<?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'buttonType' => 'submit',
        'context'    => 'primary',
        'label'      => $model->isNewRecord ? Yii::t('MailModule.mail', 'Create template and continue') : Yii::t(
                'MailModule.mail',
                'Save template and continue'
            ),
    )
); ?>

<?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'buttonType'  => 'submit',
        'htmlOptions' => array('name' => 'submit-type', 'value' => 'index'),
        'label'       => $model->isNewRecord ? Yii::t('MailModule.mail', 'Create template and close') : Yii::t(
                'MailModule.mail',
                'Save template and close'
            ),
    )
); ?>

<?php $this->endWidget(); ?>
