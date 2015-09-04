<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><? $APPLICATION->ShowTitle();?></title>
	<? $APPLICATION->ShowHead();?>
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style.css"/>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="panel">
	<? $APPLICATION->ShowPanel();?>
	</div>
    <!--Шапака-->
<div class="modal fade modal-blue" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <span class="back_call_text">Обратный звонок</span>
                <span class="text_call">Убедитесь, что имеете дело с настоящими профессионалами</span>
                <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset- col-sm-offset-1" style="margin-top: 10px">
                    <form id="back_call_form">
                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон" name="phone" required>
                        </div>

                        <div class="error2"></div>
                        <button type="submit" class="btn btn-lazur center hvr-fade">Отправить</button>
                    </form>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-red" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <span class="back_call_text">Бесплатная консультация</span>
                <span class="text_call">Убедитесь, что имеете дело с настоящими профессионалами</span>
                <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-xs-offset- col-sm-offset-1" style="margin-top: 10px">
                    <form id="consultation_form">
                        <div class="form-group">

                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ваше имя" >
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Ваш телефон" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Ваш вопрос"></textarea>
                        </div>
                        <div class="error"></div>
                        <button type="submit" class="btn btn-lazur-red center hvr-fade-red">Отправить</button>
                    </form>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>
<?
if ($APPLICATION->GetCurPage(true) == "/index.php"){?>
<header>
	<div class="container ">
		<div class="row">


				<div class="col-lg-4 col-xs-12 col-md-4 col-sm-12">
					<span class="phone_label">Генеральный директор:</span>
					<span class="phone_number">+7(495)960-87-45</span>
				</div>
            <div class="col-lg-3 col-lg-offset-1 col-md-offset-1 col-xs-offset-0 col-sm-offset-0 col-sm-12 col-md-3 col-xs-12 logo">
               <a href="/"> <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="partner logo"></a>


            </div>
				<div class="col-lg-3  pull-right col-xs-12 col-md-3 col-sm-12 seccond_number">
					<span class="phone_label">Главный юрисконсульт:</span>
					<span class="phone_number">+7(929)996-67-04</span>
				</div>

		</div>
	</div>

</header>
<?php }else{?>
    <header>
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-sm-2 col-md-3 col-xs-12 logo">
                    <a href="/"> <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="partner logo"></a>

                </div>
                <div class="col-lg-6 col-xs-12 col-md-6 col-sm-7 ">
                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6">
                        <span class="phone_label">Генеральный директор:</span>
                        <span class="phone_number">+7(495)960-87-45</span>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-md-6 col-sm-6 seccond_number">
                        <span class="phone_label">Главный юрисконсульт:</span>
                        <span class="phone_number">+7(929)996-67-04</span>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-md-3 col-sm-3 ">
                    <button class="btn btn-danger red_btn hvr-fade-red" data-toggle="modal" data-target="#myModal2">Бесплатная консультация</button>
                </div>
            </div>
        </div>

    </header>
<?php }?>
<!--Шапака-->
<!--меню-->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu", 
	array(
		"COMPONENT_TEMPLATE" => "header_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

<!--меню-->
	
	<div class="page">

