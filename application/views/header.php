<?php
/**
 * Created by PhpStorm.
 * User: dimas
 * Date: 2016-09-13
 * Time: 8:07 AM
 */
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php if(isset($css_scripts)) foreach ($css_scripts as $css_script):?>
<link href="<?php echo base_url("assets/css/$css_script.css")?>" rel="stylesheet">
    <?php endforeach;?>

    <?php if(isset($js_scripts)) foreach ($js_scripts as $js_script):?>
<script type="application/javascript" src="<?php echo base_url("assets/js/$js_script.js")?>"></script>
    <?php endforeach;?>

</head>
