<div class="row">
    <div class="col-sm-12">
        <h4><strong><?php echo CHtml::link(
                    CHtml::encode($data->title),
                    array('/blog/post/show/', 'slug' => CHtml::encode($data->slug))
                ); ?></strong></h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <p><?php echo strip_tags($data->getQuote()); ?></p>
        <!--<p><?php echo CHtml::link(
            Yii::t('HomepageModule.homepage', 'read...'),
            array('/blog/post/show/', 'slug' => CHtml::encode($data->slug)),
            array('class' => 'btn')
        ); ?></p>-->
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <p></p>

        <p>
            <i class="glyphicon glyphicon-user"></i> <?php echo CHtml::link(
                $data->createUser->nick_name,
                array('/user/people/userInfo', 'username' => CHtml::encode($data->createUser->nick_name))
            ); ?>
            | <i class="glyphicon glyphicon-pencil"></i> <?php echo CHtml::link(
                CHtml::encode($data->blog->name),
                array('/blog/blog/show/', 'slug' => CHtml::encode($data->blog->slug))
            ); ?>
            | <i class="glyphicon glyphicon-calendar"></i> <?php echo Yii::app()->getDateFormatter()->formatDateTime(
                $data->publish_date,
                "short",
                "short"
            ); ?>
            | <i class="glyphicon glyphicon-comment"></i>  <?php echo CHtml::link(
                ($data->commentsCount > 0) ? $data->commentsCount - 1 : 0,
                array('/blog/post/show/', 'slug' => CHtml::encode($data->slug), '#' => 'comments')
            ); ?>
            | <i class="glyphicon glyphicon-tags"></i>
            <?php if (($tags = $data->getTags()) != array()) : ?>
                <?php foreach ($tags as $tag): ?>
                    <?php $tag = CHtml::encode($tag); ?>
                    &nbsp;
                    <span class="label label-info">
                        <?php echo CHtml::link($tag, array('/posts/', 'tag' => $tag)) . ' ' ?>
                    </span>
                <?php endforeach ?>
            <?php endif; ?>
        </p>
    </div>
</div>
<hr>
