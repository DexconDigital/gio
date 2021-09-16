// ARRENDATARIOS

var arren_oviedo = '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro-p">'+
'<h3 class="t-lib">&nbsp;&nbsp;ARRENDATARIOS OVIEDO</h3>'+
'</div>'+
'<iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=588&tipo=2"'+
'frameborder="0" style="width:100%; height: 300px;"></iframe>'+

'<button type="button" onclick="volver2()" class="btn btn-warning btn-md">Regresar</button>'+
'<br>'+
'</div>';

function  A_oviedo(){
    $("#modal-b").css({'display':'none'}); 
    $('.modal-body').append(arren_oviedo);

    
}

var arren_bodega= '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro-p">'+
'<h3 class="t-lib">&nbsp;&nbsp;ARRENDATARIOS BODEGAS Y ESPACIOS</h3>'+
'</div>'+
'<iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=823&tipo=2"'+
'frameborder="0" style="width:100%; height: 300px;"></iframe>'+

'<button type="button" onclick="volver2()" class="btn btn-warning btn-md">Regresar</button>'+
'<br>'+
'</div>';

function  A_bodega(){
    $("#modal-b").css({'display':'none'});
    $('.modal-body').append(arren_bodega);
   
}

// -----------------------------------------------------------------------------------------

// PROPIETARIOS

var pro_oviedo = '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro-p">'+
'<h3 class="t-lib">&nbsp;&nbsp;PROPIETARIOS OVIEDO</h3>'+
'</div>'+
'<iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=588&tipo=1"'+
'frameborder="0" style="width:100%; height: 300px;"></iframe>'+

'<button type="button" onclick="volver3()" class="btn btn-warning btn-md">Regresar</button>'+
'<br>'+
'</div>';

function  P_oviedo(){
    $("#modal-b2").css({'display':'none'});
    $('.body2').append(pro_oviedo);
   
}

var pro_bodega= '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro-p">'+
'<h3 class="t-lib">&nbsp;&nbsp;PROPIETARIOS BODEGAS Y ESPACIOS</h3>'+
'</div>'+
'<iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=823&tipo=1"'+
'frameborder="0" style="width:100%; height: 300px;"></iframe>'+

'<button type="button" onclick="volver3()" class="btn btn-warning btn-md">Regresar</button>'+
'<br>'+
'</div>';

function  P_bodega(){
    $("#modal-b2").css({'display':'none'});
    $('.body2').append(pro_bodega);
    
    
}

function volver2(){
    $('.content-image').css({'display':'none'});
    $("#modal-b").css({'display':'flex'}); 
}
function volver3(){
    $('.content-image').css({'display':'none'});
    $("#modal-b2").css({'display':'flex'});

    
}
// -------------------------------------------------------------------------------------------------

// FORMULARIOS

var arrendatario_o = '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro">'+
'<h3 class="t-lib">&nbsp;&nbsp;Arrendatario</h3>'+
'</div>'+
' <iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=588&tipo=1"'+
'frameborder="0"  style="width: 100%"></iframe>'+

'<button type="button" onclick="volver()" class="btn btn-warning btn-sm">Regresar</button>'+
''+
'</div>';

function  arren_oviedo(){
    $(".prueba").css({'display':'none'});
    $(".")
    $('.modal-body').append(arrendatario_o);
}

/* --------------- PRIMER LOGO ----------------- */

var contentLogo1 = '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
'<div class="t-cuadro">'+
'<h3 class="t-lib">&nbsp;&nbsp;El libertador</h3>'+
'</div>'+
''+
'<a href="http://www.inmobiliariaoviedo.co/assets/docs/Formulario_Persona_Natural.pdf" id="alinear" target="h_blank">'+
'<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal"  >Formulario persona Natural</p></a>'+
''+
'<a href="http://www.inmobiliariaoviedo.co/assets/docs/Formulario_Persona_Juridica.pdf" id="alinear" target="h_blank">'+
'<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal" >Formulario persona Jurídica</p></a>'+
'<button type="button" onclick="volver()" class="btn btn-warning btn-sm">Regresar</button>'+
''+
'</div>';

