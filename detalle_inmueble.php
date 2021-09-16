<!DOCTYPE html>
<html lang="zxx">
<?php
    $codigo = $_GET["dt"];
    ?>
<?php    
$ch = curl_init();
$headers =  'Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true); ?>

<?php    $ch = curl_init();
$headers =  'Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true); ?>

<?php
    $codigo = 0;
    if (isset($_GET["dt"])){
        $codigo = $_GET["dt"];
    }
?>


<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/properties-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 17:12:31 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5MJCCG');</script>
    <!-- End Google Tag Manager -->
    <title>Detalle de Inmueble</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

	<meta property="title" content="Inmobiliaria Oviedo" />
	<meta property="og:site_name" content="Aprovecha esta espectacular oportunidad " />
	<?php echo '<meta property="og:url" content="http://biinyu.com.co/oviedo/detalle_inmueble.php?dt='.$codigo.'" />';?>
	<?php echo '<meta property="og:type" content="place" />';?>
	<?php echo '<meta name="description" content="Detalle de inmueble de Inmobiliaria Oviedo">';?>
	<meta property="image" content="<?php echo $r["fotos"][0]["foto"];?>" id="metai" />
	<meta property="og:image" content="<?php echo $r["fotos"][0]["foto"];?>" id="metai" />
	<?php echo '<meta property="og:title" content="Inmobiliaria Oviedo" />';?>
	<?php echo '<meta property="og:description" id="metap" content="Aprovecha esta espectacular oportunidad "/>';?>

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
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
    <link rel="shortcut icon" href="images/gio.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

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
<body >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5MJCCG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
    <br><br><br>
