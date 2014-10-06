<?php
$this->pageTitle = Yii::t('CatalogModule.catalog', 'Products');
//$this->breadcrumbs = array(Yii::t('CatalogModule.catalog', 'Products'));
?>
<?php
global $i;
$i = 1;

?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Художественная галерея</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <?php
            $this->widget(
                    'zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                    )
            );
            ?>
        </div>
        <div class="pagination-wrapper ">
            <ul class="pagination pagination-lg">
                <li class="disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>