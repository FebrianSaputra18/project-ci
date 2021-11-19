
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>JIDOKA | CRM</title>
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
                    <a href="daftar_template_rab">
                        <!-- <i class="fe-truck" data-feather="fe-truck"></i> -->
                        <object data="http://jidoka.alfathtech.co.id/assets/svg/house2.svg" width="16" height="16" style="vertical-align: middle!important;"> </object>
                        <span>Pengaturan Master</span>
                    </a>
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

<div class="content-page AJB Unit">
	<div class="content">

		<!-- Start Content-->
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12 mb-2">
					<div class="page-title-box d-flex justify-content-between align-items-center">
						<div class="">
							<h4 class="mb-0 custom-h4">AJB Unit</h4>
						</div>
						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">JIDOKA</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
								<li class="breadcrumb-item active">AJB Unit</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-sm-12 col-md-12 col-xl-12">
					<div class="widget-rounded-circle shadow card-box">
						<div class="row">
							<div class="col-sm-8 col-6">
								<div class="d-flex align-items-center">
									<div class="avatar-lg rounded-circle bg-soft-danger border-danger border shadow">
										<i class="fe-users font-22 avatar-title text-danger"></i>
									</div>
									<p class="d-none d-sm-block text-dark font-weight-bold ml-2 mb-0 font-18">Total Proyek</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 d-flex align-items-center justify-content-end">
								<div class="text-right">
									<h3 class="text-dark font-weight-bold mt-1"><span data-plugin="counterup">4</span></h3>
									<p class="d-sm-none d-block text-muted mb-0 text-truncate">AJB bulan ini</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-sm-12 col-md-6 col-xl-6">
					<div class="widget-rounded-circle shadow card-box">
						<div class="row">
							<div class="col-sm-8 col-6">
								<div class="d-flex align-items-center">
									<div class="avatar-lg rounded-circle bg-soft-success border-success border shadow">
										<i class="fe-users font-22 avatar-title text-success"></i>
									</div>
									<p class="d-none d-sm-block text-dark font-weight-bold ml-2 mb-0 font-18">Akumulasi AJB</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 d-flex align-items-center justify-content-end">
								<div class="text-right">
									<h3 class="text-dark font-weight-bold mt-1"><span data-plugin="counterup">127.000</span></h3>
									<p class="d-sm-none d-block text-muted mb-0 text-truncate">Akumulasi AJB</p>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>

			<div class="row">
				<div class="col-12">
					<div class="card shadow">
						<div class="card-title-header d-flex flex-wrap justify-content-sm-between align-items-center">
							<div class="header-title">
								<h4 class="font-18 mb-0">Daftar Proyek</h4>
								<p class="text-muted font-13 mb-0">
									Menampilkan daftar proyek yang tercatat sistem pada perusahaan anda
								</p>
							</div>
							<a href="http://jidoka.alfathtech.co.id/CRM/proyek/galeri_proyek_create" class="btn btn-danger width-lg">
								<i class="fas fa-plus-circle mr-1"></i>
								Tambah Proyek
							</a>
						</div>
						<div class="card-body">

							<div class="row">
								<div class="col-md-12">
									<table id="kons" class="table dt-responsive table-hover border nowrap w-100">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Proyek</th>
												<th>Alamat</th>
												<th>Pelaksana</th>
												<th>Unit Terjual</th>
												<th>Sisa Unit</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr><td>1</td><td>Sekar Pamenang Regency</td><td>JL. Pamenang Dsn. Katang Ds. Sukorejo Kec. Ngasem Kab. Kediri</td><td>-</td><td>0</td><td>40</td><td><div class="btn-group">
																	<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi <i class="mdi mdi-chevron-down"></i></button>
																	<div class="dropdown-menu bg-success dropdown-menu-right">
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_unit/16"><i class="fas fa-home mr-1"></i>Unit</a>
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/galeri_proyek_create/16" id="setujui-pembatalan"><i class="far fa-edit mr-1"></i>Edit</a>
																		<button class="dropdown-item text-white bt_hapus" data-proyek="16" href="#" id="hapus"><i class="fas fa-trash mr-1"></i>Hapus</button>
																	</div>
																</div></td></tr><tr><td>2</td><td>De Waluyo Garden</td><td>JL. Matahari Ds. Tulungrejo Kec. Pare Kab. Kediri</td><td>-</td><td>0</td><td>39</td><td><div class="btn-group">
																	<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi <i class="mdi mdi-chevron-down"></i></button>
																	<div class="dropdown-menu bg-success dropdown-menu-right">
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_unit/17"><i class="fas fa-home mr-1"></i>Unit</a>
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/galeri_proyek_create/17" id="setujui-pembatalan"><i class="far fa-edit mr-1"></i>Edit</a>
																		<button class="dropdown-item text-white bt_hapus" data-proyek="17" href="#" id="hapus"><i class="fas fa-trash mr-1"></i>Hapus</button>
																	</div>
																</div></td></tr><tr><td>3</td><td>Sururi Estate</td><td>JL. Pamenang Ds. Ngasem Kec. Ngasem Kab. Kediri</td><td>-</td><td>0</td><td>68</td><td><div class="btn-group">
																	<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi <i class="mdi mdi-chevron-down"></i></button>
																	<div class="dropdown-menu bg-success dropdown-menu-right">
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_unit/18"><i class="fas fa-home mr-1"></i>Unit</a>
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/galeri_proyek_create/18" id="setujui-pembatalan"><i class="far fa-edit mr-1"></i>Edit</a>
																		<button class="dropdown-item text-white bt_hapus" data-proyek="18" href="#" id="hapus"><i class="fas fa-trash mr-1"></i>Hapus</button>
																	</div>
																</div></td></tr><tr><td>4</td><td>Pagu Hasanah</td><td>Dsn. Padangan Ds. Pagu Kec. Pagu Kab. Kediri</td><td>-</td><td>0</td><td>26</td><td><div class="btn-group">
																	<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi <i class="mdi mdi-chevron-down"></i></button>
																	<div class="dropdown-menu bg-success dropdown-menu-right">
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/kons_unit/19"><i class="fas fa-home mr-1"></i>Unit</a>
																		<a class="dropdown-item text-white" href="http://jidoka.alfathtech.co.id/CRM/proyek/galeri_proyek_create/19" id="setujui-pembatalan"><i class="far fa-edit mr-1"></i>Edit</a>
																		<button class="dropdown-item text-white bt_hapus" data-proyek="19" href="#" id="hapus"><i class="fas fa-trash mr-1"></i>Hapus</button>
																	</div>
																</div></td></tr>										</tbody>
									</table>
								</div>
							</div>

						</div> <!-- end card body-->
					</div> <!-- end card -->
				</div><!-- end col-->
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

