<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>JIDOKA | KONSTRUKKSI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://jidoka.alfathtech.co.id/assets/images/favicon.ico">

    <!-- Sweet Alert-->
    <link href="http://jidoka.alfathtech.co.id/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="http://jidoka.alfathtech.co.id/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="http://jidoka.alfathtech.co.id/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="http://jidoka.alfathtech.co.id/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="http://jidoka.alfathtech.co.id/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="http://jidoka.alfathtech.co.id/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- sweeper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- icons -->
    <link href="http://jidoka.alfathtech.co.id/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- custom -->
    <link rel="stylesheet" href="http://jidoka.alfathtech.co.id/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://jidoka.alfathtech.co.id/assets/css/custom/style1.css" rel="stylesheet" type="text/css" />

    <style>
        /* #galeri-proyek-carousel {
			width: 600px;
			height: 300px;
		} */
    </style>

</head>

<body class="loading">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom" style="background-color: white;">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="text-dark nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                            <i class="fe-maximize noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="text-dark nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="../assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="text-dark nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="http://jidoka.alfathtech.co.id/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Geneva <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="http://jidoka.alfathtech.co.id/assets/images/logo-sm.png" alt="" height="32">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="http://jidoka.alfathtech.co.id/assets/images/logo-dark.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="http://jidoka.alfathtech.co.id/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://jidoka.alfathtech.co.id/assets/images/logo-light.png" alt="" height="40">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="text-dark button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="http://jidoka.alfathtech.co.id/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user mr-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock mr-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/dashboard">
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/menu.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <!-- <i class="ti-airplay"></i> -->
                                <span class="align-middle"> Dashboard</span>
                            </a>
                            <!-- <a href="#sidebarDashboards" data-toggle="collapse">
						<i data-feather="airplay"></i>
						<span class="badge badge-success badge-pill float-right">4</span>
						<span> Dashboards </span>
					</a>
					<div class="collapse" id="sidebarDashboards">
						<ul class="nav-second-level">
							<li>
								<a href="index.html">Dashboard 1</a>
							</li>
							<li>
								<a href="dashboard-2.html">Dashboard 2</a>
							</li>
							<li>
								<a href="dashboard-3.html">Dashboard 3</a>
							</li>
							<li>
								<a href="dashboard-4.html">Dashboard 4</a>
							</li>
						</ul>
					</div> -->
                        </li>

                        <strong>
                            <li class="menu-title">CRM</li>
                        </strong>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/proyek/daftar_proyek">
                                <!-- <i class="fe-image"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/gallery.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span class="align-middle">Galeri</span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarEcommerce2" data-toggle="collapse">
                                <!-- <i class="ti-clipboard"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/event.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Pameran / Event</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce2">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="http://jidoka.alfathtech.co.id/CRM/pameran/daftar_pameran">Data Pameran</a>
                                    </li>
                                    <li>
                                        <a href="http://jidoka.alfathtech.co.id/CRM/pameran/buku_tamu">Buku Tamu</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/prospek/daftar_prospek">
                                <!-- <i class="fe-users"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/prospect.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Prospek </span>
                            </a>
                        </li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/PesanUnit">
                                <!-- <i class="ti-home"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/pesan_unit.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Pesan Unit </span>
                            </a>
                        </li>

                        <li>
                            <a href="#sidebarEcommerce" data-toggle="collapse">
                                <!-- <i class="ti-home"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/ajb.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> AJB </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="http://jidoka.alfathtech.co.id/CRM/ajb/pengajuan_ajb">Pengajuan AJB</a>
                                    </li>
                                    <li>
                                        <a href="http://jidoka.alfathtech.co.id/CRM/ajb/data_ajb">Data AJB</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/pembatalan">
                                <!-- <i class="mdi mdi-playlist-remove"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/pembatalan.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Pembatalan </span>
                            </a>
                        </li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/ProgramMarketing">
                                <!-- <i class="mdi mdi-contactless-payment-circle-outline"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/program_promo_marketing.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Program Promo Marketing </span>
                            </a>
                        </li>

                        <!-- <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Customers </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="http://jidoka.alfathtech.co.id/CRM/customer_c">Daftar Customers</a>
                            </li>
                            <li>
                                <a href="#sidebarCs" data-toggle="collapse">
                                    <span> Leads Customers </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCs">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="http://jidoka.alfathtech.co.id/CRM/leads_customer_cool_c">Cool</a>
                                        </li>
                                        <li>
                                            <a href="http://jidoka.alfathtech.co.id/CRM/leads_customer_warm_c">Warm</a>
                                        </li>
                                        <li>
                                            <a href="http://jidoka.alfathtech.co.id/CRM/leads_customer_hot_c">Hot</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->

                        <strong>
                            <li class="menu-title">INVENTORI</li>
                        </strong>

                        <li>
                            <a href="#">
                                <i data-feather="rss"></i>
                                <span> Menu </span>
                            </a>
                        </li>

                        <strong>
                            <li class="menu-title">KONSTRUKKSI</li>
                        </strong>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_proyek">
                                <!-- <i class="fe-truck" data-feather="fe-truck"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/house2.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span>Pengaturan Master</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_proyek">
                                <!-- <i class="fe-truck" data-feather="fe-truck"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/house2.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span>Proyek</span>
                            </a>
                        </li>

                        <strong>
                            <li class="menu-title">HUMAN RESOURCE</li>
                        </strong>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/HR/Karyawan">
                                <!-- <i class="mdi mdi-contactless-payment-circle-outline"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/coupon.svg" width="15" height="15"> </object>
                                <span> Data Karyawan </span>
                            </a>
                        </li>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/HR/Absensi">
                                <!-- <i class="mdi mdi-contactless-payment-circle-outline"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/coupon.svg" width="15" height="15"> </object>
                                <span> Absensi </span>
                            </a>
                        </li>

                        <b>
                            <li class="menu-title">KEUANGAN</li>
                        </b>

                        <li>
                            <a href="#">
                                <i data-feather="rss"></i>
                                <span> Menu </span>
                            </a>
                        </li>

                        <strong>
                            <li class="menu-title">Super Admin</li>
                        </strong>

                        <li>
                            <a href="http://jidoka.alfathtech.co.id/Super/client/profil">
                                <!-- <i data-feather="rss" class="fe-gitlab"></i> -->
                                <object data="http://jidoka.alfathtech.co.id/assets/svg/enterprise.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                                <span> Profil Perusahaan </span>
                            </a>
                        </li>

                    </ul>
                </div>
                </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <style>
        #apex4 .apexcharts-pie-label {
            fill: #ffffff !important;
        }
    </style>

    <div class="content-page galeri-cluster">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12 mb-3 mt-2">
                        <div class="page-title-box d-flex justify-content-between align-items-center">
                            <div class="">
                                <h4 class="mb-0">Template RAB</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title-header d-flex flex-wrap justify-content">
                                <div class="header-title">
                                    <h4 class="font-18 mb-0 custom-h4">Pengaturan Master Konstruksi</h4>
                                    
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <!-- <div class="">
										<div class="" dir="ltr"> -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="header-title mb-0">Garfik AJB Setahun</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="collapse pt-3 show" dir="ltr">
                                                    <div id="apex1" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                                </div> <!-- collapsed end -->
                                            </div>
                                        </div>
                                        <!-- </div>
									</div> -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="" dir="ltr">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <h4 class="header-title mb-0">Grafik Pesan Unit</h4>
                                                    </div>
                                                    <div class="col-md-5 form-group">
                                                        <select id="date_pesan_unit" class="form-control">
                                                            <option value="2020">2020</option>
                                                            <option value="2021" selected>2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="collapse pt-3 show" dir="ltr">
                                                            <div id="apex2" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                                        </div> <!-- collapsed end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="" dir="ltr">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <h4 class="header-title mb-0">Grafik Prospek Baru</h4>
                                                    </div>
                                                    <div class="col-md-5 form-group">
                                                        <select id="date_prospek" class="form-control">
                                                            <option value="2020">2020</option>
                                                            <option value="2021" selected>2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="collapse pt-3 show" dir="ltr">
                                                            <div id="apex3" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                                        </div> <!-- collapsed end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="" dir="ltr">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="header-title mb-0">Jumlah Pesan Unit Setahun</h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="collapse pt-3 show" dir="ltr">
                                                            <div id="apex4" class="apex-charts" data-colors="#6658dd,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                                        </div> <!-- collapsed end -->
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2015 - <script>
                            document.write(new Date().getFullYear())
                        </script> &copy; UBold theme by <a href="">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <!-- Vendor js -->
    <script src="http://jidoka.alfathtech.co.id/assets/js/vendor.min.js"></script>

    <!-- Plugins js -->
    <script src="http://jidoka.alfathtech.co.id/assets/libs/morris.js06/morris.min.js"></script>
    <script src="http://jidoka.alfathtech.co.id/assets/libs/raphael/raphael.min.js"></script>
    <script src="http://jidoka.alfathtech.co.id/assets/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="http://jidoka.alfathtech.co.id/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="http://jidoka.alfathtech.co.id/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Dashboard init-->
    <!-- <script src="http://jidoka.alfathtech.co.id/assets/js/pages/dashboard-4.init.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/js/pages/dashboard-3.init.js"></script> -->

    <!-- App js -->
    <script src="http://jidoka.alfathtech.co.id/assets/js/app.min.js"></script>

    <script type="text/javascript">
        let tag_date_pesan_unit = '#date_pesan_unit',
            tag_date_prospek = '#date_prospek';

        var chart2,
            chart,
            chart3,
            chart4;

        $(document).ready(function() {
            var options = {
                series: [{
                    name: 'Net Profit',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }, {
                    name: 'Revenue',
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                }, {
                    name: 'Free Cash Flow',
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agus', 'Sept', 'Okt', 'Nov', 'Des'],
                    labels: {
                        // rotate : false,
                        // trim : true
                    }
                },
                fill: {
                    opacity: 1
                },
                responsive: [{
                    breakpoint: undefined,
                    options: {}
                }]
            };

            chart = new ApexCharts(document.querySelector("#apex2"), options);
            chart.render();

            var options2 = {
                series: [{
                    name: "STOCK ABC",
                    data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
                }],
                chart: {
                    type: 'line',
                    height: 400,
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agust', 'Sept', 'Okt', 'Nov', 'Des'],
                },
                // xaxis: {
                // type: 'datetime',
                // },
                yaxis: {
                    opposite: false
                },
                legend: {
                    horizontalAlign: 'left'
                }
            };

            chart2 = new ApexCharts(document.querySelector("#apex1"), options2);
            chart2.render();

            var options3 = {
                series: [{
                    name: "Desktops",
                    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                title: {
                    text: 'Product Trends by Month',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agust', 'Sept', 'Okt', 'Nov', 'Des'],
                }
            };

            chart3 = new ApexCharts(document.querySelector("#apex3"), options3);
            chart3.render();

            var options4 = {
                series: [44, 55, 13, 33],
                chart: {
                    width: 380,
                    height: 500,
                    type: 'donut'
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(value, {
                        seriesIndex,
                        dataPointIndex,
                        w
                    }) {
                        console.log(w)
                        return w.config.series[seriesIndex];
                    },
                    background: {
                        enabled: true,
                        foreColor: '#ffffff',
                    }
                },
                labels: ['Reservasi', 'Booking', 'Kontrak'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                legend: {
                    position: 'right',
                    offsetY: 0,
                    height: 230
                }
            };

            chart4 = new ApexCharts(document.querySelector("#apex4"), options4);
            chart4.render();

            //EVENT HANDLER

            $(document).on('change', tag_date_pesan_unit, function() {
                get_chart_pesan_unit();
            })

            $(document).on('change', tag_date_prospek, function() {
                get_chart_prospek();
            })

            //END OF EVENT HANDLER

            get_chart_ajb();
            get_chart_pesan_unit();
            get_chart_prospek();
            get_chart_jumlah_pesan_unit();

        })

        function get_chart_ajb() {
            $.ajax({
                url: 'http://jidoka.alfathtech.co.id/CRM/ChartCRM/chart_ajb',
                type: 'post',
                async: false,
                dataType: 'json',
                data: {
                    year: 2021
                },
                success: function(data) {
                    console.log(data)

                    var d = data.data

                    var dt = [];
                    for (var i = 0; i < d.length; i++) {
                        dt[i] = d[i].data
                    }

                    var ser = [{
                        name: 'AJB',
                        data: dt
                    }];
                    chart2.updateSeries(ser)

                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                        $('#apex1 .apexcharts-xaxis-texts-g text:odd').remove();
                    }
                },
                error: function(q, w, e) {
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }

        function get_chart_pesan_unit() {
            $.ajax({
                url: 'http://jidoka.alfathtech.co.id/CRM/ChartCRM/chart_pesan_unit',
                type: 'post',
                async: false,
                dataType: 'json',
                data: {
                    year: $(tag_date_pesan_unit).val()
                },
                success: function(data) {
                    console.log(data)

                    var d = data.data

                    var dt = [{
                        name: 'Reservasi',
                        data: []
                    }, {
                        name: 'Booking',
                        data: []
                    }, {
                        name: 'Kontrak',
                        data: []
                    }];

                    for (var i = 0; i < d.reservasi.length; i++) {
                        dt[0].data[i] = d.reservasi[i].data;
                    }
                    for (var i = 0; i < d.booking.length; i++) {
                        dt[1].data[i] = d.booking[i].data;
                    }
                    for (var i = 0; i < d.kontrak.length; i++) {
                        dt[2].data[i] = d.kontrak[i].data;
                    }

                    chart.updateSeries(dt)

                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                        $('#apex2 .apexcharts-xaxis-texts-g text:odd').remove();
                    }

                },
                error: function(q, w, e) {
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }

        function get_chart_prospek() {
            $.ajax({
                url: 'http://jidoka.alfathtech.co.id/CRM/ChartCRM/chart_prospek_baru',
                type: 'post',
                async: false,
                dataType: 'json',
                data: {
                    year: $(tag_date_prospek).val()
                },
                success: function(data) {
                    console.log(data)

                    var d = data.data

                    var dt = [];
                    for (var i = 0; i < d.length; i++) {
                        dt[i] = d[i].data
                    }

                    var ser = [{
                        name: 'Prospek Baru',
                        data: dt
                    }];
                    chart3.updateSeries(ser)

                    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                        $('#apex3 .apexcharts-xaxis-texts-g text:odd').remove();
                    }
                },
                error: function(q, w, e) {
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }

        function get_chart_jumlah_pesan_unit() {
            $.ajax({
                url: 'http://jidoka.alfathtech.co.id/CRM/ChartCRM/chart_pesan_unit',
                type: 'post',
                async: false,
                dataType: 'json',
                data: {
                    year: $(tag_date_pesan_unit).val()
                },
                success: function(data) {
                    console.log(data)

                    var d = data.data

                    var dt = [0, 0, 0];

                    for (var i = 0; i < d.reservasi.length; i++) {
                        dt[0] += d.reservasi[i].data;
                    }
                    for (var i = 0; i < d.booking.length; i++) {
                        dt[1] += d.booking[i].data;
                    }
                    for (var i = 0; i < d.kontrak.length; i++) {
                        dt[2] += d.kontrak[i].data;
                    }
                    console.log(dt)
                    chart4.updateSeries(dt)

                    $('#apex4 .apexcharts-legend.apexcharts-align-center.position-bottom').attr('style', 'height: 100px; inset: auto 0px 100px; position: absolute;')
                },
                error: function(q, w, e) {
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }
    </script>

</body>

</html>