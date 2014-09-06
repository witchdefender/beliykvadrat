<?php
/**
 * Файл представления menu/index:
 *
 * @category YupeViews
 * @package  yupe
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.1
 * @link     http://yupe.ru
 *
 **/
$this->breadcrumbs = array(
    Yii::t('MenuModule.menu', 'Menu') => array('/menu/menuBackend/index'),
    Yii::t('MenuModule.menu', 'Manage')
);

$this->pageTitle = Yii::t('MenuModule.menu', 'Menu - manage');

$this->menu = array(
    array(
        'label' => Yii::t('MenuModule.menu', 'Menu'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('MenuModule.menu', 'Manage menu'),
                'url'   => array('/menu/menuBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('MenuModule.menu', 'Create menu'),
                'url'   => array('/menu/menuBackend/create')
            ),
        )
    ),
    array(
        'label' => Yii::t('MenuModule.menu', 'Menu items'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('MenuModule.menu', 'Manage menu items'),
                'url'   => array('/menu/menuitemBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('MenuModule.menu', 'Create menu item'),
                'url'   => array('/menu/menuitemBackend/create')
            ),
        )
    ),
);
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('MenuModule.menu', 'Menu'); ?>
        <small><?php echo Yii::t('MenuModule.menu', 'manage'); ?></small>
    </h1>
</div>

<p>
    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="collapse" data-target="#search-toggle">
        <i class="glyphicon glyphicon-search">&nbsp;</i>
        <?php echo Yii::t('MenuModule.menu', 'Find menu'); ?>
        <span class="caret">&nbsp;</span>
    </a>
</p>

<div id="search-toggle" class="collapse out search-form">
    <?php
    Yii::app()->clientScript->registerScript(
        'search',
        "
    $('.search-form form').submit(function () {
        $.fn.yiiGridView.update('menu-grid', {
            data: $(this).serialize()
        });

        return false;
    });"
    );
    $this->renderPartial('_search', array('model' => $model));
    ?>
</div>

<p><?php echo Yii::t('MenuModule.menu', 'This section describes Menu Management'); ?></p>

<?php $this->widget(
    'yupe\widgets\CustomGridView',
    array(
        'id'           => 'menu-grid',
        'dataProvider' => $model->search(),
        'filter'       => $model,
        'columns'      => array(
            array(
                'class'    => 'bootstrap.widgets.TbEditableColumn',
                'name'     => 'name',
                'editable' => array(
                    'url'    => $this->createUrl('/menu/menuBackend/inline'),
                    'mode'   => 'inline',
                    'params' => array(
                        Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken
                    )
                ),
                'filter'   => CHtml::activeTextField($model, 'name', array('class' => 'form-control')),
            ),
            array(
                'class'    => 'bootstrap.widgets.TbEditableColumn',
                'name'     => 'code',
                'editable' => array(
                    'url'    => $this->createUrl('/menu/menuBackend/inline'),
                    'mode'   => 'inline',
                    'params' => array(
                        Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken
                    )
                ),
                'filter'   => CHtml::activeTextField($model, 'code', array('class' => 'form-control')),
            ),
            array(
                'class'    => 'bootstrap.widgets.TbEditableColumn',
                'name'     => 'description',
                'editable' => array(
                    'url'        => $this->createUrl('/menu/menuBackend/inline'),
                    'mode'       => 'popup',
                    'type'       => 'textarea',
                    'inputclass' => 'input-large',
                    'title'      => Yii::t(
                            'MenuModule.menu',
                            'Select {field}',
                            array('{field}' => mb_strtolower($model->getAttributeLabel('description')))
                        ),
                    'params'     => array(
                        Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken
                    )
                ),
                'filter'   => CHtml::activeTextField($model, 'description', array('class' => 'form-control')),
            ),
            array(
                'class'    => 'bootstrap.widgets.TbEditableColumn',
                'editable' => array(
                    'url'    => $this->createUrl('/menu/menuBackend/inline'),
                    'mode'   => 'inline',
                    'type'   => 'select',
                    'title'  => Yii::t(
                            'MenuModule.menu',
                            'Select {field}',
                            array('{field}' => mb_strtolower($model->getAttributeLabel('status')))
                        ),
                    'source' => $model->getStatusList(),
                    'params' => array(
                        Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken
                    )
                ),
                'name'     => 'status',
                'type'     => 'raw',
                'value'    => '$data->getStatus()',
                'filter'   => CHtml::activeDropDownList(
                        $model,
                        'status',
                        $model->getStatusList(),
                        array('class' => 'form-control', 'empty' => '')
                    ),
            ),
            array(
                'header' => Yii::t('MenuModule.menu', 'Items'),
                'type'   => 'raw',
                'value'  => 'CHtml::link(count($data->menuItems), Yii::app()->createUrl("/menu/menuitemBackend/index", array("MenuItem[menu_id]" => $data->id)))',
            ),
            array(
                'class'    => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{view}{update}{delete}{add}',
                'buttons'  => array(
                    'add' => array(
                        'label'   => false,
                        'url'     => 'Yii::app()->createUrl("/menu/menuitemBackend/create", array("mid" => $data->id))',
                        'options' => array(
                            'class' => 'icon-plus-sign',
                            'title' => Yii::t('MenuModule.menu', 'Create menu item'),
                        ),
                    ),
                ),
            ),
        ),
    )
); ?>
