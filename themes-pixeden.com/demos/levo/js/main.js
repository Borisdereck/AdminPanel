function tabby(id) {
    var t = id.substr(id.length - 1);
    var tActiveHeight = $('.tabs__content--' + t).height();
    $('.tabs__content').height(tActiveHeight);
    console.log(id);
}

var marcadores_nuevos = [];
var marcadores_db = [];
var mapa = null;

function quitar_marcadores(lista) {
    for (var i = 0; i < lista.length; i++) {
        lista[i].setMap(null);
    }

}

$(document).ready(function () { 

    /*
     // Collapsible
     $('.main-nav--collapsible > .main-nav__link').click(function(){
     $(this).parent().toggleClass('main-nav--open');
     if( $(this).parent().siblings().hasClass('main-nav--open') ){
     $(this).parent().siblings().removeClass('main-nav--open');
     }
     return false;
     })
     */
    $(window).load(function () {
        var id = $('.tabs input:checked').attr('id');
        tabby(id);
    })


    $(window).resize(function () {
        var id = $('.tabs input:checked').attr('id');
        tabby(id);
    })
    $('.tabs input').change(function () {
        var id = $('.tabs input:checked').attr('id');
        tabby(id);
    })


    $('.c-btn--check').click(function () {
        $(this).parent().parent().toggleClass('user--added');
    })

    $(".spinner").spinner({
        icons: {
            down: "ui-icon-carat-1-s",
            up: "ui-icon-carat-1-n"
        },
        min: 1,
        max: 3
    });

    $('.slider').slider();

    $('.slider.range').slider({
        range: true,
        max: 750,
        values: [75, 300],
        slide: function (event, ui) {
            $("#amount-min").html("$" + ui.values[0]);
            $("#amount-max").html("$" + ui.values[1]);
        }
    });
    $("#amount-min").html("$" + $(".slider.range").slider("values", 0));
    $("#amount-max").html("$" + $(".slider.range").slider("values", 1));

    $('.slider.range-min').slider({
        range: "min",
        min: 50,
        slide: function (event, ui) {
            $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + $(".slider.range-min").slider("value") + "</div>")
        },
        stop: function (event, ui) {
            $('.range-tooltip').delay(1000).fadeOut();
        },
        value: 60
    });
    $("#amount-block").html("Min: $" + $(".slider.range-min").slider("option", "min"));
    $('.slider.range-min > a.ui-slider-handle').hover(function () {
        $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + $(".slider.range-min").slider("value") + "</div>")
        $('.range-tooltip').delay(1000).fadeOut();
    })

    $('.mobile-nav').click(function () {
        $('.main-nav').toggleClass('open');
    })

    $('.back-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    })
    
    
    //cargar empresa
    var cursos = $("#slt-cursos");
     $.ajax({
            type: "post",
            url: "Script/iajax.php",
            dataType: "JSON",
            data:"&tipo=empresa",
            success: function (data) {
                //alert(data.mensaje);
                if (data.estado === "ok") {
                    //loader_grabar.removeClass("label-warning").addClass("label-success").text("Datos Grabados!").delay(3000).slideUp();
                    //alert(data.mensaje);
                  $.each(data.mensaje, function(i, v){ // indice, valor
                        cursos.append('<option value="' + v.id + '">' + v.Nombre + '</option>');
                    });
                } else {
                    alert(data.mensaje);
                }
            },
            beforeSend: function () {
                //loader_grabar.removeClass("label-success").addClass("label label-warning").text("Procesando...").slideDown();
            },
            complete: function () {
                //$("form")[0].reset();
            }
        });//fin cargar empresa
        //
    //boton grabar empresa
    $("#btn-grabar").on("click", function () {
        var f = $("#formulario");

        var loader_grabar = $("#loader_grabar");
        $.ajax({
            type: "post",
            url: "services/iajax.php",
            dataType: "JSON",
            data: f.serialize() + "&tipo=grabar",
            success: function (data) {
                //alert(data.mensaje);
                if (data.estado == "ok") {
                    loader_grabar.removeClass("label-warning").addClass("label-success").text("Datos Grabados!").delay(3000).slideUp();

                } else {
                    alert(data.mensaje);
                }

            },
            beforeSend: function () {
                loader_grabar.removeClass("label-success").addClass("label label-warning").text("Procesando...").slideDown();
            },
            complete: function () {


                $("form")[0].reset();
            }
        });
        return false;
    }); //fin boton grabar empresa

    //boton grabar promocion
    $("#btn-grabar-prom").on("click", function () {
        var f = $("#formulario");

        var loader_grabar = $("#loader_grabar");
        $.ajax({
            type: "post",
            url: "services/iajax.php",
            dataType: "JSON",
            data: f.serialize() + "&tipo=grabarprom",
            success: function (data) {
                //alert(data.mensaje);
                if (data.estado == "ok") {
                    loader_grabar.removeClass("label-warning").addClass("label-success").text("Promocion Agregada!").delay(3000).slideUp();

                } else {
                    alert(data.mensaje);
                }

            },
            beforeSend: function () {
                loader_grabar.removeClass("label-success").addClass("label label-warning").text("Procesando Promocion...").slideDown();
            },
            complete: function () {


                $("form")[0].reset();
            }
        });
        return false;
    }); //fin boton grabar promocion

    //boton cargar imagen
    //$("#btn-grabar-prom").on("click", function() {
    $("input[name='file']").on("change", function () {
        var formData = new FormData($("#formulario")[0]);
        //var uploader = $("#uploader");
        var clearfix = $("#loader_grabar");
        var ruta = "services/ajax-imagen.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert(data.mensaje);
                if (data.estado == "ok") {
                    clearfix.removeClass("label-warning").addClass("label-success").text("Imagen Cargada!").delay(3000).slideUp();
                    var img = $("#img").val(data.mensaje);
                } else {
                    alert(data.mensaje);
                }

            },
            beforeSend: function () {
                clearfix.removeClass("label-success").addClass("label label-warning").text("Subiendo Imagen...").slideDown();
            },
            complete: function () {


                //$("form")[0].reset();
            }
        });
    });
    //});
    //fin boton cargar imagen

    //cargar mapa
    var formulario = $("#formulario2");
    var punto = new google.maps.LatLng(10.9685400, -74.7813200);
    var config = {
        zoom: 13,
        center: punto,
        mapTypeId: google.maps.MapTypeId.STREETMAP
    };

    mapa = new google.maps.Map($("#mapa")[0], config);
    //Evento Click que nos devuelve la posicion
    google.maps.event.addListener(mapa, "click", function (event) {
        //alert(event.latLng);
        //convierte coordenadas a string
        var coordenadas = event.latLng.toString();
        //reemplaza el ( por espacio
        coordenadas = coordenadas.replace("(", "");
        coordenadas = coordenadas.replace(")", "");
        //imprime las cooredenadas en string
        //alert("las Coordenadas son: " + coordenadas);
        //arma un vector con los datos q esten separados con la coma(,) con las coordenada x & y
        var lista = coordenadas.split(",");
        //alert("la coordenada x: "+lista[0]);
        //alert("la coordenada Y: "+lista[1]);

        //variable para el marcador
        var direccion = new google.maps.LatLng(lista[0], lista[1]);
        var marcador = new google.maps.Marker({
            //titulo		:prompt("Nombre del Lugar"),
            position: direccion, //posicion del marcador
            map: mapa, //en que mapa se ubicara
            animation: google.maps.Animation.DROP, //con que efecto aparecera el marcador
            draggable: false //no permitir arrastrar el marcador
        });

        //mostramos y escondemos los paneles
        $("#collapseOne").collapse("show");
        $("#collapseTwo").collapse("hide");

        //pasar las coordenadas al formulario
        formulario.find("input[name='cx']").val(lista[0]);
        formulario.find("input[name='cy']").val(lista[1]);

        formulario.find("input[name='nom']").focus();

        //guardar el marcador en el array
        marcadores_nuevos.push(marcador);

        //agreagr evento click al marcador para mostrar el titulo
        google.maps.event.addListener(marcador, "click", function () {
            //alert(marcador.titulo);
        });

        quitar_marcadores(marcadores_nuevos);
        //ubicar el marcador
        marcador.setMap(mapa);




    });
    $("#btn-grabarsuc").on("click", function () {
        var f = $("#formulario2");
        if (f.find("input[name='nom']").val().trim() === "") {
            alert("falta TItulo");
            return false;
        }
        if (f.find("input[name='cx']").val().trim() === "") {
            alert("falta COordenada X");
            return false;
        }
        if (f.find("input[name='cy']").val().trim() === "") {
            alert("falta COordenada Y");
            return false;
        }
        if (f.hasClass("busy")) {


            return false;
        }
        f.addClass("busy");
        var loader_grabar = $("#loader_grabar");
        $.ajax({
            type: "post",
            url: "Script/iajax.php",
            dataType: "JSON",
            data: f.serialize() + "&tipo=grabar",
            success: function (data) {
                //alert(data.mensaje);
                if (data.estado === "ok") {
                    loader_grabar.removeClass("label-warning").addClass("label-success").text("Datos Grabados!").delay(3000).slideUp();
                    listar();
                } else {
                    alert(data.mensaje);
                }

            },
            beforeSend: function () {
                loader_grabar.removeClass("label-success").addClass("label label-warning").text("Procesando...").slideDown();
            },
            complete: function () {
                f.removeClass("busy");

                $("form")[0].reset();
            }
        });
        return false;
    });

//    $("#botonborrarsuc").on("click", function () {
//        if (confirm("esta Seguro?") === false) {
//            return;
//        }
//        var f = $("#formulario_edicion");
//        $.ajax({
//            type: "POST",
//            url: "Script/iajax.php",
//            data: f.serialize() + "&tipo=borrar",
//            dataType: "JSON",
//            success: function (data) {
//                if (data.estado === "ok") {
//                    alert(data.mensaje);
//                    //quitar_marcadores(marcadores_nuevos);
//                    //$("formulario_edicion")[0].reset();
//                    listar();
//                } else {
//                    alert(data.mensaje);
//                }
//            },
//            beforeSend: function () {
//
//            },
//            complete: function () {
//                $("#formulario_edicion")[0].reset();
//            }
//        });
//    });
//    //cargar puntos al terminar de cargar la pagination
//    listar();


}); // Ready
