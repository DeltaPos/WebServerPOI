<?php
//
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

<style>
    #mapa{
        width: 800px;
        height: 551px;

        background: green;
    }
    #infor{
        width: 800px;
        height: 551px;

    }
</style>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Tablero
                        <small>Principal</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">
                    <!-- BEGIN THEME PANEL -->
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </a>



                    </div>
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container2">
                <!-- BEGIN PAGE BREADCRUMBS -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="Admin">Principal</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Tablero</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="mt-content-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 paddi2" style="padding-left: 0px; padding-right: 0px;">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-green-steel uppercase bold">Mapa Principal</span>
                                            <span class="caption-helper hide">weekly stats...</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">1</label>
                                                <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">1</label>
                                                <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">1</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="mapa">
                                            <h2>Aquí ira el mapa!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 paddi"  style="padding: 0px 0px 0px 6px;">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-green-steel bold uppercase">Opciones</span>
                                            <span class="caption-helper"></span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">

                                                        <a href="#tab_1_1"  data-toggle="tab" class="toggle">Agregar </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab" class="toggle">Modificar </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab" class="toggle">Buscar </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_4" data-toggle="tab" class="toggle">Profile </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="tab_1_1">
                                                <form id="formulario" enctype="multipart/form-data" method="POST">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label>Título o Nombre </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-industry"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Título o Nombre" name="titulo"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Latitud </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-location-arrow"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Latitud" id="cx"  name="cx"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Longitud </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-location-arrow"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Longitud" name="cy"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dirección</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-map-marker"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Dirección" name="direccion"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Telefono:</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-phone"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="telefono" name="telefono"> </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label>Descripción:</label>
                                                                <div class="">

                                                                    <textarea class="form-control" name="descripcion" rows="3">                                                                    
                                                                    </textarea>



                                                                </div>
                                                                <div class="form-group">
                                                                    <span id="loader_grabar" class=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div class="form-actions">
                                                            <button type="button" id="btn_grabar" class="btn btn-success btn-sm">Grabar</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Cancelar</button>

                                                        </div>
                                                        <hr>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab_1_2">
                                                <form id="formulario_eliminar">
                                                    <input type="hidden" class="form-control"  name="id"/>
                                                     <div class="form-body">
                                                        <div class="form-group">
                                                            <label>Título o Nombre </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-industry"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Título o Nombre" name="titulo"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Latitud </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-location-arrow"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Latitud" id="cx"  name="cx"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Longitud </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-location-arrow"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Longitud" name="cy"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dirección</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-map-marker"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="Dirección" name="direccion"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Telefono:</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-phone"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="telefono" name="telefono"> </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label>Descripción:</label>
                                                                <div class="">

                                                                    <textarea class="form-control" name="descripcion" rows="3">                                                                    
                                                                    </textarea>



                                                                </div>
                                                                <div class="form-group">
                                                                    <span id="loader_grabar" class=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div class="form-actions">
                                                            <button type="button" id="btn_actualizar" class="btn btn-success btn-sm">Actualizar</button>
                                                            <button type="button" id="btn_borrar" class="btn btn-danger btn-sm">Borrar</button>

                                                        </div>
                                                        <hr>

                                                    </div>
                                                </form>   
                                            </div>
                                            <div class="tab-pane fade" id="tab_1_3">
                                                <form id="formulario_buscar">
                                                    <table>
                                                        <TR>
                                                            <td>
                                                                <input type="text" id="palabra_buscar"  class="form-control" autocomplete="off" />
                                                            </td>
                                                            <td>
                                                                <button type="button" id="btn_buscar"  class="btn btn-success btn-sm" >Buscar</button>
                                                            </td>
                                                        </TR>

                                                        <TR>
                                                            <td>
                                                                <select id="select_resultados">
                                                                    <option value="uno">uno</option>
                                                                </select>
                                                            </td>
                                                            <td></td>
                                                        </TR>

                                                    </table>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="tab_1_4">
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAuJKBoZsnktfqbCSrL5JbPT56Qz14pDTo"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>

