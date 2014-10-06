<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>

                    <?php
                    if(Yii::app()->user->isGuest === true){
                        echo '<li><a href="'.yii::app()->getBaseUrl().'/login">Войти</a></li>';
                        echo '<li><a href="'.yii::app()->getBaseUrl().'/registration">Регистрация</a></li>';
                    }
                     else {
                         echo '<li><a href="'.yii::app()->getBaseUrl().'/logout">Выйти</a></li>';
                         echo '<li><a href="'.yii::app()->getBaseUrl().'/logout">ЛК</a></li>';
                     }
                    ?>
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="<?php echo yii::app()->getBaseUrl();?>/"><img src="<?php echo Yii::app()->getTheme()->getAssetsUrl();?>/img/mPurpose-logo.png" alt="Художественная галерея Белый квадрат"></a></li>
                <li class="<?php echo Yii::app()->controller->id == 'hp'?'active':'';?>" >
                    <a href="<?php echo yii::app()->getBaseUrl();?>/">Главная</a>
                </li>
                <li class="<?php echo Yii::app()->controller->id == 'catalog'?'active':'';?>" >
                    <a href="<?php echo yii::app()->getBaseUrl();?>/catalog">Галерея</a>
                </li>
                <li class="<?php echo Yii::app()->controller->id == 'news'?'active':'';?>" >
                    <a href="<?php echo yii::app()->getBaseUrl();?>/news">Новости</a>
                </li>
                <li>
                    <!--<a href="<?php echo yii::app()->getBaseUrl();?>/catalog">Видео</a>-->
                </li>
                <li>
                    <a href="<?php echo yii::app()->getBaseUrl();?>/catalog">Покупателям</a>
                </li>
            </ul>
        </nav>
    </div>
</div>