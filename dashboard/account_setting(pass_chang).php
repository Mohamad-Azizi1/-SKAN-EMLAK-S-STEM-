<?php include 'common/header.php' ?>

		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Şifre değiştir</h4>
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
						<!-- /.user-data -->
					</div>
				</header>
				<!-- End Header -->

				<h2 class="main-title d-block d-lg-none">Şifre değiştir</h2>

				<div class="bg-white card-box border-20">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="dash-input-wrapper mb-20">
                                    <label for="">Eski Şifre*</label>
                                    <input type="password" placeholder="Type current password">
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                            <div class="col-12">
                                <div class="dash-input-wrapper mb-20">
                                    <label for="">Yeni Şifre*</label>
                                    <input type="password" placeholder="Confirm your new password">
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
							<div class="col-12">
                                <div class="dash-input-wrapper mb-20">
                                    <label for="">Şifreyi Onayla*</label>
                                    <input type="password" placeholder="Confirm your new password">
                                </div>
                                <!-- /.dash-input-wrapper -->
                            </div>
                        </div>

                        <div class="button-group d-inline-flex align-items-center">
                            <a href="#" class="dash-btn-two tran3s">Kaydet ve Güncelle</a>
                        </div>	
                    </form>
                </div>
				<!-- /.card-box -->				
			</div>
		</div>
		<!-- /.dashboard-body -->



<?php include 'common/footer.php'; ?>