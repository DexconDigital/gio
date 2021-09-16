var request_count = 0;
var api_flag = false;

function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total2");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }

}

var array1 = [];
var array2 = [];
var array3 = [];
localStorage.getItem("total") == 0;

function imprimir(count) {
    localStorage.setItem("count", count);
    if (localStorage.getItem("gestion") == 0 && localStorage.getItem("ciudad") == 0 && localStorage.getItem("tipo") == 0 && localStorage.getItem("barrio") == 0 && localStorage.getItem("precio") == 0 && localStorage.getItem("precio1") == 0) {
        // Primera conexion
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total2/6/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823'));
            },
            'dataType': "json",
            success: function (data) {


                //asignar los valores de la primera conexion al primer array
                array1 = data.Inmuebles;
                var total1 = data.datosGrales.totalInmuebles;

                // anidar la segunda conexcion
                $.ajax({
                    url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/6/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0',
                    type: 'GET',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader(
                            'Authorization',
                            'Basic ' + btoa(
                                'Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588'
                            ));
                    },
                    'dataType': "json",
                    success: function (data) {


                        // Asignar los valores de la conexion a el segundo array
                        array2 = data.Inmuebles;

                        var total2 = data.datosGrales.totalInmuebles;

                        $.ajax({

                            success: function (array3) {
                                totalinm = total1 + total2;
                                localStorage.setItem("totalinmb", totalinm);

                                array3 = array1.concat(array2);
                                Array.prototype.shuffle = function () {
                                    for (var i = this.length - 1; i > 0; i--) {
                                        var j = Math.floor(i * Math.random());
                                        var tmp = this[j];
                                        this[j] = this[i];
                                        this[i] = tmp;
                                    }
                                    return this;
                                }


                                array3.shuffle();
                                if (array3 == "Sin resultados") {
                                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                                    $("#inmb").append(res);
                                    return;

                                } else {

                                    localStorage.setItem("total2", data.datosGrales.fin);

                                    var res = " ";

                                    res += '<div class="total-inm"><h4>Se han econtrado 14 Inmuebles de ' + localStorage.getItem("totalinmb") + '</h4></div>';

                                    for (var pos = 0; pos < array3.length; pos++) {
                                        res += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">' +
                                            '<div class="property p3">' +
                                            '<div class="property-img">' +
                                            '<div class="property-tag button alt featured">' + array3[pos].Tipo_Inmueble + '</div>' +
                                            '<div class="property-tag button sale">' + array3[pos].Gestion + '</div>';
                                        if (array3[pos].Gestion == "Arriendo") {
                                            res += '<div class="property-price">$ ' + array3[pos].Canon + '</div>';
                                        } else if (array3[pos].Gestion == "Arriendo/Venta") {
                                            res += '<div class="property-price">$' + array3[pos].Venta + '"<br> $"' + array3[pos].Canon + '</div>';
                                        } else {
                                            res += '<div class="property-price">$ ' + array3[pos].Venta + '</div>';
                                        }

                                        if (array3[pos].foto1 != "") {
                                            res += '<img src="' + array3[pos].foto1 + '"  alt="fp" class="img-responsive" style="height: 270px;"> ';
                                        } else {
                                            res += '<img src="images/no_image.png" alt="fp" class="img-responsive">';
                                        }
                                        res += '' +
                                            '<div class="property-overlay"><a href="detalle_inmueble.php?dt=' + array3[pos].Codigo_Inmueble + '" class="overlay-link">' +
                                            '<i class="fa fa-link"></i></a></div>' +
                                            '</div>' +

                                            '<div class="property-content">' +
                                            '<h1 class="title"><a href="detalle_inmueble.php?dt=' + array3[pos].Codigo_Inmueble + '">' + array3[pos].Barrio + '</a></h1>' +
                                            '<h3 class="property-address"><a href="detalle_inmueble.php?dt=' + array3[pos].Codigo_Inmueble + '"><i class="fa fa-map-marker"></i>' + array3[pos].Ciudad + ", " + array3[pos].Departamento + '</a></h3>' +
                                            '<ul class="facilities-list clearfix">' +
                                            '<li><i class="flaticon-uare-layouting-with-black-uare-in-east-area"></i><span>' + array3[pos].AreaConstruida + 'm<sup>2</sup>' + '</span></li>' +
                                            '<li><i class="flaticon-bed"></i><span>' + array3[pos].Alcobas + '</span></li>' +
                                            '<li><i class="flaticon-holidays"></i><span>' + array3[pos].banios + '</span></li>' +
                                            '<li><i class="flaticon-vehicle"></i><span>' + array3[pos].garaje + '</span></li>' +
                                            '<li><span>' + array3[pos].Codigo_Inmueble + '</span></li>' +
                                            '</ul>' +

                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>';


                                    }


                                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total2"));
                                }

                                $("#inmb").html(res)


                            }

                        });

                        paginator()



                    }


                });
                paginator()
            }

        });


    } else {   
        
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/4/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/barrio/' + localStorage.getItem("barrio") + '/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/0/order/0/banios/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588'));
                    
            },
            
            'dataType': "json",
            success: function (data) {
              array1 = data.Inmuebles;
              console.log(data)
                var res = " ";
                var sin_res = "Sin resultados";
                if (data == sin_res) {
                     /*res += '<div class="alert alert-danger"><h4>No hay Inmuebles de Inmobiliaria OVIEDO en esta busqueda</h4></div>';
                    
                    $(".inmb").append(res);
                    $("#siguiente").css("display", "none");*/
                    checkConteoInmuebles(false);
                    return;

                } else {
                   
                    localStorage.setItem("total", data.datosGrales.fin);

                      var res = " ";

                    if (data == "Sin resultados") {
                  
                        localStorage.getItem("bus1", false);
                        $("#inmb").append(res);
                        $("#siguiente").css("display", "none");
                        return;

                    } else {
                       
                        for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                            
                         
                                
                            res += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">' +
                                    '<div class="property p3">' +
                                    '<div class="property-img">' +
                                    '<div class="property-tag button alt featured">' + data.Inmuebles[pos].Tipo_Inmueble + '</div>' +
                                    '<div class="property-tag button sale">' + data.Inmuebles[pos].Gestion + '</div>';
                                if (data.Inmuebles[pos].Gestion == "Arriendo") {
                                    res += '<div class="property-price">$ ' + data.Inmuebles[pos].Canon + '</div>';
                                } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {
                                    res += '<div class="property-price">$' + data.Inmuebles[pos].Venta + '"<br> $"' + data.Inmuebles[pos].Canon + '</div>';
                                } else {
                                    res += '<div class="property-price">$ ' + data.Inmuebles[pos].Venta + '</div>';
                                }

                                if (data.Inmuebles[pos].foto1 != "") {
                                    res += '<img src="' + data.Inmuebles[pos].foto1 + '"  alt="fp" class="img-responsive" style="height: 270px;"> ';
                                } else {
                                    res += '<img src="images/no_image.png" alt="fp" class="img-responsive">';
                                }
                                res += '' +
                                    '<div class="property-overlay"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="overlay-link">' +
                                    '<i class="fa fa-link"></i>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>' +

                                    '<div class="property-content">' +
                                    '<h1 class="title"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Barrio + '</a></h1>' +
                                    '<h3 class="property-address"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><i class="fa fa-map-marker"></i>' + data.Inmuebles[pos].Ciudad + ", " + data.Inmuebles[pos].Departamento + '</a></h3>' +
                                    '<ul class="facilities-list clearfix">' +
                                    '<li><i class="flaticon-uare-layouting-with-black-uare-in-east-area"></i><span>' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup>' + '</span></li>' +
                                    '<li><i class="flaticon-bed"></i><span>' + data.Inmuebles[pos].Alcobas + '</span></li>' +
                                    '<li><i class="flaticon-holidays"></i><span>' + data.Inmuebles[pos].banios + '</span></li>' +
                                    '<li><i class="flaticon-vehicle"></i><span>' + data.Inmuebles[pos].garaje + '</span></li>' +
                                    '<li><span>' + data.Inmuebles[pos].Codigo_Inmueble + '</span></li>' +
                                    '</ul>' +


                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                                    
                            
                        }
                        if (localStorage.getItem("total2") == 0) {
                            $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                        } else {
                            $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                        }

                    }
                    
                   checkConteoInmuebles(true);
                } 

                $(".inmb").html(res)
                $("#siguiente").css({'display':'block;'});
                
            }
            
        });
        paginator();
        
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/4/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/barrio/' + localStorage.getItem("barrio") + '/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/0/order/0/banios/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823'));
                    
            },
            
            'dataType': "json",
            success: function (data) {
              
                console.log(data);
                var res = " ";
                var sin_res = "Sin resultados";
                if (data == sin_res) {
          
                    /*res += '<div class="alert alert-danger"><h4>No hay Inmuebles de bedegas y espacios en esta busqueda</h4></div>';
                    $(".inmb2").append(res);
                    $("#siguiente").css("display", "none");*/
                    checkConteoInmuebles(false);
                    return;

                } else {
                   
                    localStorage.setItem("total", data.datosGrales.fin);

                      var res = " ";

                    if (data == "Sin resultados") {
                  
                        localStorage.getItem("bus1", false);
                        $("#inmb").append(res);
                        $("#siguiente").css("display", "none");
                        return;

                    } else {
                       
                        for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                            
                         
                                
                            res += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">' +
                                    '<div class="property p3">' +
                                    '<div class="property-img">' +
                                    '<div class="property-tag button alt featured">' + data.Inmuebles[pos].Tipo_Inmueble + '</div>' +
                                    '<div class="property-tag button sale">' + data.Inmuebles[pos].Gestion + '</div>';
                                if (data.Inmuebles[pos].Gestion == "Arriendo") {
                                    res += '<div class="property-price">$ ' + data.Inmuebles[pos].Canon + '</div>';
                                } else if (data.Inmuebles[pos].Gestion == "Arriendo/Venta") {
                                    res += '<div class="property-price">$' + data.Inmuebles[pos].Venta + '"<br> $"' + data.Inmuebles[pos].Canon + '</div>';
                                } else {
                                    res += '<div class="property-price">$ ' + data.Inmuebles[pos].Venta + '</div>';
                                }

                                if (data.Inmuebles[pos].foto1 != "") {
                                    res += '<img src="' + data.Inmuebles[pos].foto1 + '"  alt="fp" class="img-responsive" style="height: 270px;"> ';
                                } else {
                                    res += '<img src="images/no_image.png" alt="fp" class="img-responsive">';
                                }
                                res += '' +
                                    '<div class="property-overlay"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="overlay-link">' +
                                    '<i class="fa fa-link"></i>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>' +

                                    '<div class="property-content">' +
                                    '<h1 class="title"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '">' + data.Inmuebles[pos].Barrio + '</a></h1>' +
                                    '<h3 class="property-address"><a href="detalle_inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"><i class="fa fa-map-marker"></i>' + data.Inmuebles[pos].Ciudad + ", " + data.Inmuebles[pos].Departamento + '</a></h3>' +
                                    '<ul class="facilities-list clearfix">' +
                                    '<li><i class="flaticon-uare-layouting-with-black-uare-in-east-area"></i><span>' + data.Inmuebles[pos].AreaConstruida + 'm<sup>2</sup>' + '</span></li>' +
                                    '<li><i class="flaticon-bed"></i><span>' + data.Inmuebles[pos].Alcobas + '</span></li>' +
                                    '<li><i class="flaticon-holidays"></i><span>' + data.Inmuebles[pos].banios + '</span></li>' +
                                    '<li><i class="flaticon-vehicle"></i><span>' + data.Inmuebles[pos].garaje + '</span></li>' +
                                    '<li><span>' + data.Inmuebles[pos].Codigo_Inmueble + '</span></li>' +
                                    '</ul>' +


                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                                    
                            
                        }
                        

                    }
                   checkConteoInmuebles(true);
                }
                if(localStorage.getItem("bus1") == false && localStorage.getItem("bus2") == false){
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                }

                $(".inmb2").html(res)
                

            }
            
        });
        paginator();
        
      
               
    }



}



function checkConteoInmuebles(flag){
    var res = "";
    if(request_count == 0){
        request_count++;
        api_flag = flag;
    }else if(request_count > 0){
        api_flag = (api_flag) ? api_flag : flag;
        if(!api_flag){
            res += '<div class="alert alert-danger"><h4>No hay Inmuebles</h4></div>';
                    
    $(".inmb").append(res);
    $("#siguiente").css("display", "none");
        }
    }
    
}



function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total2");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }

}