<?php
# This file should be included in the HEAD section of the page where you want to integrate the AJAX Contact Form (see standalone.php to see how it was included)
include 'common.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $acf_config['path']['form']; ?>contact-app/style/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $acf_config['path']['form']; ?>contact-app/style/fancy-buttons.css" />


<script type="text/javascript" src="<?php echo $acf_config['path']['form']; ?>contact-app/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
<!--
var acf_config_path = jQuery.parseJSON('<?php echo $func->DoJsonEncode($acf_config['path']); ?>');
-->
</script>
<script type="text/javascript" src="<?php echo $acf_config['path']['form']; ?>contact-app/js/init.php?x=<?php echo $unique_id; ?>"></script>