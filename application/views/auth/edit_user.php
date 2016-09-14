<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', array('js_scripts' => $js_scripts, 'css_scripts' => $css_scripts)) ?>
<body>
<div id="wrapper">
    <?php $this->load->view('navbar') ?>

    <div id="infoMessage"><?php echo $message; ?></div>
    <?php echo form_open(uri_string()); ?>
    <div id="page-wrapper">
        <h1><?php echo lang('edit_user_heading'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span><?php echo lang('edit_user_subheading'); ?></span>
                    </div>
                    <div class=" panel-body">
                        <div class="form-group">
                            <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br/>
                            <?php echo form_input($first_name, '', "placeholder='nama depan' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br/>
                            <?php echo form_input($last_name, '', "placeholder='nama belakang' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('edit_user_company_label', 'company'); ?> <br/>
                            <?php echo form_input($company, '', "placeholder='PT. ASDP Indonesia Ferry (Persero)' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('edit_user_phone_label', 'phone'); ?> <br/>
                            <?php echo form_input($phone, '', "placeholder='08xx xxxx xxxx' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('edit_user_password_label', 'password'); ?> <br/>
                            <?php echo form_input($password, '', "placeholder='password' class='form-control' autofocus"); ?>
                        </div>
                        <div class="form-group">
                            <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?><br/>
                            <?php echo form_input($password_confirm, '', "placeholder='konfirmasi' class='form-control' autofocus"); ?>
                        </div>
                        <button class="btn btn-primary"><?php echo lang('edit_user_submit_btn') ?></button>
                    </div>
                </div>
            </div>
            <?php if ($this->ion_auth->is_admin()): ?>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span><?php echo lang('edit_user_groups_heading'); ?></span>
                        </div>
                        <div class=" panel-body">
                            <div class="form-group">
                                <label>Checkboxes</label>

                                <?php foreach ($groups as $group): ?>

                                    <div class="checkbox">

                                        <?php
                                        $gID = $group['id'];
                                        $checked = null;
                                        $item = null;
                                        foreach ($currentGroups as $grp) {
                                            if ($gID == $grp->id) {
                                                $checked = ' checked="checked"';
                                                break;
                                            }
                                        }
                                        ?>

                                        <label>
                                            <input type="checkbox" name="groups[]"
                                                   value="<?php echo $group['id']; ?>"<?php echo $checked; ?>><?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                        </label>
                                    </div>

                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php echo form_hidden('id', $user->id); ?>
    <?php echo form_hidden($csrf); ?>

    <?php echo form_close(); ?>

    <!-- /#page-wrapper -->
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

