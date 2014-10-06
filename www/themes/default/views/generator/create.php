
<div class="container-fluid">

    <div class="row-fluid col-md-6">
        <br>
        <div class="row-fluid col-md-12">
            <h1>Онлайн генератор умений D&D 4e</h1>
        </div>
        <!--<div class="row-fluid col-md-12">-->
        <div id="panel" class="basic-login ">
            <form name="abl_stat" id="abl_stat">
                
            
            
            <div class="col-md-6">
                <input name="abl_name" type="text" placeholder="Название" class="form-control">
                <input name="abl_type_lvl" type="text" placeholder="Тип,Уровень" class="form-control">
                <input name="abl_desc" type="text" placeholder="Описание" class="form-control">
                <input name="abl_key_word" type="text" placeholder="Ключевые слова" class="form-control">
                <select name="abl_spell_type" class="form-control"><option>Неограниченный</option><option>На сцену</option><option>На день</option></select>
            </div>
            <div class="col-md-6">
                <select style="width: 220px;" name="abl_act_type" class="form-control"><option>Стандартное действие</option><option>Малое действие</option><option>Действие движения</option><option>Свободное действие</option></select>
                <select style="width: 220px;" name="abl_atack_type" class="form-control"><option>Рукопашноеоружие</option><option>Дальнобойный</option><option>Ближняя волна</option><option>Ближняявспышка</option></select>
                <input style="width: 100px;" name="abl_atack_range" class="form-control" type="text" placeholder="Дальность">
                Цель: <select style="width: 220px;" name="abl_target" class="form-control"><option>Все существа в волне</option><option>Вы или одно существо</option><option>Все существа во вспышке</option><option>Все враги во вспышке</option><option>Одно существо</option></select>
                Атака:<br> <select style="width: 120px; display: inline;" name="abl_abl" class="form-control"><option>Сила</option><option>Телосложение</option><option>Ловкость</option><option>Интелект</option><option>Мудрость</option><option>Харизма</option></select>
                Против <select style="width: 120px; display: inline;" name="abl_def" class="form-control"><option>Стойкости</option><option>Реакции</option><option>Воли</option><option>Кд</option></select><br>
                Попадание:<br>
                Промах:<br>
            </div>
            <input id="add_abl" class="btn btn-success" type="button" value="Add in spell book">
            </form>
        </div>
        
    </div>
    <div class="row-fluid col-md-6">
        <div id="template"></div>
    </div>
    <div class="row-fluid col-md-12">
        <h1>Spell book</h1>
    </div>
    <Div id="spell_book">
        <div class="row">
            <div class="col-md-12" id="spell_book">
                <div class="col-md-4 col-sm-6">
                    <table class="col-md-12" cellpadding="0px" cellspacing="0" border="0px">
                        <tr style="background: green; color: #fff;"><td>Волна грома</td><td align="right">Атака волшебника 1</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Вы создаёте щелчок звуковой энергии, бьющий из земли.</td></tr>
                        <tr><td colspan="100%"><b>Неограниченный *Звук, Инструмент, Магический</b></td></tr>
                        <tr><td>Стандартное действие  </td><td align="right">Ближня волна 3</td></tr>
                        <tr><td colspan="100%">Цель:Все существа в волне</td></tr>
                        <tr><td colspan="100%">Атака:Интеллект против Стойкости</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Попадание:Урон звуком 1к6 + модификатор Интеллекта и вы толкаете цель на количество клеток, равное вашему модификатору Мудрости.</td></tr>
                        <tr><td colspan="100%">На  21  уровне  урон  увеличивается  до  2к6  +  модификатор Интеллекта.</td></tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-6">
                    <table class="col-md-12" cellpadding="0px" cellspacing="0" border="0px">
                        <tr style="background: green; color: #fff;"><td>Волна грома</td><td align="right">Атака волшебника 1</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Вы создаёте щелчок звуковой энергии, бьющий из земли.</td></tr>
                        <tr><td colspan="100%"><b>Неограниченный *Звук, Инструмент, Магический</b></td></tr>
                        <tr><td>Стандартное действие  </td><td align="right">Ближня волна 3</td></tr>
                        <tr><td colspan="100%">Цель:Все существа в волне</td></tr>
                        <tr><td colspan="100%">Атака:Интеллект против Стойкости</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Попадание:Урон звуком 1к6 + модификатор Интеллекта и вы толкаете цель на количество клеток, равное вашему модификатору Мудрости.</td></tr>
                        <tr><td colspan="100%">На  21  уровне  урон  увеличивается  до  2к6  +  модификатор Интеллекта.</td></tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-6">
                    <table class="col-md-12" cellpadding="0px" cellspacing="0" border="0px">
                        <tr style="background: green; color: #fff;"><td>Волна грома</td><td align="right">Атака волшебника 1</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Вы создаёте щелчок звуковой энергии, бьющий из земли.</td></tr>
                        <tr><td colspan="100%"><b>Неограниченный *Звук, Инструмент, Магический</b></td></tr>
                        <tr><td>Стандартное действие  </td><td align="right">Ближня волна 3</td></tr>
                        <tr><td colspan="100%">Цель:Все существа в волне</td></tr>
                        <tr><td colspan="100%">Атака:Интеллект против Стойкости</td></tr>
                        <tr style="background: #ccc;"><td colspan="100%">Попадание:Урон звуком 1к6 + модификатор Интеллекта и вы толкаете цель на количество клеток, равное вашему модификатору Мудрости.</td></tr>
                        <tr><td colspan="100%">На  21  уровне  урон  увеличивается  до  2к6  +  модификатор Интеллекта.</td></tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
Yii::app()->clientScript->registerScript('Add_abl', "
$('#add_abl').click(function(){
    var data = $('#abl_stat').serialize();
//    console.log(data);
        $.ajax({
          type: 'GET',
          url: '".yii::app()->getBaseUrl()."/generator/renderabl',
          data: data,
          success: function(data){
//            alert(data);
            $('#spell_book').html(data);
          }
        });
});
");
Yii::app()->clientScript->registerScript('Template', "
$('input').change(function(){
    var data = $('#abl_stat').serialize();
//    console.log(data);
        $.ajax({
          type: 'GET',
          url: '".yii::app()->getBaseUrl()."/generator/renderabl',
          data: data,
          success: function(data){
//            alert(data);
            $('#template').html(data);
          }
        });
});
");
