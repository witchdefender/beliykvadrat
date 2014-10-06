<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 * */
?>
<?php $this->pageTitle = $news->title; ?>

<?php
//$this->breadcrumbs = array(
//    Yii::t('NewsModule.news', 'News') => array('/news/news/index/'),
//    CHtml::encode($news->title)
//);
?>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-4 blog-sidebar">
                <h4>Искать в новостях</h4>
                <form>
                    <div class="input-group">
                        <input class="form-control input-md" id="appendedInputButtons" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-md" type="button">Искать</button>
                        </span>
                    </div>
                </form>
                <h4>Последнии новости</h4>
                <ul class="recent-posts">
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Sed sit amet metus sit</a></li>
                    <li><a href="#">Nunc et diam volutpat tellus ultrices</a></li>
                    <li><a href="#">Quisque sollicitudin cursus felis</a></li>
                </ul>
                <h4>Категори</h4>
                <ul class="blog-categories">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Sed sit amet metus</a></li>
                    <li><a href="#">Nunc et diam </a></li>
                    <li><a href="#">Quisque</a></li>
                </ul>
                <h4>Архив</h4>
                <ul>
                    <li><a href="#">January 2013</a></li>
                    <li><a href="#">February 2013</a></li>
                    <li><a href="#">March 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3><?php echo CHtml::encode($news->title); ?></h3>
                    </div>
                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>30 JAN, 2013 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>
                    <div class="single-post-image">
                        <img src="<?php echo Yii::app()->getTheme()->getAssetsUrl(); ?>/img/blog-large.jpg" alt="Post Title">
                    </div>
                    <div class="single-post-content">
                        <?php echo $news->full_text; ?>
                    </div>
                    <!-- Comments -->
                        <!-- Comments Form -->
                        <h4>Оставьте коментарий</h4>
                        <div class="comment-form-wrapper">
                            <form class="">
                                <div class="form-group">
                                    <label for="comment-name"><i class="glyphicon glyphicon-user"></i> <b>Ваше имя</b></label>
                                    <input class="form-control" id="comment-name" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="comment-email"><i class="glyphicon glyphicon-envelope"></i> <b>Ваш Email</b></label>
                                    <input class="form-control" id="comment-email" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="comment-message"><i class="glyphicon glyphicon-comment"></i> <b>Ваше сообщение</b></label>
                                    <textarea class="form-control" rows="5" id="comment-message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-large pull-right">Отправить</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <!-- End Comment Form -->
                    </div>
                    <!-- End Comments -->
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>