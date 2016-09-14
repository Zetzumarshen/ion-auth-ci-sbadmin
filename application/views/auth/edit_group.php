<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <h1><?php echo lang('edit_group_heading'); ?></h1>
    <p><?php echo lang('edit_group_subheading'); ?></p>

    <div id="infoMessage"><?php echo $message; ?></div>
    <div id="page-wrapper">
        <?php echo form_open(current_url()); ?>

        <p>
            <?php echo lang('edit_group_name_label', 'group_name'); ?> <br/>
            <?php echo form_input($group_name); ?>
        </p>

        <p>
            <?php echo lang('edit_group_desc_label', 'description'); ?> <br/>
            <?php echo form_input($group_description); ?>
        </p>

        <p><?php echo form_submit('submit', lang('edit_group_submit_btn')); ?></p>

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
