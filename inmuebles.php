<!DOCTYPE html>
<html lang="zxx">
<?php
    $gs = (isset($_GET["gs"]) && $_GET["gs"]!="") ?  $_GET["gs"] : 0;
    $ti = (isset($_GET["ti"]) && $_GET["ti"]!="") ?  $_GET["ti"] : 0;
    $ci = (isset($_GET["ci"])  && $_GET["ci"]!="") ?  $_GET["ci"] : 0;
    $ba = (isset($_GET["ba"]) && $_GET["ba"]!="") ?  $_GET["ba"] : 0;
	$pre = (isset($_GET["pre"]) && $_GET["pre"]!="") ?  $_GET["pre"] : 0;
	$pre1 = (isset($_GET["pre1"]) && $_GET["pre1"]!="") ?  $_GET["pre1"] : 0;


?>


<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/properties-grid-rightside.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 17:11:59 GMT -->

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5MJCCG');</script>
    <!-- End Google Tag Manager -->
    <title>Inmuebles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
        <link rel="stylesheet" href="css/leaflet.css" type="text/css">
        <link rel="stylesheet" href="css/map.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
        <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
        <link rel="stylesheet" type="text/css"  href="css/magnific-popup.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/gio.png" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body onload="imprimir(1)">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5MJCCG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Top header start -->
    <header class="top-header hidden-xs top" style="height: 100px;">
        <div class="container">
            <div class="row" style="margin-top:13px;">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0px 2px;">
                    <div class="list-inline" style="color: #daa520">
                        <i class="fa fa-map-marker"></i> Carrera 50 ff No 8 sur – 27 oficina 414 edificio
                        808 empresarial
                        <a href="tel:604 444 6913" style="color: #daa520"><i class="fa fa-phone"></i>(604) 444 6913</a>
                        <a href="mailto:info@grupoinmobiliariooviedo.com" style="color: #daa520"><i class="fa fa-envelope"></i>info@grupoinmobiliariooviedo.com</a>
                         <a href="tel:3012388331" style="color: #daa520"><img src="images/celular.png"> 3012388331 </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <ul class="top-social-media pull-right">
                    <li>
                            <a href="https://es-la.facebook.com/wwwinmobiliariaoviedo.co/" class="facebook">
                               <img src="images/facebook.png">  
                            </a>
                        </li>
                        <li>
                            <a href="https://es-la.facebook.com/wwwinmobiliariaoviedo.co/" class="facebook">
                                <img src="images/instagram.png">
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Top header end -->

    <!-- Main header start -->
    <header class="main-header top_m">
        <div class="container menu-ppal">

        </div>
    </header>
    <!-- Main header end -->

    <!-- Sub banner start -->
    <div class="sub-banner overview-bgi">
        <div class="overlay mt-100">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Inmuebles</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Inicio</a></li>
                        <li class="active">Inmuebles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <br><br>
    <!-- Properties section body start -->
    <div class="properties-section content-area">
        <div class="container">
            <div class="row">
                <div class="buscador" style="display: none"></div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                   
                    <div class="clearfix"></div>

                    <div class="row inmb" id="inmb">

                    </div>
                    <div class="row inmb2" >

                    </div>
                    <!-- Page navigation start -->
                    <nav aria-la="Page navigation">

                    <ul class="pagination">
							<div class="pagina"></div>
							<li id="anterior">
								<a href="#" id="banterior" onclick="paginator('ant')">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li id="siguiente" style="display: inline !important;">
								<a href="#" id="bsiguiente" onclick="paginator('sig')">
                                     <span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
                       
                    </nav>
                    <!-- Page navigation end-->
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 buscar-i">
                    <!-- Search contents sidebar start -->
                    <div class="sidebar-widget">
                        <div class="main-title-2">
                            <h1><span>Buscador de</span> Inmuebles</h1>
                        </div>

                        <form method="GET">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group ">
                                    <select class="form-control ciudad" id="ciudad" data-placeholder="Ciudad">
                                    <option class="bs-title-option"  value="0">Ciudad</option>
								
							</select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group ">
                                    <select class="form-control barrio" id="barrio" data-placeholder="Barrio">
                                    <option value="">Barrio</option>

                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                    <select class="form-control inmueble" id="inmueble"  data-placeholder="Tipo de Inmueble">
								
							</select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                    <select class="form-control operacion" id="operacion"  data-placeholder="Gestión">

						        	</select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control search-fields preciomin" id="preciomin"
                                            placeholder="Precio mínimo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="number" class="form-control search-fields preciomax" id="preciomax"
                                                placeholder="Precio máximo">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group ">
                                        <div class="form-group">
                                            <input type="text" name="codeInm"
                                                class="form-control search-fields codeInm"
                                                id="codeInm" placeholder="Código">
                                            <div class="form-control-large">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group mb-0">
                                <button class="search-button search">Buscar</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- properties section end -->



    <!-- Copy right start -->
           <div class="copy-right">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12">
                    &copy;Copyright 2019 <a href="http://themevessel.com/" target="_blank">Dexcon Digital</a>. 
                    <!--Todos los derechos reservados. Política de tratamiento de datos e información privilegiada de las Inmobiliarias-->
                    <!-- <a href="Politica_de_tratamiento_de_datos_e_información_privilegiada_BYE.pdf"> Bodegas</a> y-->
                    <!-- <a href="Politica_de_tratamiento_de_datos_e_información_privilegiada_inmobiliaria_oviedo..pdf"> Oviedo.</a>-->
               

                </div>

            </div>
        </div>
    </div>
    <!-- Copy end right-->

	<?php echo '<script>var gs = ' . $gs . '</script>'; ?>
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
    <?php echo '<script>var ci = ' . $ci . '</script>'; ?>
    <?php echo '<script>var ba = ' . $ba . '</script>'; ?>
    <?php echo '<script>var pre = ' . $pre . '</script>'; ?>
    <?php echo '<script>var pre1 = ' . $pre1 . '</script>'; ?>
    
        <script>
    if (typeof(Storage) !== "undefined") {
    // Store
    localStorage.setItem("gestion", gs);
    localStorage.setItem("ciudad", ci);
    localStorage.setItem("tipo", ti);
    localStorage.setItem("barrio", ba);
    localStorage.setItem("precio", pre);
    localStorage.setItem("precio1", pre1);
    
    } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
        
    </script>



    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-submenu.js"></script>
    <script src="js/rangeslider.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet-providers.js"></script>
    <script src="js/leaflet.markercluster.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/jquery.filterizr.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/maps.js"></script>
    <script src="js/paginador.js"></script>
    <script src="js/search.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    
    <script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/properties-grid-rightside.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 17:12:20 GMT -->

</html>