<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="margin-top: 12%;">
              
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3 id="ciudad"></h3>
                        <p>
                             <h4 class="ubicacion"><i class="fa fa-map-marker"></i></h4>
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3 class="precio"></h3>
                        <h5><span class="code"></span></h5>
                    </div>
                </div>

                <!-- Properties details section start -->
                <div class="sidebar-widget mb-40">
                    <!-- Properties detail slider start -->
                    <div class="owl-carousel owl-theme" id="micarrou">

                    </div>
                    <!-- Properties detail slider end -->
                    
                    <!-- Advanced search start -->
                    <div class="advabced-search hidden-lg hidden-md">
                        <div class="main-title-2">
                            <h1><span>Propiedades</span> Similares</h1>
                        </div>
                        
                        <div class="similarListing"></div>
                       
                    </div>
                    <!-- Advanced search end -->

                    <!-- Properties description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Descripción </a></li>
                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Exterior</a></li>
                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Interior</a></li>
            
                            
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2">
                                            <h1><span>Descripción</span></h1>
                                        </div>
                                        <p id="descripcion"></p>
                                        
                                    </div>
                                    <div class="tab-pane fade features" id="tab2default">
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                            <div class="main-title-2">
                                                <h1><span>Exterior</span></h1>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Alcobas: <span class="alcobas"></span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Baños: <span class="banios"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Área: <span class="area"></span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Estrato: <span class="estrato"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Garajes: <span class="garajes"></span>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                               

                                            </div>
                                        </div>
                                        <!-- Properties condition end -->
                                    </div>
                                    <div class="tab-pane fade technical" id="tab3default">
                                        <!-- Properties amenities start -->
                                        <div class="properties-amenities">
                                            <div class="main-title-2">
                                                <h1><span>Interior</span></h1>
                                            </div>
                                            <div class="row">                                               
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <span id="details-2"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties amenities end -->
                                    </div>
            
                                    <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2">
                                                <h1><span>Video</span></h1>
                                            </div>
                                            <div></div>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Properties description end -->

                    
                </div>
                <!-- Properties details section end -->


                <!-- Location start -->
                <section  id="mapa">
                    <div class="location sidebar-widget" id="mapa">
                    <div class="map">
                        <div class="main-title-2" >
                            <h1><span>Ubicación</span></h1>
                        </div>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                </section>
                
                <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right" style="margin-top: 40%;">
                    <!-- Search contents sidebar start -->
                    <div class="sidebar-widget hidden-sm hidden-xs">
                        <div class="main-title-2">
                            <h1><span>Propiedades </span> Similares</h1>
                        </div>
                        <div class="similarListing"></div>
                    </div>
                    <!-- Search contents sidebar end -->

                    
                   

                    <!-- Inside properties start  -->
                    <div class="inside-properties sidebar-widget">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Vídeo de la </span> Propiedad</h1>
                        </div>
                        <div class="video"></div>
                    </div>
                    <!-- Social media start -->
                     <div class="social-media sidebar-widget clearfix">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Redes</span> Sociales</h1>
                        </div>
                        <h5>COMPARTIR EN</h5>
                        <!-- Social list -->
                        <ul class="social-list">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://biinyu.com.co/oviedo/detalle_inmueble.php?dt=<?php echo $codigo;?>"
                             target="_blank" style="background: #3b589e;" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a alt="twitter" href="https://twitter.com/?status=Me encanta este Inmueble de http://biinyu.com.co/oviedo/detalle_inmueble.php?dt=<?php echo $codigo;?>" target="_blank" style="background: #56d7fe;" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a  alt="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=http://biinyu.com.co/oviedo/detalle_inmueble.php?dt=<?php echo $codigo;?>"  style="background: #1c82ca;" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a  alt="whatsapp" href="whatsapp://send?text=http://biinyu.com.co/oviedo/detalle_inmueble.php?dt=<?php echo $codigo;?>"
                            data-action="share/whatsapp/share"  style="background: #71c927" class="linkedin-bg"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a alt="imprimir" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=<?php echo $codigo;?>" title="Imprimir" target="_blank"><i style="color: black;" class="fa fa-print"></i></a></li>
                        </ul>
                    </div>

                    <!-- Helping center start -->
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="main-title-2">
                            <h1><span>Contacto con</span> asesor</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                
                                <p>
                                    <a href="tel:604 444 6913" alt="telefono">Telefono: (PBX) (604) 444 6913</a>
                                </p>
                                <p>
                                    <a href="tel:+57 301 238 83 31" alt="celular">Celular: +57 301 238 83 31</a>
                                </p>
                            </div>
                        </div>
                        <div class="media mb-0">
                            <div class="media-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                               
                                <p>
                                    <a href="mailto:info@grupoinmobiliariooviedo.com" alt="email" >info@grupoinmobiliariooviedo.com</a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <!-- Mortgage calculator start -->
                    <div class="sidebar-widget contact-1 mortgage-calculator">
                        <div class="main-title-2">
                            <h1><span>Contacto</span></h1>
                        </div>
                        <div class="contact-form">
                            <form action="js/mailDetalles.php" id="validar" method="POST" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Nombre:</label>
                                            <input type="text" name="nombre" id="nombre" class="input-text" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Correo electrónico:</label>
                                            <input type="email" name="email" id="email" class="input-text" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Teléfono:</label>
                                            <input type="number" name="telefono" id="telefono" class="input-text" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12" >
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-text" name="mensaje" id="mensaje" placeholder="Escribe un mensaje"></textarea>
                                        </div>
                                        <input type="checkbox"  name="acepto_chk" id="acepto_chk"  class="chk" />
                          
                                <p style="font-size: 12px; display: contents;">Acepto la Política de tratamiento de datos e información privilegiada de las Inmobiliarias
                                        <a href="Politica_de_tratamiento_de_datos_e_información_privilegiada_BYE.pdf"> Bodegas Espacioss</a> y
                                        <a href="Politica_de_tratamiento_de_datos_e_información_privilegiada_inmobiliaria_oviedo..pdf"> Oviedo.</a> <p>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button  type="button" class="search-button">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
                <!-- Sidebar end -->
            </div>
        </div>

        
        
    </div>
</div>
<!-- Properties details page end -->



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
<script src="js/app.js"></script>
<script src="js/similar.js"></script>
<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl.carousel.js"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<!--------------------------------- Inicio detalle de inmueble---------- -->

