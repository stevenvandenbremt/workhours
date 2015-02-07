<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Project <?php if(isset($title)){echo $title;}?></title>


    <link href="<?php echo base_url('assets/css/jquery.mobile.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/toastr.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>
<body role="document">

<!--<div class="container header-logo">
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/testo-we-measure-it-logo.png'); ?>"/></a>
</div>-->





    <?php $this->load->view($content); ?>



<script src="<?php echo base_url('assets/js/jquery.mobile.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mobile.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/toastr.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/make_toast.js'); ?>"></script>

</body>
</html>