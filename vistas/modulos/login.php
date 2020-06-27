<div id="back"></div>

<div class="login-box">

    <div class="login-logo">

        <h1>Fundas & Mas</h1>

    </div>

    <div class="login-box-body">

        <p class="login-box-msg">Ingresar al sistema</p>

        <form method="post">

            <div class="form-group has-feedback">

                <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">

                <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>

            <div class="row">

                <div class="col-xs-6">

                    <div class="icheck-primary">

                        <input type="checkbox" id="remember">

                        <label for="remember">Recordar</label>

                    </div>

                </div>

                <div class="col-xs-6">

                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

                </div>

            </div>

            <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

        </form>

    </div>

</div>