

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
                            <div class="col-md-9 col-sm-9 paddi2" style="padding-left: 0px; padding-right: 0px;">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-green-steel uppercase bold">Puntos Principal</span>
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


                                        <?= form_open_multipart(base_url() . "Edicion/do_upload") ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Dropdown</label>
                                                    <select class="form-control js-example-basic-single" name="id" onchange="poi_llamada(this.value)">
                                                        <option>--</option>
                                                        <?php foreach ($puntos as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name_pois; ?></option>
                                                        <?php } ?>

                                                    </select>
                                                    <input type="hidden" name="a" id="a" value="">

                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" id="direccion" value=""> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Telefonos</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono"> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <textarea  class="form-control" placeholder="Descripción" style="height: 65px;" name="descripcion" id="descripcion"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="">Imagen</label>
                                                    <div class="">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="input-group input-large">
                                                                <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="userfile"> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Objetivos</label>

                                                </div>
                                                <div class="form-group">
                                                    <label>‎Misión</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <textarea class="form-control" placeholder="Misión" name="mision" id="mision"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Visión</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <textarea class="form-control" placeholder="Visión" name="vision" id="vision"></textarea>

                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <div class="col-md-12">
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn blue">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>

                                                </div>
                                            <?= form_close() ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 paddi"  style="padding: 0px 0px 0px 6px;">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption caption-md">
                                            <i class="icon-bar-chart font-dark hide"></i>
                                            <span class="caption-subject font-green-steel bold uppercase">Imagenes Del Punto</span>
                                            <span class="caption-helper"></span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content" id="imagenes">

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
<script type="text/javascript">
    function poi_llamada(id) {
        var cedula = $("#cedula_Estudiante_Pensiones").val();
        var url = "<?php echo base_url('POI_Map/idpoi/id/'); ?>" + id;
        var urlImg = "<?php echo base_url(); ?>";

        $.ajax({
            type: "get",
            url: url,
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function (data)
            {
                $.each(data.infopois, function (i, item) {
                    $("#a").val(item.id);

                });
                var html = "";
                $.each(data.imgPos, function (i, item) {
                    //alert(item.id);
                    html += '<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"><img src="' + urlImg + 'assets/img/User/' + item.imagen + '"></div>';



                });
                $.each(data.infopois, function (i, item) {
                    $("#direccion").val(item.dirreccion_pois);
                    $("#telefono").val(item.telefono_pois);
                    $("#descripcion").val(item.description_pois);
                    $("#mision").val(item.Mision_pois);
                    $("#vision").val(item.vision_pois);
                    

                });
                $("#imagenes").html(html);


            },
            error: function (jqXHR, textStatus, errorThrown) {

            }
        });
    }
</script>