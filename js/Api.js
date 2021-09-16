setTimeout(function() {
    $.ajax({
        url: 'http://www.simiinmobiliarias.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limit/1',
        type: 'GET',
        cache: true,
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874'));
        },
        'dataType': "json",
        success: function(data) {
            var res = "";
            if (data == "Sin resultados") {
                res += '<h1 style="color:white"> No hay Inmuebles destacados </h1>';
                $("#property").append(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    res += '<div class="col-sm-6 col-xs-12 col-md-4 listing_grid">' +
                        '<div class="info_content row">' +
                        '<div class="row m0 imageRow">' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" >' ;
                        if(data[i].foto1 ==""){
                            res+='<img class="img-responsive" src="images/no_image.png" alt="" style="width:100%">';    
                        }else{
                            res+='<img class="img-responsive" src="' + data[i].foto1 + '" alt="" style="width:100%">';
                        }
                            
                        
                    if (data[i].Gestion == "Venta") {
                        res += '<div class="saleTag">Venta</div>';
                    } else {
                        res += '<div class="saleTag rentTag">' + data[i].Gestion + '</div>';
                    }
                    res += '</a></div>' +
                        '<div class="row m0 description">' +
                        '<div class="row m0 priceRow">';
                    if (data[i].Gestion == "Venta") {
                        res += '<div class="price fleft">$ ' + data[i].Venta + '</div>';
                    } else {
                        res += '<div class="price fleft">$ ' + data[i].Canon + '</div>';
                    }
                    res += '<i class="fa fa-file-text-o"></i>' +
                        '</div>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="location_link">' +
                        '<h4 class="location">' + data[i].Barrio + '</h4>' +
                        '<h4 class="location" style="margin-left: 60%;margin-top: -12%;">' +'COD: '+ data[i].Codigo_Inmueble + '</h4>' +
                        '<h4 class="location">' + data[i].Tipo_Inmueble + '</h4>' +
                        '</a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-arrows-alt"></i>' + data[i].AreaConstruida + 'm<sup>2</sup></a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bed"></i>' + data[i].Alcobas + '</a>' +
                        '<a href="detalle-propiedad.php?dt=' + data[i].Codigo_Inmueble + '" class="specify_btn"><i  class="fa fa-bath"></i>' + data[i].banios + '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    j++;
                    if (j > 2) {
                        break;
                    }
                }
            }
            $("#property").append(res);

        }

    });
});