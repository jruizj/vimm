<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="mainmenu">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'id' => 'mainMenuLeft',
                'htmlOptions' => array('class' => 'mainMenu'),
                'items' => array(
                    array('label' => 'Inicio', 'url' => array('/site/index'), 'itemOptions' => array('id' => 'inicio')),
                    array('label' => 'Mapa', 'url' => array('/site/mapa'), 'itemOptions' => array('id' => 'mapa')),
                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
                ),
            ));
            ?>
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'id' => 'mainMenuRight',
                'htmlOptions' => array('class' => 'mainMenu'),
                'items' => array(
                    array('label' => 'Conectar', 'url' => array('/site/login'), 'itemOptions' => array('id' => 'login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Registrarse', 'url' => array('/site/register'), 'itemOptions' => array('id' => 'register'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Notificaciones', 'url' => array('/site/register'), 'itemOptions' => array('id' => 'notifications'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => Yii::app()->user->name, 'url' => array('/site/logout'), 'itemOptions' => array('id' => 'profile'), 'visible' => !Yii::app()->user->isGuest)
                ),
            ));
            ?>
        </div><!-- mainmenu -->
        <div class="container" id="page">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by VImm.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
