<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM KARYAWAN</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/styles_ide.css">

    <style>
        @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {  
            .fscreen {visibility: hidden;}
        }
    </style>

</head>
<body style="background-color :#E2EEF1" >  
 <?php
 $this->load->view('view_modal/modal_alert');
 ?>
 <div class="container">   
    <div class="row">
        <div class="form-horizontal card card-container">
            <div class="panel">
                <div class="panel-body">
                    <form method="post" action="<?php echo site_url('Controller_login/login_aplikasi'); ?>">
                        <div class="page-title text-center">            
                            <h1 class="center caption-login">SILAHKAN LOGIN</h1>
                            <hr>
                        </div>
                        <div class="form-group page-title">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="NIK" id="nik-login" name="nik-login">
                            </div>
                        </div>
                        <div class="form-group page-title">
                            <div class="col-sm-12">
                                <input type="password" class="form-control form-control-login" placeholder="PASSWORD" id="pass-login" name="pass-login">
                            </div>
                        </div>
                        <?php echo validation_errors(); ?>
                        <div class="form-group page-title class-btn-login">
                            <div></div>
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary" id="btn-login">LOGIN</button>
                            </div>
                        </div>
                        <div><center>Versi 1.0.0.1</center></div>
                    </form>
                </div>
            </div><!--colmd6-->
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/design/js/required.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/design/js/metisMenu.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/design/plugins/datetimepicker/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/design/js/login.js"></script>
</body>
</html>