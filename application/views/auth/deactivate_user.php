<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <div id="page-wrapper">
        <h1><?php echo lang('deactivate_heading'); ?></h1>
        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>

        <?php echo form_open("auth/deactivate/" . $user->id); ?>

        <p>
            <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
            <input type="radio" name="confirm" value="yes" checked="checked"/>
            <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
            <input type="radio" name="confirm" value="no"/>
        </p>

        <?php echo form_hidden($csrf); ?>
        <?php echo form_hidden(array('id' => $user->id)); ?>

        <p><?php echo form_submit('submit', lang('deactivate_submit_btn')); ?></p>

        <?php echo form_close(); ?>
    </div>
    <!-- /#page-wrapper -->
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
