<!DOCTYPE html>
<html lang="en">

<style>
	.bd-aside .btn::before {
		width: 1.25em;
		line-height: 0;
		content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgb(255, 255, 255)' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
		transition: transform .35s ease;
		transform-origin: .5em 50%;
		margin-right: 5px;
		margin-left: -5px;
	}

	.bd-aside .btn[aria-expanded="true"]::before {
		transform: rotate(90deg);
	}
</style>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../assets/img/logo.png" />
	<title>Ronys Fried Chicken</title>
	<link href="../../assets/css/app.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<link href="../../assets/css/sweetalert.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">RFC & R'CHICKS</span>
				</a>

				<ul class="sidebar-nav mt-4">
					<?php
					$url = rtrim($_SERVER['REQUEST_URI'], '/');
					$url = explode('/', $url);
					$url = $url[4];
					?>
					<aside class="bd-aside flex-column mb-3" id="aside">
						<li class="sidebar-item <?= $url == 'index' ? 'active' : '' ?>">
							<a class="sidebar-link" href="index">
								<span data-feather="sliders"></span>
								Dashboard
							</a>
						</li>

						<li class="sidebar-item d-flex justify-content-between" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#master-collapse" aria-controls="master-collapse">
							<a class="sidebar-link text-light">
								<span class="text-light" data-feather="server"></span>
								Master Data
								<a class="btn d-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#master-collapse" aria-controls="master-collapse"></a>
							</a>
						</li>
						<ul class="list-unstyled collapse" id="master-collapse">
							<li class="sidebar-item <?= $url == 'barang' ? 'active' : '' ?>">
								<a class="sidebar-link" href="barang">
									<span data-feather="chevron-right"></span>
									Barang
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'member' ? 'active' : '' ?>">
								<a class="sidebar-link" href="member">
									<span data-feather="chevron-right"></span>
									Member
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'menu' ? 'active' : '' ?>">
								<a class="sidebar-link" href="menu">
									<span data-feather="chevron-right"></span>
									Menu
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'relasi' ? 'active' : '' ?>">
								<a class="sidebar-link" href="relasi">
									<span data-feather="chevron-right"></span>
									Relasi Menu.
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'kategori' ? 'active' : '' ?>">
								<a class="sidebar-link" href="kategori">
									<span data-feather="chevron-right"></span>
									Kategori Menu.
								</a>
							</li>
						</ul>

						<li class="sidebar-item d-flex justify-content-between" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#kas-collapse" aria-controls="kas-collapse">
							<a class="sidebar-link text-light">
								<span class="text-light" data-feather="dollar-sign"></span>
								Data Kas
								<a class="btn d-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#kas-collapse" aria-controls="kas-collapse"></a>
							</a>
						</li>
						<ul class="list-unstyled collapse" id="kas-collapse">
							<li class="sidebar-item <?= $url == 'tunai' ? 'active' : '' ?>">
								<a class="sidebar-link" href="tunai">
									<span data-feather="chevron-right"></span>
									Tunai
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'bank' ? 'active' : '' ?>">
								<a class="sidebar-link" href="bank">
									<span data-feather="chevron-right"></span>
									Bank.
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'penjualan' ? 'active' : '' ?>">
								<a class="sidebar-link" href="penjualan">
									<span data-feather="chevron-right"></span>
									Penjualan
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'utang' ? 'active' : '' ?>">
								<a class="sidebar-link" href="utang">
									<span data-feather="chevron-right"></span>
									Utang
								</a>
							</li>
						</ul>

						<li class="sidebar-item d-flex justify-content-between" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tran-collapse" aria-controls="tran-collapse">
							<a class="sidebar-link text-light">
								<span class="text-light" data-feather="tag"></span>
								Transaksi
								<a class="btn d-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#tran-collapse" aria-controls="tran-collapse"></a>
							</a>
						</li>
						<ul class="list-unstyled collapse" id="tran-collapse">
							<li class="sidebar-item <?= $url == 'relasi_tran' ? 'active' : '' ?>">
								<a class="sidebar-link" href="relasi_tran">
									<span data-feather="chevron-right"></span>
									Relasi Menu.
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'produksi' ? 'active' : '' ?>">
								<a class="sidebar-link" href="produksi">
									<span data-feather="chevron-right"></span>
									Produksi
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'pembelian' ? 'active' : '' ?>">
								<a class="sidebar-link" href="pembelian">
									<span data-feather="chevron-right"></span>
									Pembelian Bahan
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'penjualan_tran' ? 'active' : '' ?>">
								<a class="sidebar-link" href="penjualan_tran">
									<span data-feather="chevron-right"></span>
									Penjualan
								</a>
							</li>
						</ul>

						<li class="sidebar-item d-flex justify-content-between" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#lapTran-collapse" aria-controls="lapTran-collapse">
							<a class="sidebar-link text-light">
								<span class="text-light" data-feather="bar-chart-2"></span>
								Laporan Transaksi
								<a class="btn d-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#lapTran-collapse" aria-controls="lapTran-collapse"></a>
							</a>
						</li>
						<ul class="list-unstyled collapse" id="lapTran-collapse">
							<li class="sidebar-item <?= $url == 'produksi_lap' ? 'active' : '' ?>">
								<a class="sidebar-link" href="produksi_lap">
									<span data-feather="chevron-right"></span>
									Produksi
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'pembelian_lap' ? 'active' : '' ?>">
								<a class="sidebar-link" href="pembelian_lap">
									<span data-feather="chevron-right"></span>
									Pembelian
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'pembelian_lapitem' ? 'active' : '' ?>">
								<a class="sidebar-link" href="pembelian_lapitem">
									<span data-feather="chevron-right"></span>
									Pembelian Item.
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'penjualan_lap' ? 'active' : '' ?>">
								<a class="sidebar-link" href="penjualan_lap">
									<span data-feather="chevron-right"></span>
									Penjualan
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'penjualan_lapitem' ? 'active' : '' ?>">
								<a class="sidebar-link" href="penjualan_lapitem">
									<span data-feather="chevron-right"></span>
									Penjualan Item
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'utang_bayar' ? 'active' : '' ?>">
								<a class="sidebar-link" href="utang_bayar">
									<span data-feather="chevron-right"></span>
									Pembayaran Utang
								</a>
							</li>
						</ul>

						<li class="sidebar-item d-flex justify-content-between" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#lapUang-collapse" aria-controls="lapUang-collapse">
							<a class="sidebar-link text-light">
								<span class="text-light" data-feather="bar-chart-2"></span>
								Laporan Keuangan
								<a class="btn d-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#lapUang-collapse" aria-controls="lapUang-collapse"></a>
							</a>
						</li>
						<ul class="list-unstyled collapse" id="lapUang-collapse">
							<li class="sidebar-item <?= $url == 'laba_rugi' ? 'active' : '' ?>">
								<a class="sidebar-link" href="laba_rugi">
									<span data-feather="chevron-right"></span>
									Laba Rugi.
								</a>
							</li>
							<li class="sidebar-item <?= $url == 'neraca' ? 'active' : '' ?>">
								<a class="sidebar-link" href="neraca">
									<span data-feather="chevron-right"></span>
									Neraca.
								</a>
							</li>
						</ul>
					</aside>

				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Versi Demo</strong>
						<div class="mb-3 text-sm">
							Ini adalah demo UI Design, segera hubungi kami untuk koreksi & tahap selanjutnya
						</div>
						<div class="d-grid">
							<a href="https://api.whatsapp.com/send?phone=087733807998" class="btn btn-primary"><span data-feather="phone"></span></a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">UB0987 <?= date('d-m-Y') ?></div>
												<div class="text-muted small mt-1">Jatuh tempo 5 hari lagi</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Stok Opname</div>
												<div class="text-muted small mt-1">Sekarang tanggal <?= date('d-m-Y') ?>.</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Stok RFC Pusat</div>
												<div class="text-muted small mt-1">Stok Tepung terigu tinggal 20 kg.</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">RFC Karangnunggal</div>
												<div class="text-muted small mt-1">Belum melakukan laporan.</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="../../assets/img/logo.png" class="avatar img-fluid rounded-circle" alt="Charles Hall" /> <span class="text-dark">Aceng Komara</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="user"><i class="align-middle me-1" data-feather="user"></i> Pengguna</a>
								<a class="dropdown-item" href="user?pass"><i class="align-middle me-1" data-feather="settings"></i> Ubah Password</a>
								<a class="dropdown-item" href="manual"><i class="align-middle me-1" data-feather="help-circle"></i> Manual</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../../">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>