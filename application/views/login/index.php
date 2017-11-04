  <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-5 login-container bs-reset">
                    <img class="login-logo login-6" src="<?php echo base_url();?>assets/img/img4.jpg" style="    height: 92px;"/>
                    <div class="login-content">
                        <h1> Bienvenido...</h1>
                        <p> Objetivo </p>
                        <form action=""  id="formulario" class="login-form" method="post">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span id="mensaje"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Usuario" name="username" required/> </div>
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Contraseña" name="password" required/> </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="forgot-password">
                                        <span class="fa fa-hand-stop-o"></span><a href="javascript:;" id="forget-password" class="forget-password">Olvidó Su Contraseña?</a>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                   
                                    <button class="btn blue" type="submit">Iniciar sesión</button>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3>Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn blue btn-outline">Back</button>
                                <button type="submit" class="btn blue uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Keenthemes 2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 bs-reset">
                    <div class="login-bg"> </div>
                </div>
            </div>
        </div>