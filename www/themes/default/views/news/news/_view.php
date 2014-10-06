<div class="col-md-4 col-sm-6">
    <div class="blog-post">
        <!-- Post Info -->
        <div class="post-info">
            <div class="post-date">
                <div class="date">30 JAN, 2013</div>
            </div>
            <div class="post-comments-count">
                <a href="page-blog-post-right-sidebar.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>11</a>
            </div>
        </div>
        <!-- End Post Info -->
        <!-- Post Image -->
        <a href="page-blog-post-right-sidebar.html"><img src="<?php echo Yii::app()->getTheme()->getAssetsUrl(); ?>/img/blog1.jpg" class="post-image" alt="Post Title"></a>
        <!-- End Post Image -->
        <!-- Post Title & Summary -->
        <div class="post-title">
            <h3><a href="page-blog-post-right-sidebar.html"><?php echo $data->title; ?></a></h3>
        </div>
        <div class="post-summary">
            <p><?php echo $data->short_text; ?></p>
        </div>
        <!-- End Post Title & Summary -->
        <div class="post-more">
            <a href="<?php echo yii::app()->getBaseUrl()?>/news/<?php echo $data->alias;?>" class="btn btn-small">Читать...</a>
        </div>
    </div>
</div>