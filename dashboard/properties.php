<?php include 'common/header.php' ?>
                <div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Mülklerim</h4>
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

                <h2 class="main-title d-block d-lg-none">Mülklerim</h2>
				<div class="d-sm-flex align-items-center justify-content-between mb-25">
                    <div class="fs-16">Gösteriliyor <span class="color-dark fw-500">1–5</span> of <span class="color-dark fw-500">40</span> sonuçlar</div>
                    <div class="d-flex ms-auto xs-mt-30">
                        <div class="short-filter d-flex align-items-center ms-sm-auto">
                            <div class="fs-16 me-2">Kısaltma:</div>
                            <select class="nice-select">
                                <option value="0">Newest</option>
                                <option value="1">Best Seller</option>
                                <option value="2">Best Match</option>
                                <option value="3">Price Low</option>
                                <option value="4">Price High</option>
                            </select>
                        </div>
                    </div>
                </div>

				<div class="bg-white card-box p0 border-20">
                    <div class="table-responsive pt-25 pb-25 pe-4 ps-4">
                        <table class="table property-list-table">
                            <thead>
                                <tr>
                                    <th scope="col">Başlık</th>
                                    <th scope="col">Tarih</th>
                                    <th scope="col">Görüş</th>
                                    <th scope="col">Durum</th>
                                    <th scope="col">Aksiyon</th>
                                </tr>
                            </thead>
                            <tbody class="border-0"> 
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="images/img_01.jpg" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Galaxy Flat</a>
                                                <div class="address">Mirpur 10, dhaka, BD</div>
                                                <strong class="price color-dark">$32,800</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>13 Jan, 2023</td>
                                    <td>1210</td>
                                    <td><div class="property-status">Active</div></td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="images/img_02.jpg" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">White House villa</a>
                                                <div class="address">Ranchview, California, USA</div>
                                                <strong class="price color-dark">$42,130</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>09 Jan, 2023</td>
                                    <td>0</td>
                                    <td><div class="property-status pending">Pending</div></td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="images/img_03.jpg" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Luxury villa in Dal lake</a>
                                                <div class="address">Muza link road, ca, usa</div>
                                                <strong class="price color-dark">$2,370/<sub>m</sub></strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>17 Oct, 2022</td>
                                    <td>0</td>
                                    <td><div class="property-status processing">Processing</div></td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="images/img_04.jpg" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Wooden World</a>
                                                <div class="address">Board Baxar, Califronia, USA</div>
                                                <strong class="price color-dark">$63,300</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>23 Sep, 2022</td>
                                    <td>970</td>
                                    <td><div class="property-status">Active</div></td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="images/img_05.jpg" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Orkit Villa</a>
                                                <div class="address">Green Road, Uttara, BD</div>
                                                <strong class="price color-dark">$72,000</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td>15 Aug, 2022</td>
                                    <td>2320</td>
                                    <td><div class="property-status">Active</div></td>
                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /.table property-list-table -->
                    </div>                    
                </div>
				<!-- /.card-box -->


				<ul class="pagination-one d-flex align-items-center justify-content-center style-none pt-40">
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