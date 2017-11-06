<?php
//
defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($DataUsuario as $key => $value) {
    ?> 

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
                        <h1>Perfil
                            <small>De Usuario</small>
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
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="Admin">Principal</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="#">Usuario</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Perfil</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <!-- BEGIN PAGE CONTENT INNER -->
                    <div class="page-content-inner">
                        <div class="mt-content-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                                <img src="<?php echo base_url(); ?>assets/img/avatar.jpg" class="img-responsive" alt=""> </div>
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name"><?php echo $value->Nombre_Usuarios; ?></div>
                                                <div class="profile-usertitle-job"><?php echo $value->Tipo_Usuarios; ?></div>
                                            </div>
                                            <!-- END SIDEBAR USER TITLE -->
                                            <!-- SIDEBAR BUTTONS -->
                                            <div class="profile-userbuttons">
                                                <button type="button" class="btn btn-circle green btn-sm">Seguidores</button>
                                                <button type="button" class="btn btn-circle red btn-sm">Mensajes</button>
                                            </div>
                                            <!-- END SIDEBAR BUTTONS -->
                                            <!-- SIDEBAR MENU -->
                                            <div class="profile-usermenu">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="page_user_profile_1.html">
                                                            <i class="icon-home"></i> Overview </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="page_user_profile_1_account.html">
                                                            <i class="icon-settings"></i> Configuraciones  </a>
                                                    </li>
                                                    <li>
                                                        <a href="page_user_profile_1_help.html">
                                                            <i class="icon-info"></i> Ayuda </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- END MENU -->
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light ">
                                            <!-- STAT -->
                                            <div class="row list-separated profile-stat">
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 0 </div>
                                                    <div class="uppercase profile-stat-text"> Projects </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 0 </div>
                                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 0 </div>
                                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                                </div>
                                            </div>
                                            <!-- END STAT -->
                                            <div>
                                                <h4 class="profile-desc-title">Acerca de <?php echo $value->Nombre_Usuarios; ?> </h4>
                                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-globe"></i>
                                                    <a href="#"><?php echo $value->Facebook_Usuarios; ?></a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-whatsapp"></i>
                                                    <a href="#"><?php echo $value->Whatsapp_Usuarios; ?></a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-facebook"></i>
                                                    <a href="#"><?php echo $value->Facebook_Usuarios; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="profile-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                        <div class="caption caption-md">
                                                            <i class="icon-globe theme-font hide"></i>
                                                            <span class="caption-subject font-blue-madison bold uppercase">Perfil de Cuenta</span>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_1" data-toggle="tab">Informacion Personal</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_2" data-toggle="tab">Cambiar Avatar</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_3" data-toggle="tab">Cambiar Password</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_4" data-toggle="tab">Configuracion de Privacidad</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="tab-content">
                                                            <!-- PERSONAL INFO TAB -->
                                                            <div class="tab-pane active" id="tab_1_1">
                                                                <form role="form" action="#">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nombres</label>
                                                                        <input type="text" placeholder="John" class="form-control" value="<?php echo $value->Nombre_Usuarios; ?>"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Numero Movil</label>
                                                                        <input type="text" placeholder="" class="form-control" value="<?php echo $value->Whatsapp_Usuarios; ?>"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Interests</label>
                                                                        <input type="text" placeholder="Design, Web etc." class="form-control" value="<?php echo $value->Whatsapp_Usuarios; ?>"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Occupation</label>
                                                                        <input type="text" placeholder="Web Developer" class="form-control" value="<?php echo $value->Tipo_Usuarios; ?>"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">About</label>
                                                                        <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!" ><?php echo $value->Estado_Usuarios; ?></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Website Url</label>
                                                                        <input type="text" placeholder="http://www.mywebsite.com" class="form-control" value="<?php echo $value->Facebook_Usuarios; ?>"> </div>
                                                                    <div class="margiv-top-10">
                                                                        <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END PERSONAL INFO TAB -->
                                                            <!-- CHANGE AVATAR TAB -->
                                                            <div class="tab-pane" id="tab_1_2">
                                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. </p>
                                                                <form action="#" role="form">
                                                                    <div class="form-group">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                            <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                    <input type="file" name="..."> </span>
                                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix margin-top-10">
                                                                            <span class="label label-danger">NOTE! </span>
                                                                            <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="margin-top-10">
                                                                        <a href="javascript:;" class="btn green"> Submit </a>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END CHANGE AVATAR TAB -->
                                                            <!-- CHANGE PASSWORD TAB -->
                                                            <div class="tab-pane" id="tab_1_3">
                                                                <form action="#">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Current Password</label>
                                                                        <input type="password" class="form-control"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">New Password</label>
                                                                        <input type="password" class="form-control"> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Re-type New Password</label>
                                                                        <input type="password" class="form-control"> </div>
                                                                    <div class="margin-top-10">
                                                                        <a href="javascript:;" class="btn green"> Change Password </a>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END CHANGE PASSWORD TAB -->
                                                            <!-- PRIVACY SETTINGS TAB -->
                                                            <div class="tab-pane" id="tab_1_4">
                                                                <form action="#">
                                                                    <table class="table table-light table-hover">
                                                                        <tbody><tr>
                                                                                <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                                <td>
                                                                                    <div class="mt-radio-inline">
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios1" value="option1"> Yes
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios1" value="option2" checked=""> No
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                                <td>
                                                                                    <div class="mt-radio-inline">
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios11" value="option1"> Yes
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios11" value="option2" checked=""> No
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                                <td>
                                                                                    <div class="mt-radio-inline">
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios21" value="option1"> Yes
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios21" value="option2" checked=""> No
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                                <td>
                                                                                    <div class="mt-radio-inline">
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios31" value="option1"> Yes
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="mt-radio">
                                                                                            <input type="radio" name="optionsRadios31" value="option2" checked=""> No
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    <!--end profile-settings-->
                                                                    <div class="margin-top-10">
                                                                        <a href="javascript:;" class="btn red"> Save Changes </a>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END PRIVACY SETTINGS TAB -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
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
<?php
}?>