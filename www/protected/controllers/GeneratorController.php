<?php
/**
 * Дефолтный контроллер сайта:
 *
 * @category YupeController
 * @package  yupe.controllers
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.5.3 (dev)
 * @link     http://yupe.ru
 *
 **/
namespace application\controllers;

use application\components\Controller;

class GeneratorController extends Controller
{
    const POST_PER_PAGE = 5;

    /**
     * Отображение главной страницы
     *
     * @return void
     */
    public function actionCreate()
    {
        $this->render('create');
    }
    public function actionRenderAbl()
    {
        if(isset($_GET) && !empty($_GET)){
            if($_GET['abl_spell_type'])
            $data = $_GET;
            $str = '<div class="col-md-4 col-sm-6"><table class="col-md-12" cellpadding="0px" cellspacing="0" border="0px">';
            $str .= '<tr style="background: green; color: #fff;"><td>'.$data['abl_name'].'</td><td align="right">'.$data['abl_type_lvl'].'</td></tr>';
            $str .= '<tr style="background: #ccc;"><td colspan="100%">'.$data['abl_desc'].'</td></tr>';
            $str .= '<tr><td colspan="100%"><b>'.$data['abl_spell_type'].' *'.$data['abl_key_word'].'</b></td></tr>';
            $str .= '<tr><td>'.$data['abl_act_type'].'</td><td>'.$data['abl_atack_type'].' '.$data['abl_atack_range'].'</td></tr>';
            $str .= '<tr><td colspan="100%"><b>Цель: </b>'.$data['abl_target'].'</td></tr>';
            $str .= '<tr><td colspan="100%"><b>Атака: </b>'.$data['abl_abl'].' против '.$data['abl_def'].'</td></tr>';
            
            $str .= '</table></div>';
            echo $str;
        }
//        print_r($_GET);
    }
    /**
     * Отображение для ошибок:
     *
     * @return void
     */
    public function actionError()
    {
        $error = \Yii::app()->errorHandler->error;

        if (empty($error) || !isset($error['code']) || !(isset($error['message']) || isset($error['msg']))) {
            $this->redirect(array('index'));
        }

        if (!\Yii::app()->getRequest()->getIsAjaxRequest()) {

            $this->render(
                'error',
                array(
                    'error' => $error
                )
            );
        }
    }

}
