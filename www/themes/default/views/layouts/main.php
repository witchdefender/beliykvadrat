<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head prefix="og: http://ogp.me/ns#
    fb: http://ogp.me/ns/fb#
    article: http://ogp.me/ns/article#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta charset="<?php echo Yii::app()->charset; ?>"/>
    <meta name="keywords" content="<?php echo CHtml::encode($this->keywords); ?>"/>
    <meta name="description" content="<?php echo CHtml::encode($this->description); ?>"/>
    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo $this->description; ?>"/>
    <?php
    
ini_set('display_errors','On'); 
error_reporting(E_ALL); 

    $mainAssets = Yii::app()->getTheme()->getAssetsUrl();

    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/yupe.css');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/comments.js');
    //
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/bootstrap.min.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/icomoon-social.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/leaflet.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/main_theme.css');
    
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/modernizr-2.6.2-respond-1.1.0.min.js');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/font.css');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?php echo Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?php echo Yii::app()->getRequest()->csrfToken;?>';
    </script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!-- container -->
<!--<div class='container'>-->
    <!--<div class="row">-->
        <!-- content -->
        <!--<section class="col-sm-9 content">-->
        <?php $this->renderPartial('//layouts/_top_menu'); ?>
            <?php echo $content; ?>
        <!--</section>-->
    <!--</div>-->
    <!-- footer -->
    <?php $this->renderPartial('//layouts/_footer'); ?>
    <!-- footer end -->
<!--</div>-->

<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.min.js');
?>
<script>window.jQuery || document.write('<script src="<?php echo $mainAssets;?>/js/jquery-1.9.1.min.js"><\/script>')</script>
<?php
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/bootstrap.min.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.fitvids.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.sequence-min.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/leaflet.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.bxslider.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/main-menu.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/template.js');
?>
</body>
</html>
