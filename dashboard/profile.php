<?php include 'common/header.php' ?>
			<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Profil</h4>
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
				<h2 class="main-title d-block d-lg-none">Profil</h2>

				<div class="bg-white card-box border-20">
                    <div class="user-avatar-setting d-flex align-items-center mb-30">
                        <img src="../images/lazy.svg" data-src="images/avatar_02.jpg" alt="" class="lazy-img user-img">
                        <div class="upload-btn position-relative tran3s ms-4 me-3">
                            Yeni fotoğraf yükle
                            <input type="file" id="uploadImg" name="uploadImg" placeholder="">
                        </div>
                        <button class="delete-btn tran3s">Sil</button>
                    </div>
                    <!-- /.user-avatar-setting -->
					<div class="row">
						<div class="col-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">Kullanıcı adı*</label>
								<input type="text" placeholder="Mohammad Azizi">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Adı*</label>
								<input type="text" placeholder="Mohammad">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Soyadı*</label>
								<input type="text" placeholder="Azizi">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">E-posta*</label>
								<input type="email" placeholder="companyinc@mail.com">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Konum*</label>
								<select class="nice-select">
									<option>Ajan</option>
									<option>Ajans</option>
								</select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Telefon Numarası*</label>
								<input type="tel" placeholder="+90 551 942 5986">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Web sitesi*</label>
								<input type="text" placeholder="http://somename.com">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-12">
							<div class="dash-input-wrapper">
								<label for="">Hakkında*</label>
								<textarea class="size-lg" placeholder="Son 4 yıldır web tasarımcısı, grafik tasarımcısı ve UI/UX tasarımcısı olarak çalışıyorum."></textarea>
								<div class="alert-text">Profiliniz için kısa bir açıklama. URL'ler köprü metinlidir.</div>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
					</div>
                    
                    
                </div>
				<!-- /.card-box -->

				<div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Sosyal Medya</h4>

                    <div class="dash-input-wrapper mb-20">
                        <label for="">Bağlantı 1</label>
                        <input type="text" placeholder="https://www.facebook.com/zubayer0145">
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-input-wrapper mb-20">
                        <label for="">Bağlantı 2</label>
                        <input type="text" placeholder="https://twitter.com/FIFAcom">
                    </div>
                    <!-- /.dash-input-wrapper -->
					<a href="#" class="dash-btn-one"><i class="bi bi-plus"></i>Daha fazla bağlantı ekle</a>
                </div>
				<!-- /.card-box -->

				<div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Adress ve Konum</h4>
					<div class="row">
						<div class="col-12">
							<div class="dash-input-wrapper mb-25">
								<label for="">Adress*</label>
								<input type="text" placeholder="19 Yawkey Yolu">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-3">
							<select class="nice-select">
									<option value="0">Ülke *</option>
									<option>Afganistan</option>
									<option>Arnavutluk</option>
									<option>Cezayir</option>
									<option>Andorra</option>
									<option>Angola</option>
									<option>Antigua ve Barbuda</option>
									<option>Arjantin</option>
									<option>Ermenistan</option>
									<option>Avustralya</option>
									<option>Avusturya</option>
									<option>Azerbaycan</option>
									<option>Bahamalar</option>
									<option>Bahreyn</option>
									<option>Bangladeş</option>
									<option>Barbados</option>
									<option>Beyaz Rusya</option>
									<option>Belçika</option>
									<option>Belize</option>
									<option>Benin</option>
									<option>Butan</option>
								</select>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-3">
							<div class="dash-input-wrapper mb-25">
								<label for="">Şehir*</label>
                                <select class="nice-select">
                                 <option value="0">Şehir Seçin</option>
                                 <option>Dakka</option>  <!-- Dhaka -->
                                 <option>Tokyo</option>  <!-- Aynı kalır -->
                                 <option>Delhi</option>  <!-- Aynı kalır -->
                                 <option>Şangay</option>  <!-- Shanghai -->
                                 <option>Bombay</option>  <!-- Mumbai (resmi adı Mumbai olsa da Türkçede hala Bombay yaygın) -->
                                 <option>Banglör</option>  <!-- Bangalore -->
                                </select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-3">
							<div class="dash-input-wrapper mb-25">
								<label for="">Posta kodu*</label>
								<input type="number" placeholder="1708">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-3">
							<div class="dash-input-wrapper mb-25">
								<label for="">İlçe*</label>
								<select class="nice-select">
								 <option value="0">İlçe Seçin</option>
                                 <option>Dakka</option>  <!-- Dhaka -->
                                 <option>Tokyo</option>  <!-- Aynı kalır -->
                                 <option>Delhi</option>  <!-- Aynı kalır -->
                                 <option>Şangay</option>  <!-- Shanghai -->
                                 <option>Bombay</option>  <!-- Mumbai (resmi adı Mumbai olsa da Türkçede hala Bombay yaygın) -->
                                 <option>Banglör</option>  <!-- Bangalore -->
								</select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-12">
							<div class="dash-input-wrapper mb-25">
								<label for="">Harita Konumu*</label>
								<div class="position-relative">
									<input type="text" placeholder="XC23+6XC, İstanbul, N105">
									<button class="location-pin tran3s"><img src="../images/lazy.svg" data-src="images/icon/icon_16.svg" alt="" class="lazy-img m-auto"></button>
								</div>
								<div class="map-frame mt-30">
									<div class="gmap_canvas h-100 w-100">
										<iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
									</div>
								</div>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
					</div>
                </div>
				<!-- /.card-box -->

				<div class="button-group d-inline-flex align-items-center mt-30">
					<a href="#" class="dash-btn-two tran3s me-3">Kaydet</a>
					<a href="#" class="dash-cancel-btn tran3s">İptal</a>
				</div>				
			</div>
		</div>
		<!-- /.dashboard-body -->


		
<?php include 'common/footer.php'; ?>