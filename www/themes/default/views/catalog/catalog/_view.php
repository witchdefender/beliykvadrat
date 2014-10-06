<?php
if(!isset($i)){
    global  $i;
    $i=1;
}

    if($i == 3){
        echo '</div><div class="row">'; $i=1;
    }
    $i ++;
?>
<div class="col-sm-4">
    <!-- Product -->
    <div class="shop-item">
        <!-- Product Image -->
        <div class="image">
            <a href="<?php echo Yii::app()->createUrl('catalog/catalog/show/', $params = array('name'=>$data->alias));?>"><img src="<?php echo $data->getImageUrl(600,360,'inset')?>" alt="<?php echo $data->name;?>"></a>
        </div>
        <!-- Product Title -->
        <div class="title">
            <h3><a href="<?php echo Yii::app()->createUrl('catalog/catalog/show/', $params = array('name'=>$data->alias));?>"><?php echo $data->name;?></a></h3>
        </div>
        <!-- Product Available Colors-->
<!--        <div class="colors">
            <span class="color-white"></span>
            <span class="color-black"></span>
            <span class="color-blue"></span>
            <span class="color-orange"></span>
            <span class="color-green"></span>
        </div>-->
        <!-- Product Price-->
        <div class="price">
            <span class="price-was"><?php echo round($data->price,1);?></span> <?php echo round($data->price,1);?>руб.
        </div>
        <!-- Product Description-->
        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
        </div>
        <!-- Add to Cart Button -->
        <div class="actions">
            <a href="#" class="btn"><i class="icon-shopping-cart icon-white"></i> В корзину</a>
        </div>
    </div>
    <!-- End Product -->
</div>