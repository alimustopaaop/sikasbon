<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="#" />
    <title>Login SIKASBON</title>
    <link href="<?=base_url()?>assets/images/mempawah.png" rel="icon">
    <link href="<?=base_url()?>assets/images/mempawah.png" rel="apple-touch-icon">
    <!-- Global stylesheets -->
    <link href="<?=base_url()?>assets/login/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/login/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/login/assets/css/login.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- /global stylesheets -->
</head>

<body class="login-container">
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content">
                    <div class="kontainer">
                        <div class="kotak">
                            <div class="wrapper">
                                <p style="padding: 20px 10px; text-align-last: center;">
                                    <img src="<?=base_url()?>assets/images/mempawah.png" height="180">
                                <div style="text-align: center;">
                                    <span style="font-weight: bold; font-size: 40px; color: #16a085;">SIKASBON</span>
                                    <br>
                                    <span style="font-weight: bold; font-size: 12px; color: #16a085;">Sistem
                                        Informasi Rekon Kas dan Belanja</span>
                                </div>

                                </p>

                                <form action="<?=base_url()?>login/auth/validasi" method="post">

                                    <div class="row">
                                        <i class="fa fa-user"></i>
                                        <input type="text" required="" autofocus="" name="nip" placeholder="NIP"
                                            class="form-control flat">
                                    </div>

                                    <div class="row">
                                        <i class="fa fa-eye-slash"></i>
                                        <input type="password" required="" name="password" placeholder="Password"
                                            class="form-control flat">
                                    </div>
                                    <div class="row text-center" style="margin-bottom: -12px;">
                                        <button type="submit" name="btnlogin" class="btn btn-login"><span
                                                class="fa fa-random"></span>
                                            &nbsp;<b>LOGIN</b></button>
                                    </div>
                                </form>
                            </div>
                            <br>

                            <!-- Footer -->
                            <!-- <div class="footer text-muted text-center">
                                <a href="" class="text-danger"><b>Sistem Informasi Rekon Kas dan Belanja (SIRENJA)
                                        &copy;Kabupaten
                                        Mempawah
                                        2023 </b></a>
                            </div> -->
                            <!-- /footer -->
                        </div>
                        <!-- /content area -->
                    </div>
                    <!-- /main content -->
                </div>
                <!-- /page content -->
            </div>
            <!-- /page container -->
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 5000);
            </script>

            <script>
            <?php if ($this->session->flashdata('sweet_error')): ?>
            swal({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo $this->session->flashdata('sweet_error'); ?>',
                buttons: {
                    confirm: {
                        className: 'btn btn-primary'
                    }
                }
            });
            <?php endif;?>

            <?php if ($this->session->flashdata('sweet_success')): ?>
            swal({
                title: "Success!",
                text: "<?php echo $this->session->flashdata('sweet_success'); ?>",
                icon: "success",
                timer: 3000,
                buttons: false
            });
            <?php endif;?>

            <?php if ($this->session->flashdata('sudah_logout')): ?>
            swal({
                title: "Oops...",
                text: "<?php echo $this->session->flashdata('sudah_logout'); ?>",
                icon: "error",
                timer: 3000,
                buttons: false
            });
            <?php endif;?>
            </script>



</body>


</html>