<?php echo "<script> var codeInm ='" . $codigo . "';</script>"; ?>

	<script type="text/javascript">
    var URLsearch = window.location.search;
    // URLsearch = URLsearch.replace(/\D/g,'');
    var div =   URLsearch.split("=");
    var numero = div[1];
    var div2= numero.split("-");
    var pre_numero = div2[0];
    var code = div2[1];
	var latitud = 0;
    var longitud = 0;

        if(pre_numero == "588"){
            $.ajax({
			url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
			async: true,
			type: "GET",
			dataType: "json",
			beforeSend: function (xhr) {
				xhr.setRequestHeader(
					"Authorization",
					'Basic ' + btoa('Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588')
				);
			},
			success: function (data) {
				console.log(data)
				if(data.msn == "Inmueble NO Disponible"){
				    
				  
            if(pre_numero == "588"){
                window.location.href = 'detalle_inmueble.php?dt=823-' + code + '';
            }else{
                openModal();
            }
                        
                        return;
                    }
				var j = 1;
				var carrousel = '';
				if(data.fotos == undefined){
				    carrousel += '<div class="item">' +
					'<img class="image-responsive" src="images/no_image.png" alt="" />' +
					'</div>';
				}
				else if (data.fotos.length == 1) {
					carrousel += '<div class="item">' +
					'<img class="image-responsive" src="' + data.fotos[0].foto + '" alt="" />' +
					'</div>';
				} else {
					
					for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
						carrousel += '<div class="item">' +
						'<img class="image-responsive" src="' + data.fotos[y].foto + '" alt="" />' +
						'</div>';
					}
				}
                
                
                window.localStorage.setItem("codigo",data.idInm);
                window.localStorage.setItem("gestion",data.Gestion);
                $("#ciudad").append(data.ciudad);
                $(".precio").append("$ " + data.precio);
				$(".ubicacion").append(" " + data.barrio + ", " + data.ciudad);
				$(".alcobas").append(data.alcobas);
				$(".banios").append(data.banos);
				$(".garajes").append(data.garaje);
				$(".area").append(data.AreaConstruida + " mts<sup>2</sup>");
				$(".code").append(data.idInm);
				$(".estrato").append(data.Estrato);
				$(".administracion").append(data.Administracion);
				$(".venta").append("$ " + data.ValorVenta);
				$("#tipos").append(data.Tipo_Inmueble + " En " + data.Gestion);
                $(".gestion").html('<i class="fa fa-home"></i> ' + data.Gestion + '');
                

                var j = 1;
                        var carrousel = '';
                        if (data.fotos == undefined) {
                            carrousel += '<div class="item active">' +
                                    '<img src="images/no_image.png" alt=""  class="thumb-preview"/>'+
                                    '</div>';
                        } else {
                            carrousel += '<div class="item active">' +
                                    '<img src="' + data.fotos[0].foto + '" alt="" style="height: 400px;"  class="thumb-preview img-responsive img-h"/>'+
                                '</div>';

                            for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                                if (data.fotos[y].foto != undefined) {
                                    carrousel += '<div class="item ">' +
                                    '<img src="' + data.fotos[y].foto + '" alt="" style="height: 400px;"  class="thumb-preview img-responsive img-h"/>'+
                                        '</div>';
                                    j++;
                                }
                            }
                        }

                $("#micarrou").html(carrousel);

                $("#micarrou").owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 10,
                    lazyLoad: true,
                    merge: true,
                    autoplay:true,
                    autoplayTimeout:4000,
                });
                
                $(".tipo").append('<a title="' + data.Tipo_Inmueble + '">' + data.Tipo_Inmueble + '</a>');
                $(".video").append(data.video);
				var res = '';
                                if((data.caracteristicasExternas != undefined) ){
                                    for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                            res+= '<li class="detalle-caracteristicas enabled"><i class="jfont"></i>'+data.caracteristicasExternas[x].Descripcion+'</li>';
                                    }
                                }
                                if(Object.keys(data.caracteristicasExternas).length == 0){
                                    res+= '<li><i class="jfont"></i>Garaje: '+data.garaje+'</li>';
                                }
                    var res1 = '';
                    
                                    if(data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas).length > 0){
                                        for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                                res1+= '<ul class="amenities"><li class="detalle-caracteristicas enabled"><i class="fa fa-check-square"></i>'+data.caracteristicasInternas[x].Descripcion+'</li></ul>';
                                                
                                                       
                                            }
                                    }   
                    $("#descripcion").text(data.descripcionlarga);
                    $("#details-1").append(res);
                    $("#details-2").append(res1);

                    var detallea = '';
                                if((data.asesor[0] == undefined) ){
                                    detallea= '<p class="p1" ><a href="mailto:'+data.inmobiliaria.correo+'" target="_blank" ><i class="fa fa-envelope"></i> '+data.inmobiliaria.correo+'</p></a>'+
                                    '<p class="p1" ><a href="tel:'+data.inmobiliaria.telefono+'" target="_blank"><i class="fa fa-phone"></i> '+data.inmobiliaria.telefono+'</p></a>';
                                }
                                else{
                                    detallea+= '<p class="p1" >'+data.asesor[0].ntercero+'</p>'+
                                                '<p class="p1" ><a href="mailto:'+data.asesor[0].correo+'" target="_blank"  ><i class="fa fa-envelope" ></i> '+data.asesor[0].correo+'</p></a>'+
                                                '<p class="p1" ><a href="tel:'+data.asesor[0].celular+'" target="_blank"  ><i class="fa fa-phone" ></i> '+data.asesor[0].celular+'</p></a>';
                                }
                    
                    $(".detalle-asesor").append(detallea);   

				latitud = data.latitud;
				longitud = data.longitud;
				if (typeof (Storage) !== "undefined") {
					window.localStorage.setItem("codigo", data.idInm)

					window.localStorage.setItem("gestion", data.Tipo_Inmueble)
					localStorage.setItem("latitud", latitud);
					localStorage.setItem("longitud", longitud);

				} else {
					document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
				}

				initMap(latitud, longitud);
			},
			error: function (data) {
				console.log("Fail");
			}
		});

		function initMap(latitud, longitud) {
			var uluru = {
				lat: parseFloat(latitud),
				lng: parseFloat(longitud)
			};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 17,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
		function openModal() {
            $("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                '<div class="modal-dialog" role="document">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                '<h4 class="modal-title" id="myModalLabel">Descripción del inmueble</h4>' +
                '</div>' +
                '<div class="modal-body">' +
                'El inmueble no existe' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>');

            $("#myModal").modal('show');
            setTimeout(() => {
                redirect();
            }, 2000);
        }
        function redirect() {
            window.history.back();
        }
        }else{
            $.ajax({
			url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
			async: true,
			type: "GET",
			dataType: "json",
			beforeSend: function (xhr) {
				xhr.setRequestHeader(
					"Authorization",
					'Basic ' + btoa('Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823')
				);
			},
			success: function (data) {
				console.log(data)
				if(data.msn == "Inmueble NO Disponible"){
				        if(pre_numero == "588"){
                window.location.href = 'detalle_inmueble.php?dt=823-' + code + '';
            }else{
                openModal();
            }
                        //openModal();
                        return;
                    }
				var j = 1;
				var carrousel = '';
				if(data.fotos == undefined){
				    carrousel += '<div class="item">' +
					'<img class="image-responsive" src="images/no_image.png" alt="" />' +
					'</div>';
				}
				else if (data.fotos.length == 1) {
					carrousel += '<div class="item">' +
					'<img class="image-responsive" src="' + data.fotos[0].foto + '" alt="" />' +
					'</div>';
				} else {
					
					for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
						carrousel += '<div class="item">' +
						'<img class="image-responsive" src="' + data.fotos[y].foto + '" alt="" />' +
						'</div>';
					}
				}
                
                
                window.localStorage.setItem("codigo",data.idInm);
                window.localStorage.setItem("gestion",data.Gestion);
                $("#ciudad").append(data.ciudad);
                $(".precio").append("$ " + data.precio);
				$(".ubicacion").append(" " + data.barrio + ", " + data.ciudad);
				$(".alcobas").append(data.alcobas);
				$(".banios").append(data.banos);
				$(".garajes").append(data.garaje);
				$(".area").append(data.AreaConstruida + " mts<sup>2</sup>");
				$(".code").append(data.idInm);
				$(".estrato").append(data.Estrato);
				$(".administracion").append(data.Administracion);
				$(".venta").append("$ " + data.ValorVenta);
				$("#tipos").append(data.Tipo_Inmueble + " En " + data.Gestion);
                $(".gestion").html('<i class="fa fa-home"></i> ' + data.Gestion + '');
                

                var j = 1;
                        var carrousel = '';
                        if (data.fotos == undefined) {
                            carrousel += '<div class="item active">' +
                                    '<img src="images/no_image.png" alt=""  class="thumb-preview"/>'+
                                    '</div>';
                        } else {
                            carrousel += '<div class="item active">' +
                                    '<img src="' + data.fotos[0].foto + '" alt="" style="height: 400px;"  class="thumb-preview img-responsive img-h"/>'+
                                '</div>';

                            for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                                if (data.fotos[y].foto != undefined) {
                                    carrousel += '<div class="item ">' +
                                    '<img src="' + data.fotos[y].foto + '" alt="" style="height: 400px;"  class="thumb-preview img-responsive img-h"/>'+
                                        '</div>';
                                    j++;
                                }
                            }
                        }

                $("#micarrou").html(carrousel);

                $("#micarrou").owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 10,
                    lazyLoad: true,
                    merge: true,
                    autoplay:true,
                    autoplayTimeout:4000,
                });
                

                
                $(".tipo").append('<a title="' + data.Tipo_Inmueble + '">' + data.Tipo_Inmueble + '</a>');
                $(".video").append(data.video);
				var res = '';
                                if((data.caracteristicasExternas != undefined) ){
                                    for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                            res+= '<li class="detalle-caracteristicas enabled"><i class="jfont"></i>'+data.caracteristicasExternas[x].Descripcion+'</li>';
                                    }
                                }
                                if(Object.keys(data.caracteristicasExternas).length == 0){
                                    res+= '<li><i class="jfont"></i>Garaje: '+data.garaje+'</li>';
                                }
                    var res1 = '';
                    
                                    if(data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas).length > 0){
                                        for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                                res1+= '<ul class="amenities"><li class="detalle-caracteristicas enabled"><i class="fa fa-check-square"></i>'+data.caracteristicasInternas[x].Descripcion+'</li></ul>';
                                                
                                                       
                                            }
                                    }   
                    $("#descripcion").text(data.descripcionlarga);
                    $("#details-1").append(res);
                    $("#details-2").append(res1);

                    var detallea = '';
                                if((data.asesor[0] == undefined) ){
                                    detallea= '<p class="p1" ><a href="mailto:'+data.inmobiliaria.correo+'" target="_blank" ><i class="fa fa-envelope"></i> '+data.inmobiliaria.correo+'</p></a>'+
                                    '<p class="p1" ><a href="tel:'+data.inmobiliaria.telefono+'" target="_blank"><i class="fa fa-phone"></i> '+data.inmobiliaria.telefono+'</p></a>';
                                }
                                else{
                                    detallea+= '<p class="p1" >'+data.asesor[0].ntercero+'</p>'+
                                                '<p class="p1" ><a href="mailto:'+data.asesor[0].correo+'" target="_blank"  ><i class="fa fa-envelope" ></i> '+data.asesor[0].correo+'</p></a>'+
                                                '<p class="p1" ><a href="tel:'+data.asesor[0].celular+'" target="_blank"  ><i class="fa fa-phone" ></i> '+data.asesor[0].celular+'</p></a>';
                                }
                    
                    $(".detalle-asesor").append(detallea);   

				latitud = data.latitud;
				longitud = data.longitud;
				if (typeof (Storage) !== "undefined") {
					window.localStorage.setItem("codigo", data.idInm)

					window.localStorage.setItem("gestion", data.Tipo_Inmueble)
					localStorage.setItem("latitud", latitud);
					localStorage.setItem("longitud", longitud);

				} else {
					document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
				}

				initMap(latitud, longitud);
			},
			error: function (data) {
				console.log("Fail");
			}
		});

		function initMap(latitud, longitud) {
			var uluru = {
				lat: parseFloat(latitud),
				lng: parseFloat(longitud)
			};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 17,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}
		function openModal() {
            $("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                '<div class="modal-dialog" role="document">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                '<h4 class="modal-title" id="myModalLabel">Descripción del inmueble</h4>' +
                '</div>' +
                '<div class="modal-body">' +
                'El inmueble no existe' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>');

            $("#myModal").modal('show');
            setTimeout(() => {
                
            }, 2000);
        }
       
        }

        


		
    </script>
    
<!---------------------------------- fin detalle de inmueble ------------------->



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>

</body>

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/nest/properties-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 17:12:31 GMT -->
</html>