<script type="text/javascript">


                                                    //VARIABLES GENERALES
                                                    //declaras fuera del ready de jquery
                                                    var nuevos_marcadores = [];
                                                    var marcadores_bd = [];
                                                    var mapa = null;

                                                    function limpiar_marcadores(lista)
                                                    {
                                                        for (i in lista)
                                                        {
                                                            //QUITAR MARCADOR DEL MAPA
                                                            lista[i].setMap(null);
                                                        }
                                                    }
                                                    //VARIABLE GENERAL PARA EL MAPA
                                                    //FUNCION PARA QUITAR MARCADORES DE MAPA
                                                    $(document).on("ready", function () {

                                                        //VARIABLE DE FORMULARIO
                                                        var formulario = $("#formulario");
                                                        var punto = new google.maps.LatLng(-0.9523683301040494, -80.74476420879364);
                                                        var config = {
                                                            zoom: 18,
                                                            center: punto,
                                                            mapTypeId: "satellite"
                                                        };
                                                        mapa = new google.maps.Map($("#mapa")[0], config);
                                                        google.maps.event.addListener(mapa, "click", function (event) {
                                                            var coordenadas = event.latLng.toString();
                                                            coordenadas = coordenadas.replace("(", "");
                                                            coordenadas = coordenadas.replace(")", "");
                                                            var lista = coordenadas.split(",");
                                                            var direccion = new google.maps.LatLng(lista[0], lista[1]);
                                                            //PASAR LA INFORMACI�N AL FORMULARIO
                                                            formulario.find("input[name='titulo']").focus();
                                                            formulario.find("input[name='cx']").val(lista[0]);
                                                            formulario.find("input[name='cy']").val(lista[1]);
                                                            var marcador = new google.maps.Marker({
                                                                //titulo:prompt("Titulo del marcador?"),
                                                                position: direccion,
                                                                map: mapa,
                                                                animation: google.maps.Animation.DROP,
                                                                draggable: false
                                                            });
                                                            //VIDEO 15
                                                            //$("#collapseOne").collapse('show');
                                                            $("#tab_1_1").addClass(" active in");
                                                            //            $( "#tab_1_1" ).removeClass( "active in" );
                                                            //$("#collapseTwo").collapse('hide');
                                                            $("#tab_1_2").removeClass(" active in");


                                                            //ALMACENAR UN MARCADOR EN EL ARRAY nuevos_marcadores
                                                            nuevos_marcadores.push(marcador);
                                                            google.maps.event.addListener(marcador, "click", function () {

                                                            });
                                                            //BORRAR MARCADORES NUEVOS
                                                            limpiar_marcadores(nuevos_marcadores);
                                                            marcador.setMap(mapa);
                                                        });
                                                        $("#btn_grabar").on("click", function () {

                                                            var url = "<?php echo base_url(); ?>Poi_Map";

                                                            //INSTANCIAR EL FORMULARIO
                                                            var f = $("#formulario");
                                                            //VALIDAR CAMPO TITULO
                                                            if (f.find("input[name='titulo']").val().trim() == "")
                                                            {
                                                                alert("Falta título");
                                                                return false;
                                                            }
                                                            //VALIDAR CAMPO CX
                                                            if (f.find("input[name='cx']").val().trim() == "")
                                                            {
                                                                alert("Falta Coordenada X");
                                                                return false;
                                                            }
                                                            //VALIDAR CAMPO CY
                                                            if (f.find("input[name='cy']").val().trim() == "")
                                                            {
                                                                alert("Falta Coordenada Y");
                                                                return false;
                                                            }
                                                            //FIN VALIDACIONES

                                                            if (f.hasClass("busy"))
                                                            {
                                                                //Cuando se haga clic en el boton grabar
                                                                //se le marcar� con una clase 'busy' indicando
                                                                //que ya se ha presionado, y no permitir que se
                                                                //realiCe la misma operaci�n hasta que esta termine
                                                                //SI TIENE LA CLASE BUSY, YA NO HARA NADA
                                                                return false;
                                                            }
                                                            //SI NO TIENE LA CLASE BUSY, SE LA PONDREMOS AHORA
                                                            f.addClass("busy");
                                                            //Y CUANDO QUITAR LA CLASE BUSY?
                                                            //CUANDO SE TERMINE DE PROCESAR ESTA SOLICITUD
                                                            //ES DECIR EN EL EVENTO COMPLETE

                                                            var loader_grabar = $("#loader_grabar");
                                                            $.ajax({
                                                                type: "POST",
                                                                url: url,
                                                                dataType: "JSON",
                                                                data: f.serialize(),
                                                                error: function (jqXHR, textStatus, errorThrown) {
                                                                    // alert(errorThrown);
                                                                    alert(errorThrown);
                                                                },

                                                                success: function (data) {
                                                                    if (data.estado == "ok")
                                                                    {
                                                                        loader_grabar.removeClass("label-warning").addClass("label-success")
                                                                                .text("Grabado OK").delay(4000).slideUp();
                                                                        listar();
                                                                    } else
                                                                    {
                                                                        alert(data.mensaje);
                                                                    }
                                                                },
                                                                beforeSend: function () {
                                                                    //Notificar al usuario mientras que se procesa su solicitud
                                                                    loader_grabar.removeClass("label-success").addClass("label label-warning")
                                                                            .text("Procesando...").slideDown();
                                                                },
                                                                complete: function () {


                                                                    //QUITAR LA CLASE BUSY
                                                                    f.removeClass("busy");
                                                                    f[0].reset();


                                                                    //[0] jquery trabaja con array de elementos javascript no
                                                                    //asi que se debe especificar cual elemento se har� reset
                                                                    //capricho de javascript
                                                                    //AHORA PERMITIR� OTRA VEZ QUE SE REALICE LA ACCION
                                                                    //Notificar que se ha terminado de procesar
                                                                }
                                                            });
                                                            return true;
                                                        });
                                                        //BORRAR
                                                        $("#btn_borrar").on("click", function () {
                                                            var url = "<?php echo base_url(); ?>Poi_Map/Delete";
                                                            var f_eliminar = $("#formulario_eliminar");
                                                            // alert(url)
                                                            $.ajax({
                                                                type: "POST",
                                                                url: url,
                                                                data: "id=" + f_eliminar.find("input[name='id']").val(),
                                                                dataType: "JSON",
                                                                success: function (data) {
                                                                    if (data.estado == "ok")
                                                                    {
                                                                        limpiar_marcadores(nuevos_marcadores);
                                                                        alert(data.mensaje);
                                                                        f_eliminar[0].reset();
                                                                        listar();
                                                                    } else
                                                                    {
                                                                        alert(data.mensaje);
                                                                    }
                                                                },
                                                                beforeSend: function () {

                                                                },
                                                                complete: function () {

                                                                }
                                                            });
                                                        });
                                                        //ACTUALIZAR
                                                        $("#btn_actualizar").on("click", function () {
                                                            var url = "<?php echo base_url(); ?>Poi_Map/Update";

                                                            var f_eliminar = $("#formulario_eliminar");
                                                            $.ajax({
                                                                type: "POST",
                                                                url: url,
                                                                data: f_eliminar.serialize(),
                                                                dataType: "JSON",
                                                                success: function (data) {
                                                                    if (data.estado == "ok")
                                                                    {
                                                                        limpiar_marcadores(nuevos_marcadores);
                                                                        alert(data.mensaje);
                                                                        f_eliminar[0].reset();
                                                                        listar();
                                                                    } else
                                                                    {
                                                                        alert(data.mensaje);
                                                                    }
                                                                },
                                                                beforeSend: function () {

                                                                },
                                                                complete: function () {

                                                                }
                                                            });
                                                        });
                                                        //BUSCAR
                                                        $("#btn_buscar").on("click", function () {
                                                            var palabra_buscar = $("#palabra_buscar").val();
                                                            var select_resultados = $("#select_resultados");
                                                            $.ajax({
                                                                type: "POST",
                                                                dataType: "JSON",
                                                                url: url,
                                                                data: "palabra_buscar=" + palabra_buscar,
                                                                success: function (data) {
                                                                    if (data.estado == "ok")
                                                                    {
                                                                        $.each(data.mensaje, function (i, item) {
                                                                            $("<option data-cx='" + item.cx + "' data-cy='" + item.cy + "' value='" + item.IdPunto + "'>" + item.Titulo + "</option>")
                                                                                    .appendTo(select_resultados);
                                                                        });
                                                                    }

                                                                },
                                                                beforeSend: function () {
                                                                    select_resultados.empty(); //limpiar ComboBox
                                                                },
                                                                complete: function () {

                                                                }
                                                            });
                                                            return false;
                                                        });
                                                        //CENTRAR EL MARCADOR AL SELECCIONARLO
                                                        $("#select_resultados").on("click, change", function () {
                                                            //PEQUEÑA VALIDACION
                                                            if ($(this).children().length < 1)
                                                            {
                                                                return false; //NO HACER NADA, AL NO TENER ITEMS
                                                            }
                                                            var cx = $("#select_resultados option:selected").data("cx");
                                                            var cy = $("#select_resultados option:selected").data("cy");
                                                            //Crear variable coordenada
                                                            var myLatLng = new google.maps.LatLng(cx, cy);
                                                            //VARIABLE MAPA
                                                            mapa.setCenter(myLatLng);
                                                        });
                                                        //CARGAR PUNTOS AL TERMINAR DE CARGAR LA P�GINA
                                                        listar(); //FUNCIONA, AHORA A GRAFICAR LOS PUNTOS EN EL MAPA
                                                    });
                                                    function listar()
                                                    {
                                                        //ANTES DE LISTAR MARCADORES
                                                        //SE DEBEN QUITAR LOS ANTERIORES DEL MAPA
                                                        limpiar_marcadores(marcadores_bd);
                                                        var f_eliminar = $("#formulario_eliminar");
                                                        var url = "<?php echo base_url(); ?>Poi_Map";
                                                        // alert(url);
                                                        $.ajax({
                                                            type: "GET",
                                                            url: url,
                                                            dataType: "JSON",
                                                            data: "",
                                                            error: function (jqXHR, textStatus, errorThrown) {
                                                                // alert(errorThrown);
                                                                // alert(errorThrown);

                                                            },
                                                            success: function (data) {
                                                                if (data.estado == "ok")
                                                                {
                                                                    //alert("Hay puntos en la BD");
                                                                    $.each(data.mensaje, function (i, item) {
                                                                        //OBTENER LAS COORDENADAS DEL PUNTO
                                                                        var posi = new google.maps.LatLng(item.latitude, item.longitude); //bien
                                                                        //CARGAR LAS PROPIEDADES AL MARCADOR
                                                                        var marca = new google.maps.Marker({
                                                                            idMarcador: item.id,
                                                                            position: posi,
                                                                            titulo: item.description,
                                                                            cx: item.latitude,
                                                                            cy: item.longitude
                                                                        });
                                                                        //AGREGAR EVENTO CLICK AL MARCADOR
                                                                        google.maps.event.addListener(marca, "click", function () {
                                                                            $("#collapseOne").collapse('hide');
                                                                            $("#collapseTwo").collapse('show');

                                                                            $("#tab_1_1").removeClass("active in");
                                                                            $("#tab_1_2").addClass("active in");
                                                                            //alert("Hiciste click en "+marca.idMarcador + " - " + marca.titulo) ;
                                                                            //SOLO MOVER CUANDO SE MARQUE EL CHECKBOX DEL FORMULARIO
                                                                            if ($("#opc_edicion").prop("checked"))

                                                                            {
                                                                                //HACER UN MARCADOR DRAGGABLE
                                                                                marca.setOptions({draggable: true});
                                                                                google.maps.event.addListener(marca, 'dragend', function (event) {
                                                                                    //AL FINAL DE MOVE EL MARCADOR
                                                                                    //ESTE MISMO YA SE ACTUALIZA CON LAS NUEVAS COORDENADAS
                                                                                    //alert(marca.position);
                                                                                    var coordenadas = event.latLng.toString();
                                                                                    coordenadas = coordenadas.replace("(", "");
                                                                                    coordenadas = coordenadas.replace(")", "");
                                                                                    var lista = coordenadas.split(",");
                                                                                    f_eliminar.find("input[name='cx']").val(lista[0]);
                                                                                    f_eliminar.find("input[name='cy']").val(lista[1]);
                                                                                });
                                                                            } else
                                                                            {

                                                                                f_eliminar.find("input[name='titulo']").val(marca.titulo);
                                                                                f_eliminar.find("input[name='cx']").val(marca.cx);
                                                                                f_eliminar.find("input[name='cy']").val(marca.cy);
                                                                                f_eliminar.find("input[name='id']").val(marca.idMarcador);
                                                                            }
                                                                            limpiar_marcadores(nuevos_marcadores);
                                                                        });
                                                                        //AGREGAR EL MARCADOR A LA VARIABLE MARCADORES_BD
                                                                        marcadores_bd.push(marca);
                                                                        //UBICAR EL MARCADOR EN EL MAPA
                                                                        marca.setMap(mapa);
                                                                    });
                                                                } else
                                                                {
                                                                    alert("NO hay puntos en la BD");
                                                                }
                                                            },
                                                            beforeSend: function () {

                                                            },
                                                            complete: function () {

                                                            }
                                                        });
                                                    }





</script>