<!-- Modal tambah -->
<div class="modal fade" id="tambah-proyek" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h4 class="modal-title" id="myCenterModalLabel">Tambah Proyek</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body p-4">
				<form>

					<div class="form-group">
						<div class="row align-items-center">
							<label for="name" class="col-sm-4 mb-0">Nama Proyek</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row align-items-center">
							<label for="name" class="col-sm-4 mb-0">Alamat Proyek</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row align-items-center">
							<label for="name" class="col-sm-4 mb-0">Pelaksana</label>
							<div class="col-sm-8">
								<select name="" class="form-control">
									<option value="" selected disabled>-- PIlih Pelaksana --</option>
								</select>
							</div>
						</div>
					</div>

					<div class="text-right">
						<button type="button" class="btn btn-danger waves-effect waves-light width-xl mr-1" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-success waves-effect waves-light width-xl">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->

<!-- jquery -->
<script src="http://jidoka.alfathtech.co.id/assets/js/jquery-3.6.0.js"></script>
<!-- Vendor js -->
<script src="http://jidoka.alfathtech.co.id/assets/js/vendor.min.js"></script>


<!-- third party js -->
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Summernote js -->
<script src="http://jidoka.alfathtech.co.id/assets/libs/summernote/summernote-bs4.min.js"></script>

<!-- Select2 js-->
<script src="http://jidoka.alfathtech.co.id/assets/libs/select2/js/select2.min.js"></script>

<!-- Datatables init -->
<script src="http://jidoka.alfathtech.co.id/assets/js/pages/datatables.init.js"></script>

<!-- Plugins js -->
<script src="http://jidoka.alfathtech.co.id/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/dropify/js/dropify.min.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

<!-- Init js-->
<script src="http://jidoka.alfathtech.co.id/assets/js/pages/form-fileuploads.init.js"></script>
<script src="http://jidoka.alfathtech.co.id/assets/js/main/swal_init.js"></script>


<!-- App js -->
<script src="http://jidoka.alfathtech.co.id/assets/js/app.min.js"></script>

<script type="text/javascript">
	var id_proyek;

	$(document).ready(function() {
		$('#kons').DataTable();

		// $('#hapus').on('click', function() {
		// 	swal({
		// 		title: "Apakah anda yakin ingin menghapus?",
		// 		icon: "error",
		// 		buttons: {
		// 			cancel: {
		// 				text: "Tidak",
		// 				value: false,
		// 				visible: true,
		// 				className: "bg-danger text-white",
		// 				closeModal: true,
		// 			},
		// 			confirm: {
		// 				text: "Iya",
		// 				value: true,
		// 				visible: true,
		// 				className: "bg-primary",
		// 				closeModal: true
		// 			},
		// 		}
		// 	})
		// })

		$(document).on('click', '.bt_hapus', function(){
			id_proyek = $(this).attr('data-proyek')

			Swal.fire({
				title: 'Hapus Proyek?',
				text: 'Proyek dapat dihapus jika belum ada pemesanan unit.',
				type: "question",
				showCancelButton: !0,
				confirmButtonColor: "#28bb4b",
				cancelButtonColor: "#f34e4e",
				confirmButtonText: 'Ya',
				cancelButtonText : 'Batal'
			}).then(function(e) {
				if(e.hasOwnProperty('value') && e.value){
					delete_proyek(id_proyek);
				}
			})
		})

		function delete_proyek(id_proyek){
			$.ajax({
				url : 'http://jidoka.alfathtech.co.id/CRM/proyek/delete_proyek',
				type : 'post',
				dataType : 'json',
				data : {
					id_proyek : id_proyek
				},
				success : function(data){
					console.log(data)

					if(data.status==1){
						swal_success('Berhasil Hapus.');
						location.reload();
					}else{
						swal_error('Gagal Hapus.');
					}
				}, error : function(q,w,e){
					alert(e)
					console.log(q.responseText)
				}
			})
		}


	})
</script>

</body>

</html>
