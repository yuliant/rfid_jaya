<?php
$user = $this->fungsi->user_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $tittle; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stisla/css/components.css">
</head>

<body style="background-color: #f5f5f7;">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?php echo base_url(); ?>assets/data/<?php echo $user->image ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $user->nama ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?php echo base_url('profil'); ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?php echo base_url() ?>">
                            <h6 class="mt-2">RFID<br>PT MCT</h6>
                        </a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?php echo base_url() ?>">RFID</a>
                    </div>
                    <ul class="sidebar-menu">
                        <!-- admin menu -->
                        <?php if ($user->level == 1) { ?>
                            <li class="menu-header">General</li>
                            <li <?php echo $this->uri->segment(1) == 'admindashboard' ? 'class="active"' : '' ?>>
                                <a class="nav-link" href="<?php echo base_url('admindashboard') ?>">
                                    <i class="fas fa-fire"></i> <span>Dashboard</span>
                                </a>
                            </li>

                            <!-- end admin menu -->
                        <?php } ?>


                        <!-- user menu -->
                        <?php if ($user->level == 2) { ?>
                            <li class="menu-header">General</li>

                            <li <?php echo $this->uri->segment(1) == 'dashboard' ? 'class="active"' : '' ?>>
                                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                                    <i class="fas fa-fire"></i> <span>Dashboard</span>
                                </a>
                            </li>

                            <li <?php echo $this->uri->segment(1) == 'gudang' ? 'class="active"' : '' ?>>
                                <a class="nav-link" href="<?php echo base_url('gudang') ?>">
                                    <i class="fas fa-warehouse"></i> <span>Realtime Gudang</span>
                                </a>
                            </li>

                            <li <?php echo $this->uri->segment(1) == 'jenis_barang' ? 'class="active"' : '' ?>>
                                <a class="nav-link" href="<?php echo base_url('jenis_barang') ?>">
                                    <i class="fas fa-boxes"></i> <span>Jenis Barang</span>
                                </a>
                            </li>

                            <!-- end user menu -->
                        <?php } ?>

                        <li class="menu-header">Pengaturan</li>
                        <?php if ($user->level == 1) { ?>
                            <li class="dropdown 
                            <?php echo $this->uri->segment(1) == 'login-view'
                                || $this->uri->segment(1) == 'agenda' ? 'active' : '' ?>">
                                <a href="" class="nav-link has-dropdown">
                                    <i class="fas fa-desktop"></i> <span>Environment</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php echo $this->uri->segment(1) == 'login-view' ? 'class="active"' : '' ?>>
                                        <a href="<?php echo base_url('login-view')
                                                    ?>">Tampilan Login</a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <li class="dropdown <?php echo $this->uri->segment(1) == 'profil' || $this->uri->segment(1) == 'editprofil' || $this->uri->segment(1) == 'changepass' ? 'active' : '' ?>">
                            <a href="" class="nav-link has-dropdown">
                                <i class="fas fa-ellipsis-h"></i> <span>Utilities</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li <?php echo $this->uri->segment(1) == 'profil' ? 'class="active"' : '' ?>>
                                    <a href="<?php echo base_url('profil') ?>">Profil</a>
                                </li>
                                <li <?php echo $this->uri->segment(1) == 'editprofil' ? 'class="active"' : '' ?>>
                                    <a href="<?php echo base_url('editprofil') ?>">Edit Profil</a>
                                </li>
                                <li <?php echo $this->uri->segment(1) == 'changepass' ? 'class="active"' : '' ?>>
                                    <a href="<?php echo base_url('changepass') ?>">Ubah Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </aside>
            </div>

            <script src="<?php echo base_url(); ?>assets/stisla/modules/jquery.min.js"></script>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $contents ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?php echo date('Y'); ?> <div class="bullet"></div>
                    <a href="<?php echo base_url(); ?>">PT Mutiara Cemerlang Teknologi</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>assets/stisla/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/stisla/modules/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/stisla/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>assets/stisla/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/stisla/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            // CALL FUNCTION SHOW PRODUCT
            show_product();

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
            var pusher = new Pusher('451054362d659535edfc', {
                cluster: 'ap1',
                forceTLS: true
            });
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if (data.message === 'success') {
                    show_product();
                }
            });

            // FUNCTION SHOW PRODUCT
            function show_product() {
                $.ajax({
                    url: '<?php echo site_url("user/RealtimeGudang/get_data"); ?>',
                    type: 'GET',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var count = 1;
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<th>' + count++ + '</th>' +
                                '<td>' + data[i].nama_barang + '</td>' +
                                '<td>' + data[i].distributor + '</td>' +
                                '<td>' + data[i].keterangan + '</td>' +
                                '<td>' + data[i].tanggal + '</td>' +
                                '</tr>';
                        }
                        $('.show_product').html(html);
                    }

                });
            }
        });
    </script>

    <!-- untuk memunculkan nama file gambar -->
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>

    <!-- set logout selama 20 menit -->
    <script>
        let log_off = new Date();
        log_off.setSeconds(log_off.getSeconds() + 1200);
        log_off = new Date(log_off);

        let int_logoff = setInterval(function() {
            let now = new Date();
            if (now > log_off) {
                window.location.assign("<?= base_url('auth/logout') ?>");
                clearInterval(int_logoff);
            }
        }, 1200000);

        $('body').on('click', function() {
            log_off = new Date();
            log_off.setSeconds(log_off.getSeconds() + 1200);
            log_off = new Date(log_off);
            console.log(log_off);
        })
    </script>
</body>

</html>