function  ventana(){
    $(".prueba").css({'display':'none'});
    $('.modal-body').append(contentLogo1);
}

function volver(){
    $('.content-image').css({'display':'none'});
    $(".prueba").css({'display':'block'});
}

/* ----------- FIN PRIMER LOGO --------------------- */

/* ----------- SEGUNDO LOGO ------------------------ */

var contentLogo2 = '<div class="cuadro content-image shadow p-3 mb-5 bg-white rounded">'+
              '<div class="t-cuadro2">'+
              '<h3 class="t-lib">&nbsp;&nbsp;Uni Fianza</h3>'+
              '</div>'+
              '<a href="http://www.fgi.com.co/wp-content/uploads/2016/03/SOLICITUD-DE-ARRENDAMIENTO-FGI-PN4.pdf" id="alinear" target="h_blank">'+
              '<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal"  >Formulario persona Natural</p></a>'+
              ''+
              '<a href="http://www.fgi.com.co/wp-content/uploads/2016/01/solicitud-de-arrendamiento-FGI-PJ.pdf" id="alinear" target="h_blank">'+
              '<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal"  >Formulario persona Jurídica</p></a>'+
              '<button type="button" onclick="volver()" class="btn btn-warning btn-sm">Regresar</button>'+           
              '</div>';

function  ventana2(){
    $(".prueba").css({'display':'none'});
    $('.modal-body').append(contentLogo2);
}


/* ----------- FIN SEGUNDO LOGO ------------------------ */


/* ----------- TERCER LOGO ------------------------ */

var contentLogo3 = '<div class="cuadro2 content-image shadow p-3 mb-5 bg-white rounded">'+
              '<div class="t-cuadro3">'+
              '<h3 class="t-lib">&nbsp;&nbsp;Fianzacrédito</h3>'+
              '</div>'+
              '<a href="https://fianzacredito.com/nuevo/wp-content/uploads/2019/04/Formato-Solicitud-Fianza-de-arrendamiento.pdf" id="alinear" target="h_blank">'+
            //   '<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal">Formulario persona Natural</p></a>'+
            //   ''+
            //   '<a href="http://www.fgi.com.co/wp-content/uploads/2016/01/solicitud-de-arrendamiento-FGI-PJ.pdf" id="alinear" target="h_blank">'+
            //   '<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal"  >Formulario persona Jurídica</p></a>'+
            //   '<br>'+
              '<a href="https://fianzacredito.com/nuevo/wp-content/uploads/2019/04/Formato-Solicitud-Fianza-de-arrendamiento.pdf" id="alinear" target="h_blank">'+
              '<p style="color: black;" class="form_text">&nbsp;&nbsp;<img src="images/pdf.png" alt="pdf" class="img_modal"  >Formulario Perdona Natural y Juridica</p></a>'+
              '<button type="button" onclick="volver()" class="btn btn-warning btn-sm">Regresar</button>'+           
              '</div>';

function  ventana3(){
    $(".prueba").css({'display':'none'});
    $('.modal-body').append(contentLogo3);
}


/* ----------- FIN TERCER LOGO ------------------------ */


/* ----------- REQUISITOS ------------------------ */

var requisitos = '<div class="cuadror content-image shadow p-3 mb-5 bg-white rounded">'+
              '<div class="t-cuadro3">'+
              '<h3 class="t-lib">&nbsp;&nbsp;Requisitos</h3> <button type="button" class="close close-r"onclick="volver()"> &times; </button>'+
             
              '</div>'+
              '<img src="images/requisitoss.jpg" style="width:100%; height: 170%;">'+
                        
              '</div>';

function  ventana4(){
    $(".prueba").css({'display':'none'});
    $('.modal-body').append(requisitos);
}

// ------------------------------------------------------------------------------------------------------




