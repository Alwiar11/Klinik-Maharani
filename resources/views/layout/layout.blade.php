<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klinik Maharani | {{ $title }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/hospital.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <button data-toggle="modal" data-target="#modal-sign-out" style="border: none; background: none;">
                        <a class="nav-link" href="#" role="button">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </button>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-lightblue elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="dist/img/hospital.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Klinik Maharani</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasien" class="nav-link {{ $title === 'Pasien' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Pasien
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="rekam-medis" class="nav-link {{ $title === 'Rekam Medis' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Rekam Medis</i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="akun" class="nav-link {{ $title === 'Akun' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tenaga-medis" class="nav-link {{ $title === 'Tenaga Medis' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Tenaga Medis
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="inventory" class="nav-link {{ $title === 'Inventory' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Inventory
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal-kerja" class="nav-link {{ $title === 'Jadwal Kerja' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <p>
                                    Jadwal Kerja
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pembayaran" class="nav-link {{ $title === 'Pembayaran' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                    Pembayaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="laporan" class="nav-link {{ $title === 'Laporan' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        @yield('container')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        <div class="modal fade" id="modal-sign-out">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin untuk keluar?</p>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Keluar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
        $(function() {
            $("#rekam_medis_selesai").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#rekam_medis_selesai_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
        $(function() {
            $("#rekam_medis_antrean").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#rekam_medis_antrean_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
        $(function() {
            $("#table-inventory").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#table-inventory_wrapper .col-md-6:eq(0)');
            $('.dataTables_length').insertAfter($('#table-inventory_wrapper .dataTables_paginate'));
        });
    </script>
    <script>
        $(function() {
            $("#table-pasien").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#table-pasien_wrapper .col-md-6:eq(0)');
            $('.dataTables_length').insertAfter($('#table-pasien_wrapper .dataTables_paginate'));
        });
    </script>
    <script>
        $(function() {
            $("#table-akun").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#table-akun_wrapper .col-md-6:eq(0)');
            $('.dataTables_length').insertAfter($('#table-akun_wrapper .dataTables_paginate'));
        });
    </script>
    <script>
        $(function() {
            $("#table-tenaga-medis").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#table-tenaga-medis_wrapper .col-md-6:eq(0)');
            $('.dataTables_length').insertAfter($('#table-tenaga-medis_wrapper .dataTables_paginate'));
        });
    </script>
    <script>
        $(function() {
            $("#table-jadwal-kerja").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#table-jadwal-kerja_wrapper .col-md-6:eq(0)');
            $('.dataTables_length').insertAfter($('#table-jadwal-kerja_wrapper .dataTables_paginate'));
        });
    </script>


    <script>
        $(function() {
            $('#daterange').daterangepicker({
                opens: 'left',
                locale: {
                    format: 'YYYY-MM-DD',
                    separator: ' - ',
                },
                showDropdowns: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            });
        });
    </script>






</body>

</html>
