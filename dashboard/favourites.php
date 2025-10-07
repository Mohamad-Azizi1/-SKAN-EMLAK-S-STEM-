<?php include 'common/header.php' ?>

		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Favoriler</h4>
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

				<h2 class="main-title d-block d-lg-none">Favourites</h2>

				<div class="row gx-xxl-5">
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">KİRALIK</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel1" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel2" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$28,100.00</strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel3" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Luxury villa in Dal lake.</a>
                                <div class="address">Mirpur 10, Stadium</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$42,500.00</strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel4" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel5" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_05.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$28,100.00</strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel6" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_06.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Luxury villa in Dal lake.</a>
                                <div class="address">Mirpur 10, Stadium</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel7" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel7" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel7" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel7" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_27.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel8" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel8" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel8" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel8" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_26.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$21,000.00</strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel9" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel9" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel9" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel9" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_30.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_06.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="../images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="../listing_details_03.html" class="title tran3s">Modern Apartments</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="../images/lazy.svg" data-src="../images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,120/<sub>m</sub></strong>
                                    <a href="../listing_details_03.html" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                </div>
				<ul class="pagination-one d-flex align-items-center style-none pt-20">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>....</li>
                    <li class="ms-2"><a href="#" class="d-flex align-items-center">Son <img src="../images/icon/icon_46.svg" alt="" class="ms-2"></a></li>
                </ul>	
			</div>
		</div>
		<!-- /.dashboard-body -->



<?php include 'common/footer.php'; ?>