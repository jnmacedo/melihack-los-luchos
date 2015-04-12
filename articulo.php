<?php

require 'DatabaseConnection.php';
require 'import/meli.php';
session_start();

$item_id = $_GET['item_id'];

$db = DatabaseConnection::connect();
DatabaseConnection::loadItemQuestions($db, $item_id);
$pregsVendedor = DatabaseConnection::selectPreguntasVendedor($db);
//$pregsMeli = DatabaseConnection::selectPreguntasMeli($db,$item_id);
$keywords = DatabaseConnection::selectKeywords($db, $item_id);

$json_preguntas_vendedor = json_encode($pregsVendedor);
$json_keywords = json_encode($keywords);

?>
<html class="">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# meli-uy: http://ogp.me/ns/fb/meli-uy# product: http://ogp.me/ns/product#">
        <script id="_jqjsp3" async="" src="//notifications-3.mercadolibre.com/jms/mlu/listen?notified=1428735027964&amp;callback=_jqjsp&amp;_1428786388180=">
        </script>

        <script async="" src="//connect.facebook.net/en_US/fbds.js">
        </script>
        
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="palabrasclave.js"></script> 
        <script type="text/javascript" src="question.js"></script>

        <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-SHV3"></script>
        <script id="facebook-jssdk" async="" src="//connect.facebook.net/es_LA/all.js"></script>
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <iframe src="javascript:false" id="GoogleAnalyticsIframe" style="width: 0px; height: 0px; border: 0px; position: absolute;">
    </iframe>
    <iframe src="javascript:false" style="width: 0px; height: 0px; border: 0px; position: absolute;">
    </iframe>
    <iframe src="javascript:false" id="notification-init-frame" style="width: 0px; height: 0px; border: 0px; position: absolute;">
    </iframe>
    <script src="http://vip.mlstatic.com/js/V3-components-all-MLU__vdba83aadb90.gz.js">
    </script>
    <script src="http://static.mlstatic.com/org-img/ch/ui/0.13.5/chico-jquery.min.js">
    </script>

    <style type="text/css">
    </style>
    
    <link rel="stylesheet" type="text/css" href="articulo.css">
    <!-- 'false' -->
    <link rel="stylesheet" type="text/css" href="http://static.mlstatic.com/org-img/vip/chico-vip.min.css?v=2.1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="http://static.mlstatic.com/org-img/ui/ml/favicon/favicon-1.0.0.ico">
    <link rel="apple-touch-icon" href="http://static.mlstatic.com/org-img/ui/ml/apple-touch-icon/1.0.0/60x60-precomposed.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://static.mlstatic.com/org-img/ui/ml/apple-touch-icon/1.0.0/76x76-precomposed.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://static.mlstatic.com/org-img/ui/ml/apple-touch-icon/1.0.0/120x120-precomposed.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://static.mlstatic.com/org-img/ui/ml/apple-touch-icon/1.0.0/152x152-precomposed.png">
    <link rel="alternate" href="android-app://com.mercadolibre/meli/item?id=MLU425198261">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    -->
    <meta http-equiv="cleartype" content="on">
    <meta property="og:image" content="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21904-MLU20219813051_122014-O.jpg">
    <meta property="fb:app_id" content="203124886459321">
    <meta property="og:title" content="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz - U$S 119,90">
    <meta property="og:type" content="meli-uy:product">
    <meta property="og:url" content="http://articulo.mercadolibre.com.uy/MLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM">
    <meta name="description" content="Cómpralo en MercadoLibre a U$S 119,90. Encuentra más productos de Electrónica, Audio y Video, GPS, Equipos, Navegadores para Autos, Otros.">
    <title>
        Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz - U$S 119,90 en MercadoLibre</title>
    <meta content="text/html; charset=UTF-8" name="Content-Type">
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="MercadoLibre">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz">
    <meta name="twitter:description" content="Encuentra más productos de Electrónica, Audio y Video, GPS, Equipos, Navegadores para Autos, Otros en MercadoLibre.">
    <meta name="twitter:image" content="http://mlu-s2-p.mlstatic.com/21904-MLU20219813051_122014-O.jpg">
    <meta name="twitter:data1" content="U$S 119,90">
    <meta name="twitter:label1" content="Precio">
    <meta name="twitter:data2" content="Nuevo">
    <meta name="twitter:label2" content="Condici&amp;oacute;n del producto">
    <meta name="twitter:app:name:iphone" content="MercadoLibre">
    <meta name="twitter:app:id:iphone" content="463624852">
    <meta name="twitter:app:url:iphone" content="meli://item?id=MLU425198261">
    <meta name="twitter:app:name:googleplay" content="MercadoLibre">
    <meta name="twitter:app:id:googleplay" content="com.mercadolibre">
    <meta name="twitter:app:url:googleplay" content="meli://item?id=MLU425198261">
    <meta name="twitter:domain" content="mercadolibre.com.uy">
    <meta property="al:iphone:url" name="al:ios:url" content="meli://item?id=MLU425198261">
    <meta property="al:iphone:app_name" name="al:ios:app_name" content="Mercadolibre">
    <meta property="al:iphone:app_store_id" name="al:ios:app_store_id" content="463624852">
    <meta property="al:android:url" name="al:android:url" content="meli://item?id=MLU425198261">
    <meta property="al:android:app_name" name="al:android:app_name" content="Pinterest">
    <meta property="al:android:package" name="al:android:package" content="com.mercadolibre">
    <link rel="stylesheet" type="text/css" href="v3core__vdba83aadb90.gz.css">
    <script>
        var makeBid = false;</script>
    <style type="text/css">
    </style>
    <!-- The HTML5 Shiv (https://github.com/aFarkas/html5shiv) -->
    <!--[if lt IE 9]>
    <script src="http://static.mlstatic.com/org-img/ch/vendor/html5shiv/html5shiv-3.7.0.js">
   </script>
    <![endif]-->
    <script type="text/javascript">
        /*! lazy.js v0.0.1 Released under the MIT license. */!function (a) {
            "use strict";
            function b(a) {
                a = a || document.querySelectorAll("[data-lazy]");
                var b, c, d, e = 0;
                for (void 0 === a.length && (a = [a]), b = a.length, e; b >
                        e; e += 1)
                    c = a[e], d = c.getAttribute("data-lazy"), "" !== d && (c["LINK" !== c.tagName ? "src" : "href"] = d), c.removeAttribute("data-lazy")
            }
            a.lazy = b
        }(this);</script>
    <style>
        img.chromoji { width:1em !important; height:1em !important; }.chromoji-font, #chromoji-font { font-size:1em !important; }</style>
    <style type="text/css">
        .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>
        div{overflow:hidden}.fb_link img{border:none}
        .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>
        span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
        .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style>
</head>
<body class="ml-vip">
    <?php
    $array = file("stop_words.txt");
    $string = join("", $array);
    echo "<div id=\"stop_words\" style=\"display:none;\">$string</div>";
    echo "<div id=\"preguntas_vendedor\" style=\"display:none;\">".$json_preguntas_vendedor."</div>";
    echo "<div id=\"keywords\" style=\"display:none;\">$json_keywords</div>";
    ?>
    <div class="ml-header">
        <div class="ml-header-inner">
            <!-- LOGO -->
            <a class="ml-logo es" href="http://www.mercadolibre.com.uy">
                MercadoLibre - Donde compras y vendes de todo	</a>
            <form id="formSearch" class="nav-search ml-search" action="http://www.mercadolibre.com.uy/jm/search" method="GET" role="search">

                <input id="query" type="text" class="nav-search-input ml-search-input" name="as_word" value="" max-length="120" aria-autocomplete="list" aria-haspopup="true" aria-owns="ac-popover-2" autocomplete="off">
                <button type="submit" name="mlSearchBtn" class="nav-search-btn ml-search-btn">
                    <i class="nav-icon-search ml-icon ml-icon-search">
                    </i>
                    <span class="ch-hide">
                        Buscar</span>
                </button>
            </form>
            <div class="ml-navigation">
                <ul>
                    <!-- User user -->
                    <!-- For Ipad version remove iframe-modal class -->
                    <!-- showNickname >
             NOT -->
                    <li id="register" class="ml-register ch-hide">
                        <a rel="nofollow" href="https://registration.mercadolibre.com.uy/registration/?confirmation_url=http%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM">
                            Regístrate</a>
                    </li>
                    <li id="login" class="ml-login ch-hide">
                        <a rel="nofollow" href="https://www.mercadolibre.com/jms/mlu/lgz/login?go=http%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM" class="iframe-modal" data-modal:width="645" data-modal:height="360" data-modal:url="https://www.mercadolibre.com/jms/mlu/lgz/login/showFormModal?go=http%3A%2F%2Farticulo.mercadolibre.com.uy%2Fshare%2FreturnMainLogin%3Floged.htm" data-modal:dinamic="true">
                            Ingresa</a>
                    </li>
                    <!-- showNickname >
             YES -->
                    <!-- Add ch-hide class -->
                    <li id="account" class="ml-account ch-points-rtrb" aria-describedby="ch-layer-2" style="cursor: pointer;">
                        <a href="http://www.mercadolibre.com.uy/jm/myML" title="ORVILESTONE">
                            <span id="nickName" class="ml-nick-name">
                                ORVILESTONE</span>
                            <i class="ml-icon ch-icon-user">
                            </i>
                        </a>
                        <ul class="ch-hide">
                            <li>
                                <a rel="nofollow" href="http://myaccount.mercadolibre.com.uy/summary/">
                                    Mi cuenta</a>
                            </li>
                            <li>
                                <a rel="nofollow" id="logout" href="https://www.mercadolibre.com/jms/mlu/lgz/logout?go=http%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM">
                                    Salir</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Add ch-hide class -->
                    <li id="notification" class="ml-notification ch-points-rtrb">
                        <a id="notiLink" href="#" title="Notificaciones" class="ml-icon ch-icon-notification">
                            Notificaciones <em class="ml-count ch-hide" style="display: none;">
                                0</em>
                        </a>
                        <div class="notification ch-hide">
                            <div class="notification-content">
                                <div class="header">
                                    Notificaciones<a rel="nofollow" data-modal:dinamic="true" data-modal:url="http://www.mercadolibre.com.uy/notifications/config" data-modal:width="400" data-modal:height="240" href="http://www.mercadolibre.com.uy/notifications/config" class="iframe-modal ml-icon ch-icon-cog">
                                    </a>
                                </div>
                                <p class="no-notif" style="display: block;">
                                    Por ahora, no hay nada acá.</p>
                                <ul class="notification-container">
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Add ch-hide class -->
                    <!-- Bookmarks Snippet -->
                    <li id="favorite" class="ml-favorite ch-points-rtrb" aria-describedby="ch-layer-11" style="cursor: pointer;">
                        <a rel="nofollow" href="http://www.mercadolibre.com.uy/jm/myML?as_section=AIMED_IT" title="Favoritos" class="ml-icon ch-icon-heart">
                            Favoritos</a>
                        <div data-favorite="menu" class="favorite-menu-wrapper ch-user-no-select" title="Favoritos" style="display:none">
                            <div class="favorite-menu favorite-menu-saved">
                                <div class="header">
                                    Favoritos </div>
                                <div class="favorite-zero" style="display: none;">
                                    Agrega tus favoritos y síguelos desde acá.</div>
                                <ul class="ch-user-no-select">
                                    <li data-id="MLU425734046">
                                        <a href="http://servicio.mercadolibre.com.uy/MLU-425734046-prueba-ml-_JM">
                                            <p class="title">
                                                Prueba Ml</p>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAMAAAANIilAAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzhCNjMyREYyODIyMTFFMkIwNTZBRUNBMzZCNkIzMzEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzhCNjMyRTAyODIyMTFFMkIwNTZBRUNBMzZCNkIzMzEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozOEI2MzJERDI4MjIxMUUyQjA1NkFFQ0EzNkI2QjMzMSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozOEI2MzJERTI4MjIxMUUyQjA1NkFFQ0EzNkI2QjMzMSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PkHB/dYAAACEUExURf///+jo6Onp6f7+/ufn5+bm5uHh4ejo5+zs7P39/eXl5fDw8PX19fT09OLi4vj4+ODg4Pb29t/f3+Pj4+/v7/f39+Li4eTk5OPj4vPz8/v7++vr6+rq6uXl5Onp6PLy8t3d3fr6+t7e3vz8/Pn5+ejo6fHx8eTk49zc3N7e3e3t7e7u7u7Kx7sAAAEUSURBVHja7JXbcoMgEEBlXZSgoYiXqGnuSZu0//9/FbVpm44KafrGGR+Q3TPuIAue53A4HP/PIW5I/PvkZHvZ74uZUW6eRT9hoijL1/coyiY/HyO9AYlGj/jLuO0zbPKwo/euIK1G5RlDZPlTy3FObuzFsz8uUxpf396oVgD0o+FgITOuFaECuQAjuSl73hFvdNmoSL6rVnJtJBP8RBcNkrXztAQj+Tsnnnb5RxlayyCgD6TcXk6xC9SCWssE5a4NVGptL4NY1XrHS26/YNoOWAaq/dHWMgFaBAU13CTkl32CfnSH/MVfZEjD8Ybe0KaFBiDb8Zb0DksRDHFWycQ5VGcYDrBMpo9AfxB3DzkcjsfzIcAAB+sQMB2xolgAAAAASUVORK5CYII=">
                                            <p class="ch-price">
                                                Precio a convenir</p>
                                        </a>
                                        <i class="ml-icon icon-remove favorite-menu-remove">
                                        </i>
                                    </li>
                                </ul>
                                <p class="favorite-all" style="display: block;">
                                    <a rel="nofollow" href="http://www.mercadolibre.com.uy/jm/myML?as_section=AIMED_IT">
                                        Ver todos</a>
                                </p>
                            </div>
                            <i class="ch-icon-heart">
                            </i>
                        </div>
                    </li>
                    <!-- Bookmarks Snippet -->
                    <!-- End user user -->
                    <li class="ml-sell">
                        <a rel="nofollow" href="https://syi.mercadolibre.com.uy/sell">
                            Vender</a>
                    </li>
                    <li class="ml-help">
                        <a href="http://www.mercadolibre.com.uy/ayuda_home" title="Ayuda" class="ml-icon ch-icon-question-sign">
                            Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        ;
        (function preventEmptySearch(d) {
            d.getElementById('formSearch').onsubmit = function (e) {
                if (d.getElementById('query').value == "") {
                    if (e.preventDefault)
                        e.preventDefault();
                    else
                        e.returnValue = false;
                }
            }
        })(document);</script>
    <!-- Set url registration -->
    <!-- Descripcion del producto, boton ofertar, reputacion. -->
    <div class="vip-wrapper " itemscope="" itemtype="http://schema.org/Product">
        <div class="deep-links-wrapper bg-great-info">
            <div class="deep-links">
                <p>
                    También puede interesarte:</p>
                <ul>
                    <li>
                        <a href="http://electronica.mercadolibre.com.uy/televisores/">
                            televisor,</a>
                    </li>
                    <li>
                        <a href="http://ipod.mercadolibre.com.uy/reproductores/ipod-touch/">
                            ipod touch,</a>
                    </li>
                    <li>
                        <a href="http://listado.mercadolibre.com.uy/electronica/radios">
                            radios,</a>
                    </li>
                    <li>
                        <a href="http://listado.mercadolibre.com.uy/carlos-gutierrez-televisores">
                            carlos gutierrez televisores</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Component preheader -->
        <div class="nav-path bg-great-info">
            <nav>
                <div class="nav-path-breadcrumb">
                    <!-- El link se carga con JavaScript-->
                    <a id="backToCateg" href="http://electronica.mercadolibre.com.uy/navegadores-autos-otros/" title="Volver al listado" class="nav-path-return">
                        Volver al listado</a>
                    <ul>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="http://home.mercadolibre.com.uy/electronica/" itemprop="url">
                                <span itemprop="title">
                                    Electrónica, Audio y Video</span>
                            </a>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="http://electronica.mercadolibre.com.uy/gps/" itemprop="url">
                                <span itemprop="title">
                                    GPS</span>
                            </a>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="http://electronica.mercadolibre.com.uy/gps-equipos/" itemprop="url">
                                <span itemprop="title">
                                    Equipos</span>
                            </a>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="http://electronica.mercadolibre.com.uy/navegadores-para-autos/" itemprop="url">
                                <span itemprop="title">
                                    Navegadores para Autos</span>
                            </a>
                        </li>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a id="lastCategPath" href="http://electronica.mercadolibre.com.uy/navegadores-autos-otros/" itemprop="url">
                                <span itemprop="title">
                                    Otros</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end nav-path-wrap -->
                <div class="nav-path-denounce denounce-wrap">
                    <span class="id-item">
                        Publicación #425198261 </span>
                    <a id="denounce" class="denounce" rel="nofollow" href="/denounce/show?type=ITM&amp;elementId=MLU425198261&amp;itemId=MLU425198261" aria-label="ch-modal-4">
                        Denunciar</a>
                    <a id="soltLink" data-freemium="false" rel="nofollow" href="https://syi.mercadolibre.com.uy/sell?flowType=listEqual&amp;itemId=MLU425198261">
                        Vender uno igual</a>
                </div>
            </nav>
            <div id="redirectedMsg">
            </div>
            <div style="display:none;">
                <a id="msgReg" href="/question/messageReg.html?REG_QUESTION=OK">
                </a>
            </div>
            <div style="display:none;">
                <a id="msgRegBookmark" href="/bookmark/messageReg.html?REG_FAVORITE=OK">
                </a>
            </div>
        </div>
        <!-- end nav-path -->
        <!-- Component preheader end -->
        <header class="bg-great-info">
            <h1 itemprop="name" class="">
                <?php echo $item['nombre']; ?><span>
                    <div class="fb-like fb_iframe_widget" data-href="http://articulo.mercadolibre.com.uy/MLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM" data-ref="see_listing__LIKE" data-send="false" data-action="like" data-layout="button" data-width="250" data-show-faces="true" data-font="arial" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=203124886459321&amp;container_width=75&amp;font=arial&amp;href=http%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM&amp;layout=button&amp;locale=es_LA&amp;ref=see_listing__LIKE&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=250">
                        <span style="vertical-align: bottom; width: 74px; height: 20px;">
                            <iframe name="f17ecaaf74" width="250px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?action=like&amp;app_id=203124886459321&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F6Dg4oLkBbYq.js%3Fversion%3D41%23cb%3Df244904ac%26domain%3Darticulo.mercadolibre.com.uy%26origin%3Dhttp%253A%252F%252Farticulo.mercadolibre.com.uy%252Ff30082fe7%26relation%3Dparent.parent&amp;container_width=75&amp;font=arial&amp;href=http%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM&amp;layout=button&amp;locale=es_LA&amp;ref=see_listing__LIKE&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=250" style="border: none; visibility: visible; width: 74px; height: 20px;" class="">
                            </iframe>
                        </span>
                    </div>
                    <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                            <div>
                            </div>
                        </div>
                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                            <div>
                                <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://static.ak.facebook.com/connect/xd_arbiter/6Dg4oLkBbYq.js?version=41#channel=f30082fe7&amp;origin=http%3A%2F%2Farticulo.mercadolibre.com.uy" style="border: none;">
                                </iframe>
                                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter/6Dg4oLkBbYq.js?version=41#channel=f30082fe7&amp;origin=http%3A%2F%2Farticulo.mercadolibre.com.uy" style="border: none;">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </span>
            </h1>
            <dl class="item-data">
                <dt class="icon icon-label">
                Tipo de artículo:</dt>
                <dd>
                    Artículo nuevo	</dd>
                <dt class="icon icon-cart">
                Vendidos:</dt>
                <dd>
                    74	vendidos	</dd>
            </dl>
        </header>
        <section class="short-description bg-great-info" id="shortDescription">
            <div class="product-gallery-container" id="productGalleryCollection">
                <figure id="gallery_dflt" class="product-gallery thumbs-col-1 ch-points-ltrt ch-enlarge" style="min-height: 500px">
                    <a href="#" id="arrowPrev" title="Anterior">
                        <i class="ch-icon-chevron-left">
                        </i>
                    </a>
                    <a href="#" id="arrowNext" title="Siguiente">
                        <i class="ch-icon-chevron-right">
                        </i>
                    </a>
                    <input type="radio" id="thumbgallery_dflt-0" name="product-gallery-thumbnail" checked="checked">
                    <label for="thumbgallery_dflt-0">
                        <i class="ch-icon ch-icon-search">
                        </i>
                        <img src="http://mlu-s2-p.mlstatic.com/21904-MLU20219813051_122014-M.jpg" class="first-img" width="40" height="40">
                    </label>
                    <div style="min-height: 500px" class="first-image">
                        <a aria-setsize="6" aria-posinset="1" data-enlarge="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21904-MLU20219813051_122014-F.jpg" data-index="0" href="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21904-MLU20219813051_122014-F.jpg" style="width: 500px; height: 500px;" aria-describedby="ch-zoom-12" class="ch-zoom-trigger">
                            <noscript>
                            &lt;img itemprop="image" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21904-MLU20219813051_122014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz" /&gt;</noscript>
                            <img alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21904-MLU20219813051_122014-O.jpg" data-fixed-img="http://mlu-s2-p.mlstatic.com/21904-MLU20219813051_122014-R.jpg" width="500" height="500" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                            <div class="ch-zoom-seeker ch-hide" style="width: 250px; height: 312px; left: 0px; top: 0px;">
                            </div>
                        </a>
                    </div>
                    <input type="radio" id="thumbgallery_dflt-1" name="product-gallery-thumbnail">
                    <label for="thumbgallery_dflt-1">
                        <i class="ch-icon ch-icon-search">
                        </i>
                        <img src="http://mlu-s1-p.mlstatic.com/21886-MLU20219812670_122014-M.jpg" width="40" height="40">
                    </label>
                    <div style="min-height: 500px">
                        <a aria-setsize="6" aria-posinset="2" data-enlarge="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21886-MLU20219812670_122014-F.jpg" data-index="1" href="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21886-MLU20219812670_122014-F.jpg" style="width: 500px; height: 500px;" aria-describedby="ch-zoom-13" class="ch-zoom-trigger">
                            <noscript>
                            &lt;img itemprop="image" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21886-MLU20219812670_122014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz" /&gt;</noscript>
                            <img alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21886-MLU20219812670_122014-O.jpg" width="500" height="500" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                            <p class="ch-zoom-loading ch-loading-big ch-hide" style="left: 190px; top: 200px;">
                                Loading zoom...</p>
                        </a>
                    </div>
                    <input type="radio" id="thumbgallery_dflt-2" name="product-gallery-thumbnail">
                    <label for="thumbgallery_dflt-2">
                        <i class="ch-icon ch-icon-search">
                        </i>
                        <img src="http://mlu-s1-p.mlstatic.com/21905-MLU20219812663_122014-M.jpg" width="40" height="40">
                    </label>
                    <div style="min-height: 500px">
                        <a aria-setsize="6" aria-posinset="3" data-enlarge="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21905-MLU20219812663_122014-F.jpg" data-index="2" href="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21905-MLU20219812663_122014-F.jpg" style="width: 500px; height: 500px;" aria-describedby="ch-zoom-14" class="ch-zoom-trigger">
                            <noscript>
                            &lt;img itemprop="image" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21905-MLU20219812663_122014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz" /&gt;</noscript>
                            <img alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21905-MLU20219812663_122014-O.jpg" width="500" height="500" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                            <p class="ch-zoom-loading ch-loading-big ch-hide" style="left: 190px; top: 200px;">
                                Loading zoom...</p>
                        </a>
                    </div>
                    <input type="radio" id="thumbgallery_dflt-3" name="product-gallery-thumbnail">
                    <label for="thumbgallery_dflt-3">
                        <i class="ch-icon ch-icon-search">
                        </i>
                        <img src="http://mlu-s1-p.mlstatic.com/21900-MLU20219812682_122014-M.jpg" width="40" height="40">
                    </label>
                    <div style="min-height: 500px">
                        <a aria-setsize="6" aria-posinset="4" data-enlarge="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21900-MLU20219812682_122014-F.jpg" data-index="3" href="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21900-MLU20219812682_122014-F.jpg" style="width: 500px; height: 500px;" aria-describedby="ch-zoom-15" class="ch-zoom-trigger">
                            <noscript>
                            &lt;img itemprop="image" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21900-MLU20219812682_122014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz" /&gt;</noscript>
                            <img alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" src="http://mlu-s1-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21900-MLU20219812682_122014-O.jpg" width="500" height="500" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                            <p class="ch-zoom-loading ch-loading-big ch-hide" style="left: 190px; top: 200px;">
                                Loading zoom...</p>
                        </a>
                    </div>
                    <input type="radio" id="thumbgallery_dflt-4" name="product-gallery-thumbnail">
                    <label for="thumbgallery_dflt-4">
                        <img src="http://mlu-s2-p.mlstatic.com/20847-MLU20199292271_112014-M.jpg" width="40" height="40">
                    </label>
                    <div style="min-height: 500px">
                        <noscript>
                        &lt;img itemprop="image" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-20847-MLU20199292271_112014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz"&gt;</noscript>
                        <img aria-posinset="5" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" data-enlarge="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-20847-MLU20199292271_112014-F.jpg" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-20847-MLU20199292271_112014-O.jpg" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                    </div>
                    <input type="radio" id="thumbgallery_dflt-5" name="product-gallery-thumbnail">
                    <label for="thumbgallery_dflt-5">
                        <i class="ch-icon ch-icon-search">
                        </i>
                        <img src="http://mlu-s2-p.mlstatic.com/21942-MLU20219812685_122014-M.jpg" width="40" height="40">
                    </label>
                    <div style="min-height: 500px">
                        <a aria-setsize="6" aria-posinset="6" data-enlarge="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21942-MLU20219812685_122014-F.jpg" data-index="5" href="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21942-MLU20219812685_122014-F.jpg" style="width: 500px; height: 500px;" aria-describedby="ch-zoom-16" class="ch-zoom-trigger">
                            <noscript>
                            &lt;img itemprop="image" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21942-MLU20219812685_122014-O.jpg" alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz" /&gt;</noscript>
                            <img alt="Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" src="http://mlu-s2-p.mlstatic.com/gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-21942-MLU20219812685_122014-O.jpg" width="500" height="500" title="gps garmin nuvi 30 pantalla tactil 3,5 indicacion por voz">
                            <p class="ch-zoom-loading ch-loading-big ch-hide" style="left: 190px; top: 200px;">
                                Loading zoom...</p>
                        </a>
                    </div>
                </figure>
            </div>
            <form action="https://compra.mercadolibre.com.uy/bid/confirm" class="product-info" id="productInfo" method="get">
                <!-- data to CHO -->
                <input type="hidden" name="item_id" value="MLU425198261">
                <input type="hidden" name="parent_url" value="http://articulo.mercadolibre.com.uy/MLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM">
                <input type="hidden" name="isLogged" value="true">
                <input type="hidden" name="mode" value="page">
                <input id="mpPreferredMethod" type="hidden" name="pm" value="">
                <input id="mpPreferredInstallments" type="hidden" name="inst" value="">
                <input id="mpPreferredBankId" type="hidden" name="cc_issuer" value="">
                <input id="prefsOn" type="hidden" name="prefs_on" value="NONE">
                <fieldset>
                    <legend>
                        Precio</legend>
                    <article class="price ch-price ">
                        <strong itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="USD">
                            <meta itemprop="price" content="119.9">
                        </strong>
                        <strong>
                            <?php echo $item['precio']; ?><sup>90</sup>
                        </strong>
                    </article>
                </fieldset>
                <!-- Cuotas MP -->
                <fieldset>
                    <!-- input to set the payments preferences -->
                    <input id="installmentsQuantyHidden" type="hidden" value="">
                    <input id="installmentsPriceHidden" type="hidden" value="">
                    <legend class="icon ico-pay-methods ">
                        Medios de pago</legend>
                    <article class="pay-methods-row pay-without-mp" style="display: none;">
                        <p id="nonMPPaymentMethodsBlock" class="highlight-info">
                            Pago a acordar con el vendedor.</p>
                        <a href="#">
                            Modificar.</a>
                    </article>
                    <p>
                    </p>
                    <article class="pay-methods-row non-mp">
                        <p id="withInstallmentText" class="highlight-info">
                            Pago a acordar con el vendedor.</p>
                        <p>
                            Acepta depósito bancario, efectivo, tarjeta de crédito.</p>
                        <a id="linkToPaymentMethods" rel="nofollow" href="#gotoPaymentMethods">
                            Más información</a>
                    </article>
                </fieldset>
                <!-- For internacional seller -->
                <fieldset class="shipment-methods-fildset">
                    <legend class="icon ico-shipment-methods ico-local-pickup">
                        Formas de envío</legend>
                    <article class="shipment-methods">
                        <p id="customShipping">
                            <span class="highlight-info">
                                Envío a acordar con el vendedor.</span>
                        </p>
                        <p>
                            Ubicado en <span class="where">
                                centro (montevideo)</span>
                        </p>
                        <a id="linkToShipmentMethods" class="view-option-shipping" href="#gotoShipmentMethods" rel="nofollow">
                            Más información</a>
                        <div style="display:none">
                            <div id="optionShipping" class="option-shipping">
                            </div>
                        </div>
                    </article>
                </fieldset>
                <fieldset class="action">
                    <div class="stock-quantity">
                        <label for="productStockQuantity">
                            Cantidad: </label>
                        <div class="stock-quantity-inputs" data-component="quantitySelector">
                            <input class="stock-quantity-increments stock-quantity-increments-disabled" type="button" name="pop" value="-" disabled="">
                            <input id="productStockQuantity" class="stock-quantity-input" data-validate="number" name="quantity" type="number" min="1" max="76" title="Cantidad de unidades" value="1" autocomplete="off">
                            <input class="stock-quantity-increments" type="button" name="push" value="+">
                        </div>
                        <p id="stockAvailableGeneric" class="stock-available" style="color: #D90000; display: none">
                            Superaste el límite de stock disponible.</p>
                    </div>
                    <div class="action-row">
                        <input type="submit" title="Comprar Gps Garmin Nuvi 30 Pantalla Tactil 3,5 Indicacion Por Voz" value="Comprar" class="ch-btn ch-btn-big" id="BidButtonTop">
                        <ul class="socialOptions">
                            <li id="bookmarkMessage">
                                <a class="favorite ch-points-ltlb" id="bookmark" data-id="MLU425198261" href="#" title="Agregar a favoritos" aria-describedby="ch-tooltip-20">
                                    <i class="ch-icon-heart">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a id="fbWant" rel="nofollow" href="http://social.mercadolibre.com.uy/facebook/oauth?app=want&amp;display=page&amp;redirect_uri=http%3A%2F%2Fsocial.mercadolibre.com.uy%2Faction%2Fwant%3Flisting%3Dhttp%3A%2F%2Farticulo.mercadolibre.com.uy%2FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM%26callback%3Dhttp%253A%252F%252Farticulo.mercadolibre.com.uy%252FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM%26type%3Dproduct" data-href="http://social.mercadolibre.com.uy/facebook/oauth?app=want&amp;display=popup&amp;redirect_uri=http%3A%2F%2Fsocial.mercadolibre.com.uy%2Faction%2Fwant%3Flisting%3Dhttp%253A%252F%252Farticulo.mercadolibre.com.uy%252FMLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM%26type%3Dproduct" class="ch-points-ltlb" title="Lo quiero" aria-describedby="ch-tooltip-21">
                                    Lo quiero</a>
                            </li>
                            <li>
                                <a class="quest scroll-to ch-points-ltlb" id="makeQuest" href="#questions" title="Hacer una pregunta" aria-describedby="ch-tooltip-22">
                                    <span class="ch-hide">
                                        Hacer una pregunta</span>
                                    <i class="ch-icon-comment">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END action-row -->
                </fieldset>
            </form>
        </section>
        <!-- end shortDescription -->
        <!-- Reputation Component -->
        <section id="sellerInfo">
            <header xmlns="http://www.w3.org/1999/html">
                <h3>
                    Información sobre el vendedor</h3>
                <dl class="item-data">
                    <dt class="icon icon-location">
                    Ubicado en :</dt>
                    <dd>
                        Ubicado en <span class="where">
                            centro (montevideo)</span>
                    </dd>
                </dl>
            </header>
            <section class="ch-box-container reputation">
                <header>
                    <span>
                        Reputación</span>
                </header>
                <div class="therm-5_green">
                    <h4 class="ch-hide">
                        Tipo de vendedor</h4>
                    <ol class="reputation-scale">
                        <li class="level-1">
                            Rojo</li>
                        <li class="level-2">
                            Naranja</li>
                        <li class="level-3">
                            Amarillo</li>
                        <li class="level-4">
                            Verde claro</li>
                        <li class="level-5 selected">
                            <strong>
                                Verde</strong>
                        </li>
                    </ol>
                    <dl class="box-cone tl">
                        <dt>
                        Tipo de vendedor</dt>
                        <dd class="medal">
                            <p class="wrap-medal">
                                <i class="icon ico-ml-platinum">
                                </i>
                                <span class="rep-title">
                                    Este vendedor es <strong>
                                        MercadoLíder Platinum</strong>
                                </span>
                            </p>
                        </dd>
                        <dt>
                        Calificaciones</dt>
                        <dd class="great-data opinions">
                            <strong>
                                98%</strong>
                            <span>
                                de sus compradores lo recomiendan</span>
                        </dd>
                        <dt>
                        Ventas</dt>
                        <dd class="great-data sales">
                            <strong>
                                22154</strong>
                            <span>
                                ventas concretadas</span>
                        </dd>
                        <dt>
                        Ranking</dt>
                        <dd>
                            <strong class="ranking-data">
                                Excelente vendedor</strong>
                            <span>
                                ¡Es uno de los mejores del sitio!</span>
                        </dd>
                        <dt>
                        Historial</dt>
                        <dd>
                            <strong class="history-data">
                                5 Años</strong>
                            <span>
                                vendiendo en MercadoLibre</span>
                        </dd>
                    </dl>
                    <a class="more-info" rel="nofollow" href="http://perfil.mercadolibre.com.uy/CELSHOPMERCADOLIBRE" target="_blank" title="Ver más datos de este vendedor">
                        Ver más datos de este vendedor</a>
                </div>
            </section>
            <!-- sub-section -->
            <section class="ch-box-container califications">
                <header>
                    <span>
                        Calificaciones</span>
                </header>
                <!--solo positivas-->
                <div id="opinions-positive">
                    <h4>
                        <strong class="positive">
                            32 compradores lo recomendaron</strong>
                        por este producto</h4>
                    <blockquote class="positive">
                        <p class="box-cone rm">
                            <i class="ch-icon ch-icon-plus-sign">
                            </i>
                            "todo ok” </p>
                        <cite>
                            <span class="icon ico-user">
                            </span>
                            YANETNE... </cite>
                        <time>
                            11 de abril</time>
                    </blockquote>
                    <blockquote class="positive">
                        <p class="box-cone rm">
                            <i class="ch-icon ch-icon-plus-sign">
                            </i>
                            "Todo super bien se recomienda, entrega rapida.” </p>
                        <cite>
                            <span class="icon ico-user">
                            </span>
                            WILLISF... </cite>
                        <time>
                            04 de abril</time>
                    </blockquote>
                    <blockquote class="positive">
                        <p class="box-cone rm">
                            <i class="ch-icon ch-icon-plus-sign">
                            </i>
                            "Todo bien.” </p>
                        <cite>
                            <span class="icon ico-user">
                            </span>
                            CLAUDELI... </cite>
                        <time>
                            31 de marzo</time>
                    </blockquote>
                    <blockquote class="positive">
                        <p class="box-cone rm">
                            <i class="ch-icon ch-icon-plus-sign">
                            </i>
                            "Todo impecable y eficiente. Rápido envío. El producto muy bueno!! muy recomendable. ” </p>
                        <cite>
                            <span class="icon ico-user">
                            </span>
                            PERLAJA... </cite>
                        <time>
                            26 de marzo</time>
                    </blockquote>
                    <blockquote class="positive">
                        <p class="box-cone rm">
                            <i class="ch-icon ch-icon-plus-sign">
                            </i>
                            "buen trato ymejor atencion....rapido y concreto recomiendo.” </p>
                        <cite>
                            <span class="icon ico-user">
                            </span>
                            NFBG2... </cite>
                        <time>
                            24 de marzo</time>
                    </blockquote>
                    <a id="moreFeedback" class="more-info" rel="nofollow" data-modal:url="http://articulo.mercadolibre.com.uy/MLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM?_escaped_fragment_=califications" href="http://articulo.mercadolibre.com.uy/MLU-425198261-gps-garmin-nuvi-30-pantalla-tactil-35-indicacion-por-voz-_JM" target="_blank" title="Ver más calificaciones" aria-label="ch-modal-3">
                        Ver más calificaciones</a>
                </div>
            </section>
        </section>
        <section id="productDescription">
            <header>
                <h3>
                    Descripción de la publicación</h3>
            </header>
            <!-- noscript: false -->
            <div id="description">
                <p class="disclaimer ">
                    MercadoLibre no vende este artículo y no participa en ninguna negociación, venta o perfeccionamiento de operaciones. Sólo se limita a la publicación de anuncios de sus usuarios.	</p>
                <div class="cont-tit-description">
                </div>

                    <div id="itemDescription" class="description">
                        <?php echo $item['descripcion'];?>
                    </div>
                
                
            </div>
            <div class="warranty">
                <div class="w-container">
                    <h5 class="seoH5">
                        Garantía: </h5>
                    <p>
                        NEW TECHNOLOGY GARANTIA 1 AÑO FACTURA CON RUT EL MEJOR PRECIO DEL MERCADO</p>
                </div>
            </div>
        </section>
        <header>
            <h5 id="gotoPaymentAndShipmentBlock" class="seoH5 typo">
                Formas de pago y de entrega</h5>
        </header>
        <div id="sellerPaymentAndShipmentMethods" class="vip-tabs selection-methods ch-tabs">
            <!-- tabs -->
            <ul class="ch-tabs-triggers" role="tablist">
                <li class="seller-pay-method">
                    <a class="ch-tab-trigger ch-tab-trigger-on box-cone tc" href="#gotoPaymentMethods" title="Pago" role="tab" arial-controls="gotoPaymentMethods">
                        <i>
                        </i>
                        <span class="title">
                            Pago</span>
                    </a>
                </li>
                <li class="seller-ship-method">
                    <a class="ch-tab-trigger box-cone tc" href="#gotoShipmentMethods" title="Entrega" role="tab" arial-controls="gotoShipmentMethods">
                        <i>
                        </i>
                        <span class="title">
                            Entrega</span>
                    </a>
                </li>
            </ul>
            <!-- [end] tabs -->
            <!-- content -->
            <div class="selection-methods-info ch-tabs-content ch-box-lite" role="presentation">
                <!-- Payment methods -->
                <div id="gotoPaymentMethods" role="tabpanel" aria-hidden="false" class="">
                    <div class="info-box">
                        <h5>
                            <span>
                                Este vendedor ofrece</span>
                        </h5>
                        <div class="pay-method-accepted">
                            <ul>
                                <li>
                                    Depósito bancario</li>
                                <li>
                                    Efectivo</li>
                                <li>
                                    Tarjeta de crédito</li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-box">
                        <h5>
                            <span>
                                ¿Cómo coordino el pago del producto?</span>
                        </h5>
                        <ol class="local-data-box">
                            <li>
                                <i class="icon-step2">
                                </i>
                                <p>
                                    Al terminar tu compra, recibirás los datos del vendedor.</p>
                            </li>
                            <li>
                                <i class="icon-step3">
                                </i>
                                <p>
                                    Contáctalo para acordar el pago del producto.</p>
                            </li>
                        </ol>
                        <div class="disclaimer">
                            <p>
                                Si eliges transferencia bancaria, presta atención a la reputación del vendedor.</p>
                            <p>
                                Por seguridad, te recomendamos evitar este medio de pago si el vendedor es nuevo o su reputación es dudosa.</p>
                        </div>
                    </div>
                </div>
                <!-- [end] gotoPaymentMethods -->
                <!-- Shipment methods -->
                <div id="gotoShipmentMethods" role="tabpanel" aria-hidden="true" class="ch-hide">
                    <div class="info-box">
                        <h5>
                            <span>
                                ¿Cómo coordino la entrega del producto?</span>
                        </h5>
                        <ol class="local-data-box group-block">
                            <li>
                                <i class="icon-step2">
                                </i>
                                <p>
                                    Al terminar tu compra, recibirás los datos del vendedor.</p>
                            </li>
                            <li>
                                <i class="icon-step3">
                                </i>
                                <p>
                                    Contáctalo para acordar la fecha y el lugar de entrega del producto.</p>
                            </li>
                        </ol>
                    </div>
                    <!-- [end] info-box -->
                </div>
                <!-- [end] gotoShipmentMethods -->
            </div>
            <!-- [end] contents -->
        </div>
        <!-- [end] selection-methods -->
    </div>
    <!-- end vip-wrapper -->
    <!-- shortDesc END -->
    <header>
        <h5 id="questions" class="seoH5 typo">
            Preguntas al vendedor	</h5>
    </header>
    <div class="vip-bounds">
        <div class="ch-box-lite new-questions">
            <!-- empieza el form -->
            <div class="make-question" id="llMakeQuestion">
                <form class="ch-form-row" action="/question/send" method="post" id="form_quest">
                    <input type="hidden" name="itemId" id="itemId" value="MLU425198261">
                    <input type="hidden" name="token" id="token" value="c8edfb1a4e544a1819a0e8b5ff2d1a77ccf8924074172f3d5c7da9c6f4aceedc6665bb907c7da2b28aa45af71136309f0c02dbe6b905a031165df4ca42c7a360">
                    <div class="wraper-textarea">
                        <i class="vip-icon ch-icon-comment">
                        </i>
                        <span class="ch-hide">
                            Pregunta:</span>
                        <p>
                            <textarea class="" name="questionText" id="llquestionText" cols="110" width="90%" title="Escribe tu pregunta..." placeholder="Escribe tu pregunta...">
</textarea>
                        </p>
                    </div>
                    <div class="wraper-actions" style="display: none;">
                        <div class="ch-form-actions tips">
                            <input type="submit" value="Preguntar" name="saveQuest" id="saveQuest" class="ch-btn ch-btn-small ch-btn-disabled" disabled="disabled">
                            No ingreses datos de contacto, no uses lenguaje vulgar ni ofertes o preguntes por otro artículo.	<p class="contQuestion">
                                Quedan <span id="display">
                                    979</span>
                                caracteres.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div id="avgResponseTime" class="hidden time-to-response">
                <span class="hidden avg-time">
                    <span class="ico-time">
                    </span>
                    Tiempo aproximado de respuesta: <strong>
                        <span id="avgItemResponseTime">
                        </span>
                        <span id="avgUnitText">
                        </span>
                    </strong>
                </span>
            </div>
            <div id="divPersonalQuestions" class="wrap-personal-questions">
                <p class="no-questions">
                    Nadie hizo preguntas todavía. ¡Sé el primero!</p>
                <p id="statusQuestion" class="ch-box-ok" style="display:none;">
                </p>
                <ol id="personalQuestions" class="list-questions">
                </ol>
            </div>
            <a id="makeQuestIframe" href="" aria-label="ch-modal-6">
            </a>
            <!-- finaliza el form -->
            <p class="other-question-title">
                <strong>
                    Otras preguntas:</strong>
            </p>
            <ol id="otherQuestions" class="list-questions">
                <span id="groupQuestion1">
                    <?php foreach($preguntas as $pregunta):?>
                    <li class="llQuest" id="Quest3514574563">
                        <dl class="question" id="1">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    <?php echo $pregunta['pregunta']; ?></span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3512409448" aria-label="ch-modal-34" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                            <dt class="answer">
                            <i class="vip-icon ch-icon-comments">
                            </i>
                            <label class="ch-hide" title="Respuesta">
                                Respuesta:</label>
                            </dt>
                            <dd class="txt answer-txt">
                                <span>
                                    <?php echo $pregunta['respuesta']; ?></span>
                                <span class="time">
                                    - Hace 2 días.</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3512409448" aria-label="ch-modal-35" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach;        ?>
                    <li class="llQuest" id="Quest3514368765">
                        <dl class="question" id="2">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    Me podras pasar la direcion del local</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3514368765" aria-label="ch-modal-29">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3514574388">
                        <dl class="question" id="3">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    Me podes pasar la direcion del local gracias</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3514574388" aria-label="ch-modal-30">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3514570589">
                        <dl class="question" id="4">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    Tenes avierto los sabados</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3514570589" aria-label="ch-modal-31" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3514569880">
                        <dl class="question" id="5">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    Tenes algun local cerca de general flores</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3514569880" aria-label="ch-modal-32" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3514568861">
                        <dl class="question" id="6">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    Me podes pasar la direcion del local gracias</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3514568861" aria-label="ch-modal-33" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3512409448">
                        <dl class="question" id="7">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    hola q tal . el gps trae cargador para el auto o solo viene el gps ? embian por incomienda al interior ?? gracias</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3512409448" aria-label="ch-modal-34" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                            <dt class="answer">
                            <i class="vip-icon ch-icon-comments">
                            </i>
                            <label class="ch-hide" title="Respuesta">
                                Respuesta:</label>
                            </dt>
                            <dd class="txt answer-txt">
                                <span>
                                    Hola si por supuesto viene con cargador y soporte, todos nuestros articulos los podes financiar hasta 6 pagos SIN RECARGO en pesos o dolares con TODAS las tarjetas de credito, tenemos pago ONLINE via telefonica a todo el pais con TARJETA OCA o CREDITEL en 6 pagos sin recargo, TARJETA D lo podes hacer hasta 15 PAGOS SIN RECARGO en pesos o dolares, recuerda cuando vengas por nuestro local a realizar la compra registrarte como cliente y asi obtener ofertas y descuentos increibles, estamos en la zona del centro proximos a Yi y colonia de lunes a viernes de 10 a 19hs, para ver mas articulos te invito a visitar nuestro eshop con exelentes ofertas http://eshops.mercadolibre.com.uy/celshopmercadolibre/ ,saludos y a las ordenes, Jose de NEWTECHNOLOGY</span>
                                <span class="time">
                                    - Hace 2 días.</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3512409448" aria-label="ch-modal-35" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3509176644">
                        <dl class="question" id="8">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    tenes alguno que tenga comando de voz,cuanto saldria?</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3509176644" aria-label="ch-modal-36">
                                    Denunciar</a>
                            </dd>
                            <dt class="answer">
                            <i class="vip-icon ch-icon-comments">
                            </i>
                            <label class="ch-hide" title="Respuesta">
                                Respuesta:</label>
                            </dt>
                            <dd class="txt answer-txt">
                                <span>
                                    Hola no tenemos ningun modelo que tenga comando de voz, saludos Jose de NEWTECHNOLOGY</span>
                                <span class="time">
                                    - Hace 4 días.</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3509176644" aria-label="ch-modal-37">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3508763496">
                        <dl class="question" id="9">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    mi pregunta era si yo le podia desir la calle que vuscaba ablandole?</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3508763496" aria-label="ch-modal-38" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                            <dt class="answer">
                            <i class="vip-icon ch-icon-comments">
                            </i>
                            <label class="ch-hide" title="Respuesta">
                                Respuesta:</label>
                            </dt>
                            <dd class="txt answer-txt">
                                <span>
                                    Hola no tiene comando de voz, saludos Jose de NEWTECHNOLOGY</span>
                                <span class="time">
                                    - Hace 5 días.</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3508763496" aria-label="ch-modal-39" style="visibility: hidden;">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="llQuest" id="Quest3507030947">
                        <dl class="question" id="10">
                            <dt class="title">
                            <i class="vip-icon ch-icon-comment">
                            </i>
                            <label class="ch-hide" title="Pregunta">
                                Pregunta:</label>
                            </dt>
                            <dd class="txt">
                                <span>
                                    hola,me podes pasar la direccion del local o le doy comprar,nesesitaria este mismo gps,viene con comando de voz ?</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3507030947" aria-label="ch-modal-40">
                                    Denunciar</a>
                            </dd>
                            <dt class="answer">
                            <i class="vip-icon ch-icon-comments">
                            </i>
                            <label class="ch-hide" title="Respuesta">
                                Respuesta:</label>
                            </dt>
                            <dd class="txt answer-txt">
                                <span>
                                    Hola para obtener los datos de nuestra empresa debes hacer click en comprar, si claro te guia por voz en español, estamos en la zona del centro proximos a Yi y colonia de lunes a viernes de 10 a 19hs, para ver mas articulos te invito a visitar nuestro eshop con exelentes ofertas http://eshops.mercadolibre.com.uy/celshopmercadolibre/ ,saludos y a las ordenes, Jose de NEWTECHNOLOGY</span>
                                <span class="time">
                                    - Hace 5 días.</span>
                                <a id="denouncequestion" class="denouncequestion" href="/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3507030947" aria-label="ch-modal-41">
                                    Denunciar</a>
                            </dd>
                        </dl>
                    </li>
                </span>
                <p class="more-question">
                    <a title="Ver m&amp;aacute;s preguntas" id="moreQuestions">
                        Ver más preguntas</a>
                </p>
            </ol>
        </div>
    </div>
    <div id="moreItemsContainer">
        <div class="vip-bounds">
            <div class="items-carousel box-lite ">
                <h2 class="typo">
                    Más publicaciones del vendedor </h2>
                <div class="ch-carousel more-items" style="overflow: hidden;">
                    <div class="ch-carousel-prev ch-carousel-disabled ch-user-no-select" role="button" aria-hidden="true">
                    </div>
                    <div class="ch-carousel-mask ch-carousel-adaptive" role="tabpanel" style="height: 197px;">
                        <ul class="ch-carousel-list" role="list" style="width: 2220px;">
                            <li id="MIMLU423560795" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="1" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-423560795-computadora-dual-core-120gb-2gb-ram-cd-y-dvd-grtia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:1]">
                                        Computadora Dual Core 120gb 2gb Ram Cd Y Dvd Grtia 1 Año</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-423560795-computadora-dual-core-120gb-2gb-ram-cd-y-dvd-grtia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:1]" class="imgProd">
                                    <img src="http://mlu-s1-p.mlstatic.com/21782-MLU20217323449_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 109<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU424496120" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="2" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424496120-computadora-dual-core-con-monitor-lcd-19-80gb-1gb-graba-dvd-_JM#D[S:VIP,L:SELLER_ITEMS,V:2]">
                                        Computadora Dual Core Con Monitor Lcd 19 80gb 1gb Graba Dvd</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-424496120-computadora-dual-core-con-monitor-lcd-19-80gb-1gb-graba-dvd-_JM#D[S:VIP,L:SELLER_ITEMS,V:2]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/21769-MLU20217343212_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 169<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425729742" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="3" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425729742-netbook-dell-intel-atom-pantalla-10-250gb-2gb-ram-wifi-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:4]">
                                        Netbook Dell Intel Atom Pantalla 10 250gb 2gb Ram Wifi Ref</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425729742-netbook-dell-intel-atom-pantalla-10-250gb-2gb-ram-wifi-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:4]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/21878-MLU20219463371_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 249<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425675160" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="4" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425675160-navegador-gps-garmin-nuvi-50-pantalla-5-mapas-mercosur-_JM#D[S:VIP,L:SELLER_ITEMS,V:5]">
                                        Navegador Gps Garmin Nuvi 50 Pantalla 5' Mapas Mercosur</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425675160-navegador-gps-garmin-nuvi-50-pantalla-5-mapas-mercosur-_JM#D[S:VIP,L:SELLER_ITEMS,V:5]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/201201-MLU20277765253_042015-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 159<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU424496233" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="5" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424496233-sintonizador-tv-digital-terrestre-isdbt-full-hd-hdmi-usb-_JM#D[S:VIP,L:SELLER_ITEMS,V:6]">
                                        Sintonizador Tv Digital Terrestre Isdbt Full Hd Hdmi Usb</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-424496233-sintonizador-tv-digital-terrestre-isdbt-full-hd-hdmi-usb-_JM#D[S:VIP,L:SELLER_ITEMS,V:6]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/122001-MLU20267210971_032015-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 48<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425587305" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="false" aria-setsize="11" aria-posinset="6" aria-label="page1">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425587305-consola-xbox-360-slim-destrabada-4gb-wifi-hdmi-gtia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:7]">
                                        Consola Xbox 360 Slim Destrabada 4gb Wifi Hdmi Gtia 1 Año</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425587305-consola-xbox-360-slim-destrabada-4gb-wifi-hdmi-gtia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:7]" class="imgProd">
                                    <img src="http://mlu-s1-p.mlstatic.com/801101-MLU20256599021_032015-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 449<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425138103" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="true" aria-setsize="11" aria-posinset="7" aria-label="page2">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425138103-computadora-escritorio-core-2-duo-120gb-2gb-y-monitor-19-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:8]">
                                        Computadora Escritorio Core 2 Duo 120gb 2gb Y Monitor 19 Ref</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425138103-computadora-escritorio-core-2-duo-120gb-2gb-y-monitor-19-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:8]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/21661-MLU20214577453_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 209<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425587299" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="true" aria-setsize="11" aria-posinset="8" aria-label="page2">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425587299-computadora-amd-athlon-64-80gb-1gb-ram-y-monitor-lcd-19-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:9]">
                                        Computadora Amd Athlon 64 80gb 1gb Ram Y Monitor Lcd 19 Ref</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425587299-computadora-amd-athlon-64-80gb-1gb-ram-y-monitor-lcd-19-ref-_JM#D[S:VIP,L:SELLER_ITEMS,V:9]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/21505-MLU20211891843_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 144<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425138115" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="true" aria-setsize="11" aria-posinset="9" aria-label="page2">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425138115-notebook-hp-core-i7-1tb-12gb-led-15-full-hd-wifi-cd-dvd-win8-_JM#D[S:VIP,L:SELLER_ITEMS,V:10]">
                                        Notebook Hp Core I7 1tb 12gb Led 15 Full Hd Wifi Cd Dvd Win8</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425138115-notebook-hp-core-i7-1tb-12gb-led-15-full-hd-wifi-cd-dvd-win8-_JM#D[S:VIP,L:SELLER_ITEMS,V:10]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/22406-MLU20229404648_012015-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 1.244<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU424997405" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="true" aria-setsize="11" aria-posinset="10" aria-label="page2">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424997405-monitor-lcd-19-varias-marcas-computadoras-garantia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:11]">
                                        Monitor Lcd 19´ Varias Marcas Computadoras Garantia 1 Año</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-424997405-monitor-lcd-19-varias-marcas-computadoras-garantia-1-ano-_JM#D[S:VIP,L:SELLER_ITEMS,V:11]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/1891-MLU4571443191_062013-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 74<sup>
                                        90</sup>
                                </p>
                            </li>
                            <li id="MIMLU425587288" class="ch-carousel-item" role="listitem" style="height: 196.773333333333px; width: 157px; margin-right: 8px;" aria-hidden="true" aria-setsize="11" aria-posinset="11" aria-label="page2">
                                <h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425587288-computadora-athlon-64-superior-a-p4-80gb-2gb-graba-dvd-win-7-_JM#D[S:VIP,L:SELLER_ITEMS,V:12]">
                                        Computadora Athlon 64 Superior A P4 80gb 2gb Graba Dvd Win 7</a>
                                </h3>
                                <a href="http://articulo.mercadolibre.com.uy/MLU-425587288-computadora-athlon-64-superior-a-p4-80gb-2gb-graba-dvd-win-7-_JM#D[S:VIP,L:SELLER_ITEMS,V:12]" class="imgProd">
                                    <img src="http://mlu-s2-p.mlstatic.com/21754-MLU20217326466_122014-G.jpg" width="120" height="120">
                                </a>
                                <p class="ch-price price">
                                    U$S 84<sup>
                                        90</sup>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ch-carousel-next ch-user-no-select" role="button" aria-hidden="false">
                    </div>
                </div>
                <p id="moreItemsBtn" class="more-bottom">
                    <a href="http://listado.mercadolibre.com.uy/_CustId_84912497" title="Ver todos">
                        Ver más</a>
                </p>
            </div>
        </div>

    </div>
    <div class="adsAndRecommended">
        <div id="moreItemsContainerrecommended">
            <div class="vip-bounds">
                <div class="wrap-banner-bottom">
                    <h6>
                        Publicidad</h6>
                    <div class="oasBoxMiddle bannerBottom1 box">
                        <iframe src="http://articulo.mercadolibre.com.uy/oas2/show?sitepage=ML_URUGUAY/ITM/1000/3571/22613/62485/62486&amp;pos=Bottom1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" topmargin="0" leftmargin="0" allowtransparency="true" width="300" height="250">
                        </iframe>
                        <div class="publi">
                        </div>
                    </div>
                </div>
                <div class="items-carousel box-lite with-ads ">
                    <h4 class="typo">
                        <span>
                            Recomendados</span>
                    </h4>
                    <div class="ch-carousel recommendedItems " style="overflow: hidden;">
                        <div class="ch-carousel-prev ch-carousel-disabled ch-user-no-select" role="button" aria-hidden="true">
                        </div>
                        <div class="ch-carousel-mask ch-carousel-adaptive" role="tabpanel" style="height: 229px;">
                            <ul class="ch-carousel-list" role="list" style="width: 3200px;">
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="false" aria-setsize="15" aria-posinset="1" aria-label="page1">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425675160-navegador-gps-garmin-nuvi-50-pantalla-5-mapas-mercosur-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:1]">
                                            Navegador Gps Garmin Nuvi 50 Pantalla 5' Mapas Mercosur</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425675160-navegador-gps-garmin-nuvi-50-pantalla-5-mapas-mercosur-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:1]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s2-p.mlstatic.com/201201-MLU20277765253_042015-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 159<sup>
                                            90</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="false" aria-setsize="15" aria-posinset="2" aria-label="page1">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425607673-gps-ledstar-navegador-navitel-e-igo-4gb-mp3-dimm-futuroxxi-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:2]">
                                            Gps Ledstar Navegador Navitel E Igo 4gb Mp3 Dimm Futuroxxi</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425607673-gps-ledstar-navegador-navitel-e-igo-4gb-mp3-dimm-futuroxxi-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:2]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/20972-MLU20201811984_112014-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 1.690<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="false" aria-setsize="15" aria-posinset="3" aria-label="page1">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424811459-gps-lst-5030-pantalla-5-pulgadas-bluetooth-av-in-mp3-mp4-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:3]">
                                            Gps Lst 5030 Pantalla 5 Pulgadas Bluetooth Av / In Mp3 Mp4</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424811459-gps-lst-5030-pantalla-5-pulgadas-bluetooth-av-in-mp3-mp4-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:3]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/22555-MLU20231779749_012015-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 99<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="false" aria-setsize="15" aria-posinset="4" aria-label="page1">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424655671-gps-garmin-2595-bluetooth-unico-con-comando-por-voz-activado-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:4]">
                                            Gps Garmin 2595 Bluetooth Unico Con Comando Por Voz Activado</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424655671-gps-garmin-2595-bluetooth-unico-con-comando-por-voz-activado-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:4]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/22457-MLU20230125553_012015-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 239<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="5" aria-label="page2">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424833322-gps-xion-gran-pantalla-7-bluetooth-tv-isdbt-dimm-futuroxxi-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:5]">
                                            Gps Xion Gran Pantalla 7 Bluetooth Tv Isdbt Dimm Futuroxxi</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424833322-gps-xion-gran-pantalla-7-bluetooth-tv-isdbt-dimm-futuroxxi-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:5]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/22712-MLU20235961781_012015-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 3.200<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="6" aria-label="page2">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425175903-soldadora-mig-con-y-sin-gas-tecnologia-inverter-neo-im9160-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:6]">
                                            Soldadora Mig Con Y Sin Gas Tecnologia Inverter Neo Im9160</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425175903-soldadora-mig-con-y-sin-gas-tecnologia-inverter-neo-im9160-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:6]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/16154-MLU20114584219_062014-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 480<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="7" aria-label="page2">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424441269-equipo-pistola-pintar-hvlp-gladiator-hv650-compresor-incluid-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:7]">
                                            Equipo Pistola Pintar Hvlp Gladiator Hv650 Compresor Incluid</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424441269-equipo-pistola-pintar-hvlp-gladiator-hv650-compresor-incluid-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:7]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/13560-MLU2992868614_082012-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 1.990<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="8" aria-label="page2">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424934235-soldadora-inverter-electronico-20-130-amp-gladiator-ie5130-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:8]">
                                            Soldadora Inverter Electronico 20-130 Amp. Gladiator Ie5130</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424934235-soldadora-inverter-electronico-20-130-amp-gladiator-ie5130-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:8]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s2-p.mlstatic.com/15237-MLU20099155843_052014-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 199<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="9" aria-label="page3">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425251427-kit-termofusora-valija-metalica-6-boquilla-1500w-termofusion-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:9]">
                                            Kit Termofusora Valija Metalica 6 Boquilla 1500w Termofusion</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425251427-kit-termofusora-valija-metalica-6-boquilla-1500w-termofusion-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:9]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s2-p.mlstatic.com/637101-MLU20271870806_032015-G.jpg" width="120" height="120">
                                    </a>
                                    <div class="ch-price price price-discount">
                                        <p class="price-old">
                                            <del class="price-crossed">
                                                $ 1.890<sup>
                                                    00</sup>
                                            </del>
                                        </p>
                                        <strong>
                                            $ 1.400<sup>
                                                00</sup>
                                        </strong>
                                        <div class="arrow-discount arrow-left">
                                            <div>
                                                25% OFF</div>
                                        </div>
                                    </div>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="10" aria-label="page3">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424507605-paint-zoom-compresor-panther-1l-pintura-rider-superlavable-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:10]">
                                            Paint Zoom Compresor Panther + 1l Pintura Rider Superlavable</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424507605-paint-zoom-compresor-panther-1l-pintura-rider-superlavable-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:10]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s2-p.mlstatic.com/5934-MLU5017738430_092013-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 50<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="11" aria-label="page3">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425189426-plasti-dip-en-uruguay-con-toda-su-linea-de-colores-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:11]">
                                            Plasti Dip En Uruguay!!! Con Toda Su Linea De Colores!!!!!!</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425189426-plasti-dip-en-uruguay-con-toda-su-linea-de-colores-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:11]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/16266-MLU20118110805_062014-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        U$S 24<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="12" aria-label="page3">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424395458-guardabaros-para-trailers-en-fibra-de-vidrio-los-mejores-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:12]">
                                            Guardabaros Para Trailers En Fibra De Vidrio. Los Mejores</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424395458-guardabaros-para-trailers-en-fibra-de-vidrio-los-mejores-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:12]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/1836-MLU4191352552_042013-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 1.200<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="13" aria-label="page4">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-425374456-fenders-para-nissan-d21-doble-cabina-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:13]">
                                            Fenders Para Nissan D21 Doble Cabina.</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-425374456-fenders-para-nissan-d21-doble-cabina-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:13]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/1633-MLU28294572_764-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 700<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="14" aria-label="page4">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424712863-trailer-carro-kit-estruc-pre-armada-eje-completo-chasis-0k-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:14]">
                                            Trailer Carro Kit Estruc Pre Armada Eje Completo + Chasis 0k</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424712863-trailer-carro-kit-estruc-pre-armada-eje-completo-chasis-0k-_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:14]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s1-p.mlstatic.com/571001-MLU20251520628_022015-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 9.490<sup>
                                            00</sup>
                                    </p>
                                </li>
                                <li id="MI" class="ch-carousel-item" role="listitem" style="height: 229.286666666667px; width: 163px; margin-right: 17px;" aria-hidden="true" aria-setsize="15" aria-posinset="15" aria-label="page4">
                                    <h3>
                                        <a class="title titleRecommended" href="http://articulo.mercadolibre.com.uy/MLU-424418872-tablero-modelo-nuevo-de-reno-trafic--_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:15]">
                                            Tablero Modelo Nuevo De Reno Trafic !!!!</a>
                                    </h3>
                                    <a href="http://articulo.mercadolibre.com.uy/MLU-424418872-tablero-modelo-nuevo-de-reno-trafic--_JM#D[S:VIP,L:RECOMMENDED_ITEMS,V:15]" class="imgProd imgProdRecommended">
                                        <img src="http://mlu-s2-p.mlstatic.com/9434-MLU20015987438_122013-G.jpg" width="120" height="120">
                                    </a>
                                    <p class="ch-price price">
                                        $ 1.200<sup>
                                            00</sup>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="ch-carousel-next ch-user-no-select" role="button" aria-hidden="false">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="meli-ads-vip-bottom">
    </div>
    <div id="ml_layer">
    </div>
    <footer class="ml-footer" role="contentinfo">
        <div class="ml-inner-footer">
            <h4 id="footerControl" class="ml-footer-control">
                Más información<i class="ch-icon-chevron-up">
                </i>
            </h4>
            <div id="footerAccess" class="ml-footer-access ch-hide">
                <div class="ch-g1-5">
                    <h5>
                        Acerca de</h5>
                    <ul>
                        <li>
                            <a href="http://institucional.mercadolibre.com/" data-tracking="FOOTER-INSTITUCIONAL">
                                MercadoLibre</a>
                        </li>
                        <li>
                            <a href="http://investor.mercadolibre.com" data-tracking="FOOTER-INVESTOR">
                                Investor relations</a>
                        </li>
                        <li>
                            <a href="http://www.mercadolibre.com.uy/sitemap.html" data-tracking="FOOTER-SITEMAP">
                                Mapa del sitio</a>
                        </li>
                        <li>
                            <a href="http://tendencias.mercadolibre.com.uy/" data-tracking="FOOTER-TENDENCIAS">
                                Tendencias</a>
                        </li>
                    </ul>
                </div>
                <div class="ch-g1-5">
                    <h5>
                        Ayuda</h5>
                    <ul>
                        <li>
                            <a href="http://ayuda.mercadolibre.com.uy/articulo/comprar-un-producto-1337029481860-000001241" data-tracking="FOOTER-HELPCOMPRAR">
                                Comprar</a>
                        </li>
                        <li>
                            <a href="http://ayuda.mercadolibre.com.uy/categoria/vender-sell" data-tracking="FOOTER-HELPVENDER">
                                Vender</a>
                        </li>
                        <li>
                            <a href="http://ayuda.mercadolibre.com.uy/contacto" data-tracking="FOOTER-HELPCONTACTO">
                                Resolución de problemas</a>
                        </li>
                        <li>
                            <a href="http://ayuda.mercadolibre.com.uy/categoria/seguridad-seg" data-tracking="FOOTER-HELPSEGURIDAD">
                                Centro de Seguridad</a>
                        </li>
                    </ul>
                </div>
                <div class="ch-g1-5">
                    <h5>
                        Mi cuenta</h5>
                    <ul>
                        <li id="f-login" class="ch-hide">
                            <a rel="nofollow" href="https://www.mercadolibre.com/jms/mlu/lgz/login" data-tracking="FOOTER-INGRESAR">
                                Ingresar</a>
                        </li>
                        <li id="f-account" class="">
                            <a rel="nofollow" href="http://myaccount.mercadolibre.com.uy/summary/" data-tracking="FOOTER-RESUMEN">
                                Resumen</a>
                        </li>
                        <li id="f-bookmarks" class="">
                            <a rel="nofollow" href="http://myaccount.mercadolibre.com.uy/bookmarks/list" data-tracking="FOOTER-FAVORITES">
                                Favoritos</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="http://syi.mercadolibre.com.uy/sell" data-tracking="FOOTER-VENDER">
                                Vender</a>
                        </li>
                    </ul>
                </div>
                <div class="ch-g1-5">
                    <h5>
                        Redes sociales</h5>
                    <ul>
                        <li>
                            <a href="https://twitter.com/Mercadolibre" data-tracking="FOOTER-TWITTER">
                                <i class="ml-icon twitter">
                                </i>
                                Twitter</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/MercadoLibre" data-tracking="FOOTER-FACEBOOK">
                                <i class="ml-icon facebook">
                                </i>
                                Facebook</a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+MercadoLibre" data-tracking="FOOTER-GOOGLE">
                                <i class="ml-icon plus">
                                </i>
                                Google +</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ml-footer-legal">
                Copyright © 1999-2015 DeRemate.com de Uruguay S.A.	<ul class="ml-links">
                    <li>
                        <a href="http://www.mercadolibre.com.uy/seguro_terminos.html" data-tracking="FOOTER-TERMINOS">
                            Términos y condiciones</a>
                    </li>
                    <li>
                        <a href="http://www.mercadolibre.com.uy/seguro_privacidad.html" data-tracking="FOOTER-PRIVACIDAD">
                            Políticas de privacidad</a>
                    </li>
                    <li>
                        <a href="http://ayuda.mercadolibre.com.uy/" data-tracking="FOOTER-AYUDA">
                            Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--/div-->


    <noscript>
    </noscript>
</div>
<script type="text/javascript" id="" src="http://static.criteo.net/js/ld/ld.js">
</script>
</body>
</html>
