<?php
/**
 * Отображение для layouts/main:
 *
 * @category YupeLayout
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode(Yii::app()->name); ?> <?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
    $mainAssets = Yii::app()->getAssetManager()->publish(
        Yii::getPathOfAlias('application.modules.yupe.views.assets')
    );
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/styles.css');
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/bootstrap-notify.css');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/main.js');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/jquery.li-translit.js');
    if (($langs = $this->yupe->getLanguageSelectorArray()) != array()) {
        Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/flags.css');
    }
    ?>
    <?php
    Yii::app()->getClientScript()->registerScript(
        'yupeToken',
        'var actionToken = ' . json_encode(
            array(
                'token'      => Yii::app()->getRequest()->csrfTokenName . '=' . Yii::app()->getRequest()->csrfToken,
                'url'        => Yii::app()->createAbsoluteUrl('yupe/modulesBackend/moduleStatus'),
                'message'    => Yii::t('YupeModule.yupe', 'Wait please, your request in process...'),
                'error'      => Yii::t(
                        'YupeModule.yupe',
                        'During the processing of your request an unknown error occurred =('
                    ),
                'loadingimg' => CHtml::image(
                        $mainAssets . '/img/progressbar.gif',
                        '',
                        array(
                            'style' => 'width: 100%; height: 20px;',
                        )
                    ),
                'buttons'    => array(
                    'yes' => Yii::t('YupeModule.yupe', 'Ok'),
                    'no'  => Yii::t('YupeModule.yupe', 'Cancel'),
                ),
                'messages'   => array(
                    'confirm_update'           => Yii::t(
                            'YupeModule.yupe',
                            'Do you really want to update configuration file?'
                        ),
                    'confirm_deactivate'       => Yii::t(
                            'YupeModule.yupe',
                            'Do you really want to disable module?'
                        ),
                    'confirm_activate'         => Yii::t('YupeModule.yupe', 'Do you really want to enable module?'),
                    'confirm_uninstall'        => Yii::t(
                            'YupeModule.yupe',
                            'Do you really want to delete module?'
                        ) . '<br />' . Yii::t('YupeModule.yupe', 'All module parameters will be deleted'),
                    'confirm_install'          => Yii::t(
                            'YupeModule.yupe',
                            'Do you really want to install module?'
                        ) . '<br />' . Yii::t('YupeModule.yupe', 'New module parameters will be added'),
                    'confirm_cacheFlush'       => Yii::t('YupeModule.yupe', 'Do you really want to clean cache?'),
                    'confirm_cacheAll'         => Yii::t('YupeModule.yupe', 'Do you really want to clean cache?'),
                    'confirm_assetsFlush'      => Yii::t('YupeModule.yupe', 'Do you really want to clean assets?'),
                    'confirm_cacheAssetsFlush' => Yii::t(
                            'YupeModule.yupe',
                            'Do you really want to clean cache and assets?'
                        ) . '<br />' . Yii::t('YupeModule.yupe', 'This process can take much time!'),
                    'unknown'                  => Yii::t('YupeModule.yupe', 'Unknown action was selected!'),
                )
            )
        ),
        CClientScript::POS_BEGIN
    );
    ?>
    <link rel="shortcut icon" href="<?php echo $mainAssets; ?>/img/favicon.ico"/>

</head>

<body>
<div id="overall-wrap">
    <!-- mainmenu -->
    <?php
    $this->widget('yupe\widgets\YAdminPanel'); ?>
    <div class="container-fluid" id="page"><?php echo $content; ?></div>
    <div id="footer-guard"></div>
</div>

<div class='notifications top-right' id="notifications"></div>

<footer>
    &copy; 2012 - <?php echo date('Y'); ?>
    <?php echo $this->yupe->poweredBy(); ?>
    <small class="label label-info"><?php echo $this->yupe->getVersion(); ?></small>
    <?php $this->widget('yupe\widgets\YPerformanceStatistic'); ?>
</footer>
</body>
</html>
