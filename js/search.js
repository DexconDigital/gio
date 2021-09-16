
    var res_global;
$(document).ready(function () {
    //guarda el id de los departamentos
    var res = new Array();
    //peticion departamentos
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823")
            );
        },
        dataType: "html",
        success: function (data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    //peticion ciudades
                    $.ajax({
                        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
                        type: "GET",
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader(
                                "Authorization",
                                "Basic " +
                                btoa("Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823")
                            );
                        },
                        dataType: "json",
                        success: function (data) {

                           var resultado = '';
                            var informacion = (data);
                            var ciudad = localStorage.getItem("ciudad");
                            for (var i = 0; i < informacion.length; i++) {
                                if (ciudad == informacion[i].id) {
                                    resultado += '<option selected value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>";
                                }
                                else {
                                    resultado += '<option value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>";

                                }
                                
                            }
                            $(".ciudad").append(resultado);
                            res_global+= resultado;
                            consul_2();
                            //console.log("jugada"+res_global);
                            
                        }
                    });
                }
            }
        }
    });


    $(".ciudad").change(function () {
        var res_ciudad = $("#ciudad option:selected").val();
        console.log(res_ciudad);
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823")
                );
            },
            dataType: "json",
            success: function (data) {
                var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
                var informacion = data;
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $(".barrio").append("");
                $(".barrio").html(resultado);
            }
        });
    });

    //get list of properties
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
            var informacion = (data);
            var tipo = localStorage.getItem("tipo");

            for (var i = 0; i < informacion.length; i++) {
                if (tipo == informacion[i].idTipoInm) {

                    resultado +=
                        '<option selected value="' +
                        informacion[i].idTipoInm + '" >' +
                        informacion[i].Nombre +
                        "</option>";
                }
                else {


                    resultado +=
                        '<option value="' +
                        informacion[i].idTipoInm + '">' +
                        informacion[i].Nombre +
                        "</option>";
                }

            }
            $(".inmueble").html(resultado);
        }
    });

    //get list of the transactions
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:iXm8yWWMuRElznQUKY4P3sb5KQ4wrMMK3B2UX8WH-823")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Gestión</option>';
            var operacion = localStorage.getItem("gestion");
            for (var i = 0; i < data.length; i++) {
                    if (operacion == data[i].idGestion) {

                        resultado += '<option selected value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                    else {
                        resultado += '<option value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
            }
            $(".operacion").html(resultado);
        }
    });

   


 

    $(".ciudad").change(function () {
        var res_ciudad = $("#ciudad option:selected").val();
        console.log(res_ciudad);
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588")
                );
            },
            dataType: "json",
            success: function (data) {
                var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
                var informacion = data;
                for (var i = 0; i < informacion.length; i++) {
                    resultado += '<option value="' + informacion[i].id + '">' +
                        informacion[i].nombre +
                        "</option>";
                }

                $(".barrio").append("");
                $(".barrio").html(resultado);
            }
        });
    });

    

    //get list of properties
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
            var informacion = (data);
            var tipo = localStorage.getItem("tipo");

            for (var i = 0; i < informacion.length; i++) {
                if (tipo == informacion[i].idTipoInm) {

                    resultado +=
                        '<option selected value="' +
                        informacion[i].idTipoInm + '" >' +
                        informacion[i].Nombre +
                        "</option>";
                }
                else {


                    resultado +=
                        '<option value="' +
                        informacion[i].idTipoInm + '">' +
                        informacion[i].Nombre +
                        "</option>";
                }

            }
            $(".inmueble").html(resultado);
        }
    });

    //get list of the transactions
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option" value="0">Gestión</option>';
            var operacion = localStorage.getItem("gestion");
            for (var i = 0; i < data.length; i++) {
                    if (operacion == data[i].idGestion) {

                        resultado += '<option selected value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
                    else {
                        resultado += '<option value="' +
                            data[i].idGestion + '">' +
                            data[i].Nombre +
                            "</option>";
                    }
            }
            $(".operacion").html(resultado);
        }
    });




    var ciudad, inmueble, operacion, barrio;
    $(".search").click(function (e) {
        e.preventDefault();
        inmueble = $("#inmueble option:selected").val();
        ciudad = $("#ciudad option:selected").val();
        barrio = $("#barrio option:selected").val();
        operacion = $(".operacion option:selected").val();
        var code = $("#codeInm").val();
        var precio1 = $("#preciomin").val();
        var precio2 = $("#preciomax").val();
        if (code == "" || typeof(code) == "undefined") {
            window.location.href = 'inmuebles.php?gs=' + operacion 
            + '&&ti=' + inmueble + '&&ci=' + ciudad +  '&&ba=' + barrio +
            '&&pre=' + precio1 + '&&pre1=' + precio2 ;
        } else {
            window.location.href = 'detalle_inmueble.php?dt=588-' + code + '';
        }

    });

 


});

function ciudad_api(search){
    // console.log("repo: "+res_global);
    // console.log("a buscar: "+search);

    if(res_global.search(search) != -1){
        return true;
    }
    return false;
    
}
function consul_2(){
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588")
            );
        },
        dataType: "html",
        success: function (data) {
            var datos = data.trim();

            if (datos.localeCompare('"Sin resultados"') == 0) {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = JSON.parse(data);
                for (var i = 0; i < informacion.length; i++) {
                    //peticion ciudades
                    $.ajax({
                        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
                        type: "GET",
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader(
                                "Authorization",
                                "Basic " +
                                btoa("Authorization:Q94xlnPYlac2ISgyseVDjIZGzxRcvhrtfo9D0pEf-588")
                            );
                        },
                        dataType: "json",
                        success: function (data) {
                            
                            var resultado2 = '';
                            var informacion = (data);
                            var ciudad = localStorage.getItem("ciudad");
                            for (var i = 0; i < informacion.length; i++) {

                                if (ciudad == informacion[i].id) {
                                    if(!ciudad_api(informacion[i].nombre)){
                                        resultado2 += '<option selected value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>"; 

                                        res_global+= resultado2;
                                    }
                                         
                                    
                                }
                                else {
                                    if(!ciudad_api(informacion[i].nombre)){
                                        resultado2 += '<option value="' +
                                        informacion[i].id +
                                        '">' +
                                        informacion[i].nombre +
                                        "</option>";
                                        res_global+= resultado2;
                                    }
                                    

                                }
                            }
                            $(".ciudad").append(resultado2);
                        }
                    });
                }
            }
        }
    });
}