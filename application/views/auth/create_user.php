<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <h1><?php echo lang('create_user_heading'); ?></h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span><?php echo lang('create_user_subheading'); ?></span>
                    </div>
                    <div class="panel-body">

                        <?php echo form_open("auth/create_user"); ?>
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <div class="form-group">
                            <?php echo lang('create_user_fname_label', 'first_name'); ?> <br/>
                            <?php echo form_input($first_name, '', "placeholder='nama depan' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_lname_label', 'last_name'); ?> <br/>
                            <?php echo form_input($last_name, '', "placeholder='nama belakang' class='form-control' autofocus"); ?>
                        </div>

                        <?php
                        if ($identity_column !== 'email') {
                            echo '<div class="form-group">';
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</div>';
                        }
                        ?>

                        <div class="form-group">
                            <?php echo lang('create_user_company_label', 'company'); ?> <br/>
                            <?php echo form_input($company, '', "placeholder='PT. ASDP Indonesia Ferry (Persero)' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_email_label', 'email'); ?> <br/>
                            <?php echo form_input($email, '', "placeholder='user@indonesiaferry.co.id' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_phone_label', 'phone'); ?> <br/>
                            <?php echo form_input($phone, '', "placeholder='08xx xxxx xxxx' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_password_label', 'password'); ?> <br/>
                            <?php echo form_input($password, '', "placeholder='password' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br/>
                            <?php echo form_input($password_confirm, '', "placeholder='confirm password' class='form-control' autofocus"); ?>
                        </div>
                        <button class="btn btn-primary"><?php echo lang('create_user_submit_btn'); ?></div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<footer class="footer">
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