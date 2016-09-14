<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <div id="page-wrapper">
        <h1><?php echo lang('forgot_password_heading'); ?></h1>
        <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

        <div id="infoMessage"><?php echo $message; ?></div>

        <?php echo form_open("auth/forgot_password"); ?>

        <p>
            <label
                for="identity"><?php echo(($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label>
            <br/>
            <?php echo form_input($identity); ?>
        </p>

        <p><?php echo form_submit('submit', lang('forgot_password_submit_btn')); ?></p>

        <?php echo form_close(); ?>
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