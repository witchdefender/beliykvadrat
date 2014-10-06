<?php
//
$this->pageTitle = Yii::t('NewsModule.news', 'News');
//$this->breadcrumbs = array(Yii::t('NewsModule.news', 'News'));
//
?>
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo Yii::t('NewsModule.news', 'News'); ?></h1>
            </div>
        </div>
    </div>
</div>

<!-- Posts List -->
<div class="section blog-posts-wrapper">
    <div class="container">
        <div class="row">
            <?php
            $i = 1;
            foreach ($news as $new){
                $this->renderPartial('_view', array('data' => $new));
                if($i == 3){
                    echo '</div><div class="row">'; $i=1;
                }
                $i ++;
            }
//            $this->widget(
//                    'zii.widgets.CListView', array(
//                'dataProvider' => $dataProvider,
//                'itemView' => '_view',
//                    )
//            );
            ?>
        </div>
    </div>
</div>