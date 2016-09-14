<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <div id="page-wrapper">
        <h1><?php echo lang('change_password_heading'); ?></h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <?php echo lang('change_password_heading'); ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <?php echo form_open("auth/change_password"); ?>
                        <div class="form-group">
                            <?php echo lang('change_password_old_password_label', 'old_password'); ?> <br/>
                            <?php echo form_input($old_password, '', "placeholder='password lama' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <label
                                for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?></label>
                            <br/>
                            <?php echo form_input($new_password, '', "placeholder='password baru' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?>
                            <br/>
                            <?php echo form_input($new_password_confirm, '', "placeholder='confirm password' class='form-control' autofocus"); ?>
                        </div>
                        <?php echo form_input($user_id); ?>

                        <button class="btn btn-primary"><?php echo lang('change_password_submit_btn'); ?></button>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
</div>
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