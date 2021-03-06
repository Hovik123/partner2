<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><!-- Modal --> <!--банер-->
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 fon padding_left_right_none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6 hidden-xs hidden-sm men">
                <img class="img-responsive" src="/bitrix/templates/partner/img/men.png">
            </div>
            <h3 class="col-lg-6 col-sm-6 col-xs-12 col-md-6 banners padding_left_right_none">
                <span>Мы работаем -Вы отдыхаете</span>
                <span class="banner-span pull-right">Организация любой деятельности — коммерческой, бюджетной или некоммерческой —<br>
			 невозможна без юридического сопровождения.</span>
            </h3>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 pull-right padding_left_right_none buttons">
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 padding_left_none button">
                    <button class="btn btn-primary fullwidth transparent_btn hvr-fade-white" data-toggle="modal"
                            data-target="#myModal">Заказать обратный звонок
                    </button>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 padding_right_none button">
                    <button class="btn btn-danger fullwidth red_btn hvr-fade-red" data-toggle="modal" data-target="#myModal2">
                        Бесплатная консультация
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--банер--> <!--Сервисы-->
<section class="services">
    <div class="container">
        <div class="row">
            <!-- Nav tabs -->
            <div
                class="col-lg-6 col-md-8 col-xs-12 col-sm-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-0 col-xs-offset-0 tabs">
                <ul class="nav nav-tabs nav-tabs-servicess" role="tablist">
                    <li class="active" role="presentation"><a role="tab" aria-controls="home" href="#home"
                                                              data-toggle="tab" class="hvr-fade">Юридическим лицам</a>
                    </li>
                    <li role="presentation"><a role="tab" aria-controls="profile" href="#profile" data-toggle="tab"
                                               class="hvr-fade">физическим лицам</a></li>
                </ul>
                <!-- Tab panes -->
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news",
                    "services",
                    Array(
                        "COMPONENT_TEMPLATE" => "services",
                        "IBLOCK_TYPE" => "servicess",
                        "IBLOCK_ID" => "1",
                        "NEWS_COUNT" => "9",
                        "USE_SEARCH" => "N",
                        "USE_RSS" => "N",
                        "USE_RATING" => "N",
                        "USE_CATEGORIES" => "N",
                        "USE_FILTER" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "CHECK_DATES" => "Y",
                        "SEF_MODE" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_TITLE" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "USE_PERMISSIONS" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => array(0 => "", 1 => "",),
                        "LIST_PROPERTY_CODE" => array(0 => "urfizSelect", 1 => "",),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "DISPLAY_NAME" => "Y",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "BROWSER_TITLE" => "-",
                        "DETAIL_SET_CANONICAL_URL" => "N",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_FIELD_CODE" => array(0 => "", 1 => "",),
                        "DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "",),
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_SHOW_ALL" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "SEF_FOLDER" => "./yuridicheskie-uslugi/",
                        "SEF_URL_TEMPLATES" => array("news" => "./yuridicheskie-uslugi/", "section" => "", "detail" => "#ELEMENT_CODE#/",),
                        "VARIABLE_ALIASES" => Array(),
                        "VARIABLE_ALIASES" => Array()
                    )
                ); ?>
            </div>
        </div>
    </div>
</section>
<!--Сервисы--> <!--успешных дел-->
<section class="del">
    <div class="container">
        <div class="row">
            <span class="title-del">Более 500 успешных дел</span> <span class="subtitle-del">Убедитесь, что имеете дело с настоящими профессионалами</span>

            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news",
                    "dela_template",
                    array(
                        "COMPONENT_TEMPLATE" => "dela_template",
                        "IBLOCK_TYPE" => "works",
                        "IBLOCK_ID" => "2",
                        "NEWS_COUNT" => "4",
                        "USE_SEARCH" => "N",
                        "USE_RSS" => "N",
                        "USE_RATING" => "N",
                        "USE_CATEGORIES" => "N",
                        "USE_FILTER" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "CHECK_DATES" => "Y",
                        "SEF_MODE" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_TITLE" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "USE_PERMISSIONS" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "LIST_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "download_file_pdf",
                            2 => "files_notDownload",
                        ),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "DISPLAY_NAME" => "Y",
                        "META_KEYWORDS" => "-",
                        "META_DESCRIPTION" => "-",
                        "BROWSER_TITLE" => "-",
                        "DETAIL_SET_CANONICAL_URL" => "N",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "DETAIL_PROPERTY_CODE" => array(
                            0 => "",
                            1 => "download_file_pdf",
                            2 => "files_notDownload",
                        ),
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_SHOW_ALL" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "SEF_FOLDER" => "./dela/",
                        "SEF_URL_TEMPLATES" => array(
                            "news" => "",
                            "section" => "/dela/",
                            "detail" => "#ELEMENT_CODE#/",
                        )
                    ),
                    false
                ); ?>


                <a href="/dela">
                    <button class="btn btn-lazur center hvr-fade">Все дела</button>
                </a>
            </div>
        </div>
    </div>
</section>
<!--успешных дел--> <!--News-->
<section class="news">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"home_news", 
	array(
		"COMPONENT_TEMPLATE" => "home_news",
		"IBLOCK_TYPE" => "News",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "100",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "news_type",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "news_type",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Новости",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_FOLDER" => "./novosti",
		"SEF_URL_TEMPLATES" => array(
			"news" => "./novosti",
			"section" => "",
			"detail" => "/#ELEMENT_CODE#/",
		)
	),
	false
); ?>
    </div>
</section>
<!--News-->
<section class="company">
    <div class="container">
        <div class="row">
            <span class="about_company_title">Кратко о компании “Партнер”</span> <span class="about_company_subtitle">Убедитесь, что имеете дело с настоящими профессионалами</span>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "standard.php",
                    "PATH" => "/include/about_home.php"
                )
            ); ?>
        </div>
    </div>
</section> <br><?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>