

(function ($) {
    "use strict";

    var menu =      '<nav class="navbar navbar-default">'+
                    '<div class="navbar-header n-head" >'+
                    '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation"  aria-expanded="false">'+
                    '<span class="sr-only">Toggle navigation</span>'+
                    '<span class="icon-bar"></span>'+
                    '<span class="icon-bar"></span>'+
                    '<span class="icon-bar"></span>'+
                    '</button>'+
                    '<a href="index.html" >'+
                    '<img src="images/gio.png" alt="logoti" class="log">'+
                    '</a>'+
                    '</div>'+
                '<div class="collapse navbar-collapse fixed-top" id="app-navigation" role="navigation">'+
                '<ul class="nav navbar-nav">'+
                '<li>'+
                '<a href="index.html">Inicio</a>'+
                '</li>'+
                '<li>'+
                '<a href="quienes_somos.html">Quiénes somos</a>'+
                '</li>'+
                '<li>'+
                '<a href="servicios.html">Servicios</a>'+
                '</li>'+
                '<li>'+
                '<a href="inmuebles.php">Inmuebles</a>'+
                '</li>'+
                '<li>'+
                '<a href="contactanos.html">Contáctenos</a>'+
                '</li>'+
                '</ul>'+
                '<ul class="nav navbar-nav navbar-right ">'+
                '<li>'+
                '<a href="https://www.placetopay.com/grupoinmobiliariooviedo/" target="h_blank" class="button fixed-top" >'+
                '<img src="img/logos/pse.png" alt="pse" style="width:60px; height: 60px; ">'+
                '</a>'+
                '</li>'+
                '</ul>'+
                '</div>'+
                '</nav>';

    $(".menu-ppal").html(menu);
   
})
(jQuery);



(function ($) {
    "use strict";
    var bus = '<div class="col-lg-4 col-md-4 col-xs-12 ">'+
    '<div class="sidebar-widget">'+
        '<div class="main-title-2">'+
            '<h1><span>Buscador de</span> Inmuebles</h1>'+
        '</div>'+
        '<form method="GET">'+
            '<div class="row">'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group ">'+
                    '<select class="form-control ciudad" data-placeholder="Ciudad">'+               
            '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group ">'+
                    '<select class="form-control barrio" data-placeholder="Barrio">'+
                    '<option value="">Barrio</option>'+
                    '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group">'+
                    '<select class="form-control inmueble"  data-placeholder="Tipo de Inmueble"> '+              
            '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group">'+
                    '<select class="form-control operacion" id="operacion" data-placeholder="Gestión">'+

                    '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group">'+
                        '<input type="number" class="form-control search-fields precio-1"'+
                            'id="preciomin" placeholder="Precio mínimo">'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group">'+
                        '<div class="form-group">'+
                            '<input type="number" class="form-control search-fields precio-2"'+
                                'id="preciomax" placeholder="Precio máximo">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
                    '<div class="form-group ">'+
                        '<div class="form-group">'+
                            '<input type="text" name="location"'+
                                'class="form-control search-fields codeInm"'+
                                'placeholder="Código" id="codeInm">'+
                            '<div class="form-control-large">'+

                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
            '<div class="form-group mb-0">'+
                '<button class="search-button search">Buscar</button>'+
            '</div>'+
        '</form>'+
    '</div>'+
'</div>';

    $('.buscador').append(bus);

})
(jQuery);

function valid() {
    
    if (document.getElementById("acepto_chk").checked==false){
        alert("Hay que aceptar la Política de Tratamiento de Datos");
        
        checkBox.focus();
        return false;
    }else{
    	alert("Política de Tratamiento de Datos aceptados correctamente");
    	document.getElementById("validar").submit();
    	
    }
    
    return false;
    }