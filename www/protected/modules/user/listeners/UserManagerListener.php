<?php

class UserManagerListener
{
    public static function onUserRegistration(UserRegistrationEvent $event)
    {
        Yii::app()->notify->send(
            $event->getUser(),
            Yii::t(
                'UserModule.user',
                'Registration on {site}',
                array('{site}' => Yii::app()->getModule('yupe')->siteName)
            ),
            '//user/email/needAccountActivationEmail',
            array(
                'token' => $event->getToken()
            )
        );
    }

    public static function onPasswordRecovery(UserPasswordRecoveryEvent $event)
    {
        Yii::app()->notify->send(
            $event->getUser(),
            Yii::t('UserModule.user', 'Password recovery!'),
            '//user/email/passwordRecoveryEmail',
            array(
                'token' => $event->getToken()
            )
        );
    }

    public static function onSuccessActivatePassword(UserActivatePasswordEvent $event)
    {
        if (true === $event->getNotify()) {
            Yii::app()->notify->send(
                $event->getUser(),
                Yii::t('UserModule.user', 'Your password was changed successfully!'),
                '//user/email/passwordRecoverySuccessEmail',
                array(
                    'password' => $event->getPassword()
                )
            );
        }
    }

    public static function onSuccessEmailConfirm(UserEmailConfirmEvent $event)
    {
        Yii::app()->notify->send(
            $event->getUser(),
            Yii::t('UserModule.user', 'Email verification'),
            '//user/email/needEmailActivationEmail',
            array(
                'token' => $event->getToken()
            )
        );
    }
}
