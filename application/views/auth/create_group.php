<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>
    <div id="page-wrapper">
        <h1><?php echo lang('create_group_heading'); ?></h1>
        <div class="panel panel-default">
            <div class="panel-heading"> <?php echo lang('create_group_subheading'); ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?php echo form_open("auth/create_group"); ?>

                        <div class="form-group">
                            <?php echo lang('create_group_name_label', 'group_name'); ?> <br/>
                            <?php echo form_input($group_name,'', "placeholder='nama grup' class='form-control' autofocus"); ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_group_desc_label', 'description'); ?> <br/>
                            <?php echo form_input($description,'', "placeholder='deskripsi' class='form-control' autofocus"); ?>
                        </div>

                        <button class="btn btn-primary"><?php echo  lang('create_group_submit_btn'); ?></button>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>

        <p></p>


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
