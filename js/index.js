setTimeout(function () {
    $.ajax({
        url: 'http://simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limit/10',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588'));
        },
        'dataType': "json",
        success: function (data) {
            var res = "";
            if (data == "Sin resultados") {
                res += '<br><br><h3 style="margin-left: 15px;"> No hay Inmuebles destacados </h3>';
                $(".filtr-container").html(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    res += '<div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; transition: all 0.5s ease-out 0ms; pointer-events: auto;"> ' +
                                            '<div class="property p3">' +
                                            '<div class="property-img">' +
                                            '<div class="property-tag button alt featured">' + data[i].Tipo_Inmueble + '</div>' +
                                            '<div class="property-tag button sale">' + data[i].Gestion + '</div>';
                                        if (data[i].Gestion == "Arriendo") {
                                            res += '<div class="property-price">$ ' + data[i].Canon + '</div>';
                                        } else if (data[i].Gestion == "Arriendo/Venta") {
                                            res += '<div class="property-price">$' + data[i].Venta + '"<br> $"' + data[i].Canon + '</div>';
                                        } else {
                                            res += '<div class="property-price">$ ' + data[i].Venta + '</div>';
                                        }

                                        if (data[i].foto1 != "") {
                                            res += '<img src="' + data[i].foto1 + '"  alt="fp" class="img-responsive" style="height: 270px;"> ';
                                        } else {
                                            res += '<img src="images/no_image.png" alt="fp" class="img-responsive" style="height: 270px;">';
                                        }
                                        res += '' +
                                            '<div class="property-overlay"><a href="detalle_inmueble.php?dt=' + data[i].Codigo_Inmueble + '" class="overlay-link">' +
                                            '<i class="fa fa-link"></i></a></div>' +
                                            '</div>' +

                                            '<div class="property-content">' +
                                            '<h1 class="title"><a href="detalle_inmueble.php?dt=' + data[i].Codigo_Inmueble + '">' + data[i].Barrio + '</a></h1>' +
                                            '<h3 class="property-address"><a href="detalle_inmueble.php?dt=' + data[i].Codigo_Inmueble + '"><i class="fa fa-map-marker"></i>' + data[i].Ciudad + ", " + data[i].Departamento + '</a></h3>' +
                                            '<ul class="facilities-list clearfix">' +
                                            '<li><i class="flaticon-uare-layouting-with-black-uare-in-east-area"></i><span>' + data[i].AreaConstruida + 'm<sup>2</sup>' + '</span></li>' +
                                            '<li><i class="flaticon-bed"></i><span>' + data[i].Alcobas + '</span></li>' +
                                            '<li><i class="flaticon-holidays"></i><span>' + data[i].banios + '</span></li>' +
                                            '<li><i class="flaticon-vehicle"></i><span>' + data[i].garaje + '</span></li>' +
                                            '<li><span>' + data[i].Codigo_Inmueble + '</span></li>' +
                                            '</ul>' +

                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>';
                    i++;
                    if (i > 3) {
                        break;
                    }
                }
            }
            $(".filtr-container").html(res);

        }

    }
    );

});

