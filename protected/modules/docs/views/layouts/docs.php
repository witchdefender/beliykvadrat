<?php
/**
 * Отображение для layouts/docs:
 *
 * @category YupeLayout
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->getLanguage(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode(Yii::app()->name); ?> <?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
    $docsAssets = Yii::app()->getAssetManager()->publish(
        Yii::getPathOfAlias('application.modules.docs.views.assets')
    );
    $mainAssets = Yii::app()->getAssetManager()->publish(
        Yii::getPathOfAlias('application.modules.yupe.views.assets')
    );
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/styles.css');

    if (($langs = $this->yupe->getLanguageSelectorArray()) != array()) {
        Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/flags.css');
    }

    ?>
</head>
<body>
<div id="overall-wrap">
    <!-- mainmenu -->
    <?php
    $this->widget(
        'bootstrap.widgets.TbNavbar',
        array(
            'fixed'    => 'top',
            'fluid'    => true,
            'collapse' => true,
            'brand'    => CHtml::image(
                    Yii::app()->getModule('yupe')->getLogo(),
                    Yii::t('DocsModule.docs', 'Yupe! Documentation'),
                    array(
                        'width'  => '38',
                        'height' => '38',
                        'title'  => Yii::t('DocsModule.docs', 'Yupe! Documentation'),
                    )
                ),
            'brandUrl' => CHtml::normalizeUrl(array("index")),
            'items'    => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'type'  => 'navbar',
                    'items' => $this->module->getArticles(),
                ),
                array(
                    'class'       => 'bootstrap.widgets.TbMenu',
                    'type'        => 'navbar',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'encodeLabel' => false,
                    'items'       => array_merge(
                        array(
                            array(
                                'icon'        => 'glyphicon glyphicon-home',
                                'label'       => Yii::t('DocsModule.docs', 'Go home'),
                                'linkOptions' => array('target' => '_blank'),
                                'url'         => array('/' . Yii::app()->defaultController . '/index/'),
                            ),
                            array(
                                'label' => $this->yupe->getVersion(),
                                'icon'  => 'glyphicon glyphicon-thumbs-up',
                                'url'   => 'http://yupe.ru/?from=doc-navbar'
                            ),
                        ),
                        $this->yupe->getLanguageSelectorArray()
                    ),
                ),
            ),
        )
    );
    ?>
    <!-- /mainmenu -->
    <!-- content -->
    <div class="container-fluid">
        <?php echo $content; ?>
    </div>
    <!-- /content -->
</div>
<footer>
    Copyright &copy; 2012-<?php echo date('Y'); ?>
    <?php echo $this->yupe->poweredBy(); ?>
    <small class="label label-info"><?php echo $this->yupe->getVersion(); ?></small>
    <br/>
    <a href="http://amylabs.ru?from=yupe-docs">
        <?php echo Yii::t('DocsModule.docs', 'Development and support'); ?></a> - <a
        href="http://amylabs.ru?from=yupe-docs">amyLabs
    </a>
    <br/>
    <a href="http://api.yupe.ru" target="_blank">API</a>
    <br/>
    <?php echo Yii::powered(); ?>
</footer>
<?php $this->widget(
    "application.modules.contentblock.widgets.ContentBlockWidget",
    array("code" => "DISQUS_JS", "silent" => true)
); ?>

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location.href;
        $('.navbar .nav li').removeClass('active');
        $('.nav a').filter(function () {
            return this.getAttribute("href") != '#' && this.href == url;
        }).parents('li').addClass('active');
    });
</script>
</body>
</html>
