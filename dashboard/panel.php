<?php include 'common/header.php' ?>
                <div class="dashboard-body">
			    <div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Panel</h4>
						<button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
							<span></span>
						</button>
						<form action="#" class="search-form ms-auto">
							<input type="text" placeholder="Burada ara..">
							<button><img src="../images/lazy.svg" data-src="images/icon/icon_43.svg" alt="" class="lazy-img m-auto"></button>
						</form>
						<div class="profile-notification position-relative dropdown-center ms-3 ms-md-5 me-4">
							<button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/icon/icon_11.svg" alt="" class="lazy-img">
								<div class="badge-pill"></div>
							</button>
							<ul class="dropdown-menu" aria-labelledby="notification-dropdown">
								<li>
									<h4>Bildiri</h4>
									<ul class="style-none notify-list">
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_36.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>3 yeni e-postanız var</h6>
												<span class="time">3 saat önce</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<img src="../images/lazy.svg" data-src="images/icon/icon_37.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>İlanınız onaylandı</h6>
												<span class="time">1 gün önce</span>
											</div>
										</li>
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_38.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Toplantınız iptal edildi</h6>
												<span class="time">3 gün önce</span>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="d-none d-md-block me-3">
							<a href="add_property.php" class="btn-two"><span>İlan Ekle</span> <i class="fa-thin fa-arrow-up-right"></i></a>
						</div>
						<div class="user-data position-relative">
							<button class="user-avatar online position-relative rounded-circle dropdown-toggle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/avatar_01.jpg" alt="" class="lazy-img">
							</button>
							<!-- /.user-avatar -->
							<div class="user-name-data">
								<ul class="dropdown-menu" aria-labelledby="profile-dropdown">
									<li>
										<a class="dropdown-item d-flex align-items-center" href="profile.php"><img src="../images/lazy.svg" data-src="images/icon/icon_23.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Profil</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="account_settings.php"><img src="../images/lazy.svg" data-src="images/icon/icon_24.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Hesap Ayarları</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="../images/lazy.svg" data-src="images/icon/icon_25.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Hesabı Sil</span></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.user-data -->
					</div>
				</header>
				<!-- End Header -->
				<h2 class="main-title d-block d-lg-none">Panel</h2>
				<div class="bg-white border-20">
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="dash-card-one bg-white border-30 position-relative mb-15 skew-none">
								<div class="d-sm-flex align-items-center justify-content-between">
									<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="../images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></div>
									<div class="order-sm-0">
										<span>Tüm Özellikler</span>
										<div class="value fw-500">1.7 b+</div>
									</div>
								</div>
							</div>
							<!-- /.dash-card-one -->
						</div>
						<div class="col-lg-3 col-6">
							<div class="dash-card-one bg-white border-30 position-relative mb-15">
								<div class="d-sm-flex align-items-center justify-content-between">
									<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="../images/lazy.svg" data-src="images/icon/icon_13.svg" alt="" class="lazy-img"></div>
									<div class="order-sm-0">
										<span>Toplam Bekleyen</span>
										<div class="value fw-500">03</div>
									</div>
								</div>
							</div>
							<!-- /.dash-card-one -->
						</div>
						<div class="col-lg-3 col-6">
							<div class="dash-card-one bg-white border-30 position-relative mb-15">
								<div class="d-sm-flex align-items-center justify-content-between">
									<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="../images/lazy.svg" data-src="images/icon/icon_14.svg" alt="" class="lazy-img"></div>
									<div class="order-sm-0">
										<span>Toplam Görüntüleme</span>
										<div class="value fw-500">4.8 b</div>
									</div>
								</div>
							</div>
							<!-- /.dash-card-one -->
						</div>
						<div class="col-lg-3 col-6">
							<div class="dash-card-one bg-white border-30 position-relative mb-15">
								<div class="d-sm-flex align-items-center justify-content-between">
									<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="../images/lazy.svg" data-src="images/icon/icon_15.svg" alt="" class="lazy-img"></div>
									<div class="order-sm-0">
										<span>Toplam Favoriler</span>
										<div class="value fw-500">07</div>
									</div>
								</div>
							</div>
							<!-- /.dash-card-one -->
						</div>
					</div>
				</div>

				<div class="row gx-xxl-5 d-flex pt-15 lg-pt-10">
					<div class="col-xl-7 col-lg-6 d-flex flex-column">
						<div class="user-activity-chart bg-white border-20 mt-30 h-100">
							<div class="d-flex align-items-center justify-content-between plr">
								<h5 class="dash-title-two">Mülk Görünümü</h5>
								<div class="short-filter d-flex align-items-center">
									<div class="fs-16 me-2">Short by:</div>
									<select class="nice-select fw-normal">
										<option value="0">Haftalık</option>
										<option value="1">Günlük</option>
										<option value="2">Aylık</option>
									</select>
								</div>
							</div>
							<div class="plr mt-50">
								<div class="chart-wrapper">
									<canvas id="property-chart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 d-flex">
						<div class="recent-job-tab bg-white border-20 mt-30 plr w-100">
							<h5 class="dash-title-two">Son Mesaj</h5>
							<div class="message-wrapper">
								<div class="message-sidebar border-0">
									<div class="email-read-panel">
										<div class="email-list-item read border-0 pt-0">
											<div class="email-short-preview position-relative">
												<div class="d-flex align-items-center justify-content-between">
													<div class="sender-name">Jenny Rio.</div>
													<div class="date">22 Ağu</div>
												</div>
												<div class="mail-sub">Google'dan iş sorgulama.</div>
												<div class="mail-text">Merhaba, ben Google'dan Jenny. En büyük çevrimiçi platformlardan biriyiz...</div>
												<div class="attached-file-preview d-flex align-items-center mt-15">
													<div class="file d-flex align-items-center me-2">
														<img src="../images/lazy.svg" data-src="images/icon/icon_28.svg" alt="" class="lazy-img me-2">
														<span>detaylar.pdf</span>
													</div>
												</div>
												<!-- /.attached-file-preview -->
											</div>
											<!-- /.email-short-preview -->
										</div>
										<!-- /.email-list-item -->

										<div class="email-list-item primary">
											<div class="email-short-preview position-relative">
												<div class="d-flex align-items-center justify-content-between">
													<div class="sender-name">Hasan Islam.</div>
													<div class="date">22 Mayıs</div>
												</div>
												<div class="mail-sub">Ürün Tasarımcısı Fırsatları</div>
												<div class="mail-text">Merhaba, Uber'den selamlar. Umarım iyisinizdir. Size şu konuda başvuruyorum...</div>
											</div>
											<!-- /.email-short-preview -->
										</div>
										<!-- /.email-list-item -->

										<div class="email-list-item">
											<div class="email-short-preview position-relative">
												<div class="d-flex align-items-center justify-content-between">
													<div class="sender-name">Jakie Chan</div>
													<div class="date">22 Temmuz</div>
												</div>
												<div class="mail-sub">Avcılık Pazarlama Uzmanı</div>
												<div class="mail-text">Merhaba, ben HuntX'ten Jannat. Müşterilerimize iş çözümleri sunuyoruz.</div>
											</div>
											<!-- /.email-short-preview -->
										</div>
										<!-- /.email-list-item -->
									</div>
									<!-- /.email-read-panel -->
								</div>
								<!-- /.message-sidebar -->
							</div>
							<!-- /.message-wrapper -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.dashboard-body -->



		
<?php include 'common/footer.php'; ?>