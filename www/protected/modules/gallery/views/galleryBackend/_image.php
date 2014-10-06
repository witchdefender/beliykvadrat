<div class="col-sm-3">
    <div class="gallery-thumbnail">
        <?php echo CHtml::link(
            CHtml::image(
                $data->image->getUrl(190),
                $data->image->alt
            ),
            $data->image->getUrl(),
            array(
                'class' => 'gallery-image',
                'title' => $data->image->description,
                'rel'   => $data->gallery->id
            )
        ); ?>
        <?php if ($data->image->canChange()) : { ?>
            <div class="image-changes">
                <?php
                // Редактирование:
                echo CHtml::link(
                    '<i class="glyphicon glyphicon-pencil"></i>',
                    Yii::app()->createAbsoluteUrl(
                        'image/imageBackend/update',
                        array(
                            'id' => $data->image->id
                        )
                    )
                ); ?>
                <?php
                // Удаление:
                echo CHtml::link(
                    '<i class="glyphicon glyphicon-remove"></i>',
                    Yii::app()->createAbsoluteUrl(
                        'gallery/galleryBackend/deleteImage',
                        array(
                            'id' => $data->image->id
                        )
                    )
                ); ?>
            </div>
        <?php } endif; ?>
    </div>
</div>
