<?php
$this->pageTitle = Yii::t('UserModule.user', 'Sign up');
//$this->breadcrumbs = array(Yii::t('UserModule.user', 'Sign up'));
?>
<div class="section section-breadcrumbs">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1>Регистрация</h1>
                        </div>
                </div>
        </div>
</div>

<!-- form -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="basic-login">
                    <form role="form">
<!--                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>Email</b></label>
                            <input class="form-control" id="register-username" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="register-password"><i class="icon-lock"></i> <b>Password</b></label>
                            <input class="form-control" id="register-password" type="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password</b></label>
                            <input class="form-control" id="register-password2" type="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn pull-right">Register</button>
                            <div class="clearfix"></div>
                        </div>-->
<?php $this->widget('yupe\widgets\YFlashMessages'); ?>

<?php
$form = $this->beginWidget(
        'bootstrap.widgets.TbActiveForm', array(
    'id' => 'registration-form',
    'type' => 'vertical',
    'htmlOptions' => array(
        'class' => 'well',
    )
        )
);
?>

<?php echo $form->errorSummary($model); ?>

<div class='row'>
    <div class="col-xs-12">
<?php echo $form->textFieldGroup($model, 'nick_name'); ?>
    </div>
</div>

<div class='row'>
    <div class="col-xs-12">
<?php echo $form->textFieldGroup($model, 'email'); ?>
    </div>
</div>

<div class='row'>
    <div class="col-xs-12">
<?php echo $form->passwordFieldGroup($model, 'password'); ?>
    </div>
</div>

<div class='row'>
    <div class="col-xs-12">
<?php echo $form->passwordFieldGroup($model, 'cPassword'); ?>
    </div>
</div>

<?php if ($module->showCaptcha && CCaptcha::checkRequirements()): { ?>
        <div class="row">
            <div class="col-xs-6">
                <?php
                echo $form->textFieldGroup(
                        $model, 'verifyCode', array('hint' => Yii::t('UserModule.user', 'Please enter the text from the image'))
                );
                ?>
            </div>
            <div class="col-xs-6">
                <?php
                $this->widget(
                        'CCaptcha', array(
                    'showRefreshButton' => true,
                    'imageOptions' => array(
                        'width' => '150',
                    ),
                    'buttonOptions' => array(
                        'class' => 'btn btn-default',
                    ),
                    'buttonLabel' => '<i class="glyphicon glyphicon-repeat"></i>',
                        )
                );
                ?>
            </div>
        </div>
    <?php } endif; ?>

<div class="row">
    <div class="col-xs-12">
        <?php
        $this->widget(
                'bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'context' => 'primary',
            'label' => Yii::t('UserModule.user', 'Sign up'),
                )
        );
        ?>
    </div>
</div>

<hr/>

        <?php if (Yii::app()->hasModule('social')): { ?>
        <div class="row">
            <div class="col-xs-12">
                <?php
                $this->widget(
                        'vendor.nodge.yii-eauth.EAuthWidget', array(
                    'action' => '/social/login',
                    'predefinedServices' => array('google', 'facebook', 'vkontakte', 'twitter', 'github'),
                        )
                );
                ?>
            </div>
        </div>
    <?php } endif; ?>

<?php $this->endWidget(); ?>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1 social-login">
                <p>You can use your Facebook or Twitter for registration</p>
                <div class="social-login-buttons">
                    <a href="#" class="btn-facebook-login">Use Facebook</a>
                    <a href="#" class="btn-twitter-login">Use Twitter</a>
                </div>
            </div>
        </div>
    </div>
</div>