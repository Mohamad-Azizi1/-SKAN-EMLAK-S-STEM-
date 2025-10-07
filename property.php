<?php include 'common/header.php' ?>
<!--
		=====================================================
			Property Listing Six
		=====================================================
		-->
		<div class="property-listing-six bg-pink-two pt-110 md-pt-80 pb-170 xl-pb-120 mt-150 xl-mt-120">
			<div class="container">
                <div class="search-wrapper-one layout-one bg position-relative mb-75 md-mb-50">
                    <div class="bg-wrapper border-layout">
                        <form action="#">
                            <div class="row gx-0 align-items-center">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="input-box-one border-left">
                                        <div class="label">I’m looking to...</div>
                                        <select class="nice-select">
                                            <option value="1">Buy Apartments</option>
                                            <option value="2">Rent Condos</option>
                                            <option value="3">Sell Houses</option>
                                            <option value="4">Rent Industrial</option>
                                            <option value="6">Sell Villas</option>
                                        </select>
                                    </div>
                                    <!-- /.input-box-one -->
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="input-box-one border-left">
                                        <div class="label">Location</div>
                                        <select class="nice-select location">
                                            <option value="1">Dhanmondi, Dhaka</option>
                                            <option value="2">Acapulco, Mexico</option>
                                            <option value="3">Berlin, Germany</option>
                                            <option value="4">Cannes, France</option>
                                            <option value="5">Delhi, India</option>
                                            <option value="6">Giza, Egypt </option>
                                            <option value="7">Havana, Cuba</option>
                                        </select>
                                    </div>
                                    <!-- /.input-box-one -->
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="input-box-one border-left border-lg-0">
                                        <div class="label">Price Range</div>
                                        <select class="nice-select">
                                            <option value="1">$10,000 - $200,000</option>
                                            <option value="2">$200,000 - $300,000</option>
                                            <option value="2">$300,000 - $400,000</option>
                                        </select>
                                    </div>
                                    <!-- /.input-box-one -->
                                </div>
                                <div class="col-xl-3">
                                    <div class="input-box-one lg-mt-20">
                                        <div class="d-flex align-items-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#advanceFilterModal" class="search-modal-btn sm tran3s text-uppercase fw-500 d-inline-flex align-items-center me-3">
                                                <i class="fa-light fa-sliders-up"></i>
                                            </a>
                                            <button class="fw-500 text-uppercase tran3s search-btn">Search</button>
                                        </div>
                                    </div>
                                    <!-- /.input-box-one -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.search-wrapper-one -->
				<div class="listing-header-filter d-sm-flex justify-content-between align-items-center mb-40 lg-mb-30">
                    <div>Showing <span class="color-dark fw-500">1–9</span> of <span class="color-dark fw-500">170</span> results</div>
                    <div class="d-flex align-items-center xs-mt-20">
                        <div class="short-filter d-flex align-items-center">
                            <div class="fs-16 me-2">Short by:</div>
                            <select class="nice-select">
                                <option value="0">Newest</option>
                                <option value="1">Best Seller</option>
                                <option value="2">Best Match</option>
                                <option value="3">Price Low</option>
                                <option value="4">Price High</option>
                            </select>
                        </div>
                        <a href="listing_04.html" class="tran3s layout-change rounded-circle ms-auto ms-sm-3" data-bs-toggle="tooltip" title="Switch To List View"><i class="fa-regular fa-bars"></i></a>
                    </div>
                </div>
                <!-- /.listing-header-filter -->

                <div class="row gx-xxl-5">
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp">
                        <div class="listing-card-one border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel1" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$28,100.00</strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Luxury villa in Dal lake.</a>
                                <div class="address">Mirpur 10, Stadium</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$42,500.00</strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_05.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$28,100.00</strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_06.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Luxury villa in Dal lake.</a>
                                <div class="address">Mirpur 10, Stadium</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_27.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_04.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Blueberry villa</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,280/<sub>m</sub></strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_26.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">White House villa</a>
                                <div class="address">Muza link road, ca, usa</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1270 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$21,000.00</strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
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
                                                <a href="#" class="d-block"><img src="images/listing/img_30.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_06.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="property_details.php" class="title tran3s">Modern Apartments</a>
                                <div class="address">Mirpur 10, Stadium dhaka 1208</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">1370 sqft</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">03 bed</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">$3,120/<sub>m</sub></strong>
                                    <a href="property_details.php" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                </div>
                <div class="pt-50 md-pt-20 text-center">
                    <ul class="pagination-two d-inline-flex align-items-center justify-content-center style-none">
                        <li><a href="#"><i class="fa-regular fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">13</a></li>
                        <li><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                    </ul>
                </div>
			</div>
		</div>
		<!-- /.property-listing-six -->



		<!--
		=====================================================
			Fancy Banner Two
		=====================================================
		-->
		<div class="fancy-banner-two position-relative z-1 pt-90 lg-pt-50 pb-90 lg-pb-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="title-one text-center text-lg-start md-mb-40 pe-xl-5">
							<h3 class="text-white m0">Start your <span>Journey<img src="images/lazy.svg" data-src="images/shape/title_shape_06.svg" alt="" class="lazy-img"></span> As a Retailer.</h3>
						</div>
						<!-- /.title-one -->
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper me-auto ms-auto me-lg-0">
							<form action="#">
								<input type="email" placeholder="Email address">
								<button>Get Started</button>
							</form>
							<div class="fs-16 mt-10 text-white">Already a Agent? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in.</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-two -->

<?php include 'common/footer.php'; ?>