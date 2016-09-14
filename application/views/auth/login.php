<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
    <p class="text-center login-title"></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="text-center panel-title"><?php echo lang('login_heading'); ?></h1>
                    </div>
                    <div class="panel-body">
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <?php echo form_open("auth/login"); ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo lang('login_identity_label', 'identity'); ?>
                                    <?php echo form_input($identity,"","placeholder='user@indonesiaferry.co.id' class='form-control' autofocus"); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo lang('login_password_label', 'password'); ?>
                                    <?php echo form_input($password,"","placeholder='password' class='form-control' autofocus"); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input id="remember" name="remember" type="checkbox" value="1">Remember me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        <?php echo form_close(); ?>
                        <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>


    <p>

    </p>

    <p>

    </p>

    <p>

    </p>


    <p></p>




<footer>
    <div class="panel-footer">
        <div class="row">
            <h4 style="text-align: center;">    &#169;
                2016<?php echo(strftime('%Y') === "2016" ? ' ' : '-' . strftime('%Y')) ?> DIREKTORAT USAHA
                PELABUHAN</h4>
        </div>
        <div class="row">
            <h5 style="text-align: center;">PT. ASDP INDONESIA FERRY - DIVISI ANEKA USAHA JASA</h5>
        </div>
        <div class="row">
            <div style="text-align: center;">oleh Dimas Prameshwara</div>
        </div>
    </div>
</footer>
</body>
</html>