<?php
 
?>

<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-5 containerImgLogin">
                        <img class="mx-auto d-block imgLogin" src="<?php echo base_url('/assets/img/LOGOCORP24.png');?>" >
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear cuenta</h1>
                            </div>
                            <form class="user" method="POST" action="<?php echo base_url('index.php/Login/makeUsr'); ?>">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombreUsr" name="nombreUsr"
                                            placeholder="Nombre(s)" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user" id="ape_pat" name="ape_pat"
                                            placeholder="Apellido Paterno" required>
                                    </div>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-user" id="ape_mat" name="ape_mat"
                                            placeholder="Apellido Materno" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="mail" class="form-control form-control-user" id="mailUsr" name="mailUsr"
                                            placeholder="email" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="rfcUsr" name="rfcUsr"
                                            placeholder="RFC" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="pwdUsr" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="pwdUsrRep" placeholder="confirma el Password" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Registrar
                                </button>
                                <!--  <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Olvidaste tu Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url(); ?>">Ya tienes una cuenta? Logueate!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>