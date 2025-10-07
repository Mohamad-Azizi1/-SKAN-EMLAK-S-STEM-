<?php include 'common/header.php' ?>
<?php
if (isset($_POST['guncelle'])) {
    // Resim Yükleme veya Mevcut Resmi Koruma
    $resim1 = $_FILES['resim']['name'] != '' ? resim_yukle($_FILES, '/mulkler') : ($_POST['mevcut_resim'] ?? null);
    $resim2 = $_FILES['resim2']['name'] != '' ? resim_yukle2($_FILES, '/mulkler') : ($_POST['mevcut_resim2'] ?? null);

    // Güncelleme sorgusu
    $guncelle = $db->prepare(
        "UPDATE mulkler SET 
            kategori_id      = :kategori_id,
            tip_id           = :tip_id,
            baslik           = :baslik,
            aciklama         = :aciklama,
            fiyat            = :fiyat,
            adres            = :adres,
            metrekare        = :metrekare,
            oda_sayisi       = :oda_sayisi,
            bina_yasi        = :bina_yasi,
            kat              = :kat,
            toplam_kat       = :toplam_kat,
            isitma           = :isitma,
            banyo_sayisi     = :banyo_sayisi,
            balkon           = :balkon,
            esyali           = :esyali,
            aidat            = :aidat,
            tapu_durumu      = :tapu_durumu,
            krediye_uygun    = :krediye_uygun,
            takasa_uygun     = :takasa_uygun,
            il               = :il,
            ilce             = :ilce,
            mahalle          = :mahalle,
            resim            = :resim,
            resim2           = :resim2
        WHERE id = :id"
    );

    $guncelle->execute([
        'kategori_id'    => $_POST['kategori_id'],
        'tip_id'         => $_POST['tip_id'],
        'baslik'         => $_POST['baslik'],
        'aciklama'       => $_POST['aciklama'],
        'fiyat'          => $_POST['fiyat'],
        'adres'          => $_POST['adres'],
        'metrekare'      => $_POST['metrekare'],
        'oda_sayisi'     => $_POST['oda_sayisi'],
        'bina_yasi'      => $_POST['bina_yasi'],
        'kat'            => $_POST['kat'],
        'toplam_kat'     => $_POST['toplam_kat'],
        'isitma'         => $_POST['isitma'],
        'banyo_sayisi'   => $_POST['banyo_sayisi'],
        'balkon'         => $_POST['balkon'],
        'esyali'         => $_POST['esyali'],
        'aidat'          => $_POST['aidat'],
        'tapu_durumu'    => $_POST['tapu_durumu'],
        'krediye_uygun'  => $_POST['krediye_uygun'],
        'takasa_uygun'   => $_POST['takasa_uygun'],
        'il'             => $_POST['il'],
        'ilce'           => $_POST['ilce'],
        'mahalle'        => $_POST['mahalle'],
        'resim'          => $resim1,
        'resim2'         => $resim2,
        'id'             => $_GET['id']
    ]);

    header("Location: admin/mulkler.php");
    exit();
}

if (isset($_POST['kaydet'])) {
	echo '<pre>';
print_r($_POST);
echo '</pre>';
	
    // Resim Yükleme veya Varsayılan Resmi Ayarlama
    $resim1 = $_FILES['resim']['name'] != '' ? resim_yukle($_FILES, '/mulkler') : 'default.jpg';
    $resim2 = $_FILES['resim2']['name'] != '' ? resim_yukle2($_FILES, '/mulkler') : 'default.jpg';

    // Yeni kayıt ekleme
    $kaydet = $db->prepare(
        "INSERT INTO mulkler 
            (kategori_id, tip_id, baslik, aciklama, fiyat, adres, metrekare, oda_sayisi, bina_yasi, kat, toplam_kat, isitma, banyo_sayisi, balkon, esyali, aidat, tapu_durumu, krediye_uygun, takasa_uygun, il, ilce, mahalle, resim, resim2) 
        VALUES 
            (:kategori_id, :tip_id, :baslik, :aciklama, :fiyat, :adres, :metrekare, :oda_sayisi, :bina_yasi, :kat, :toplam_kat, :isitma, :banyo_sayisi, :balkon, :esyali, :aidat, :tapu_durumu, :krediye_uygun, :takasa_uygun, :il, :ilce, :mahalle, :resim, :resim2)"
    );

    $kaydet->execute([
        'kategori_id'    => $_POST['kategori_id'],
        'tip_id'         => $_POST['tip_id'],
        'baslik'         => $_POST['baslik'],
        'aciklama'       => $_POST['aciklama'],
        'fiyat'          => $_POST['fiyat'],
        'adres'          => $_POST['adres'],
        'metrekare'      => $_POST['metrekare'],
        'oda_sayisi'     => $_POST['oda_sayisi'],
        'bina_yasi'      => $_POST['bina_yasi'],
        'kat'            => $_POST['kat'],
        'toplam_kat'     => $_POST['toplam_kat'],
        'isitma'         => $_POST['isitma'],
        'banyo_sayisi'   => $_POST['banyo_sayisi'],
        'balkon'         => $_POST['balkon'],
        'esyali'         => $_POST['esyali'],
        'aidat'          => $_POST['aidat'],
        'tapu_durumu'    => $_POST['tapu_durumu'],
        'krediye_uygun'  => $_POST['krediye_uygun'],
        'takasa_uygun'   => $_POST['takasa_uygun'],
        'il'             => $_POST['il'],
        'ilce'           => $_POST['ilce'],
        'mahalle'        => $_POST['mahalle'],
        'resim'          => $resim1,
        'resim2'         => $resim2
    ]);

    header("Location: admin/mulkler.php");
    exit();
}

// Güncelleme için mevcut veriyi çek
if (isset($_GET['id'])) {
    $cek = $db->prepare("SELECT * FROM mulkler WHERE id=:id");
    $cek->execute(['id' => $_GET['id']]);
    $veriler = $cek->fetch(PDO::FETCH_ASSOC);
}

// Kategoriler ve tipleri çek
$kategoriler = sql($db, "mulk_kategorileri");
$mulk_tipleri = sql($db, "mulk_tipleri");

?>


		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Yeni Mülk Ekle</h4>
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

				<form action="" method="post" enctype="multipart/form-data">

    <h2 class="main-title d-block d-lg-none">Yeni Mülk Ekle</h2>

    <div class="bg-white card-box border-20">
        <h4 class="dash-title-three">Genel Bakış</h4>
        
        <div class="dash-input-wrapper mb-30">
            <label for="">Mülkiyet Başlığı*</label>
            <input type="text" name="baslik" placeholder="Mülkünüzün Adı" required>
        </div>

        <div class="dash-input-wrapper mb-30">
            <label for="">Tanım*</label>
            <textarea class="size-lg" name="tanim" placeholder="Emlak hakkında yaz..." required></textarea>
        </div>

        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Kategori*</label>
                    <select class="nice-select" name="mulk_kategori_id" required>
                        <option value="0">Seçiniz</option>
                        <?php foreach ($kategoriler as $kategori): ?>
                            <option value="<?= $kategori['id'] ?>">
                                <?= htmlspecialchars($kategori['kategori_adi']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Mülk Tipi*</label>
                    <select class="nice-select" name="mulk_tip_id" required>
                        <option value="0">Seçiniz</option>
                        <?php foreach ($mulk_tipleri as $mulk_tipi): ?>
                            <option value="<?= $mulk_tipi['id'] ?>">
                                <?= htmlspecialchars($mulk_tipi['adi']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Fiyat*</label>
                    <input type="text" name="fiyat" placeholder="Fiyatınız" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Yıllık Vergi Oranı*</label>
                    <input type="text" name="vergi_orani" placeholder="Vergi Oranı" required>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white card-box border-20 mt-40">
        <h4 class="dash-title-three">Listeleme Ayrıntıları</h4>
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Boyut (ft)*</label>
                    <input type="text" name="boyut" placeholder="Ör: 3,210 sqft" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Yatak odaları*</label>
                    <select class="nice-select" name="yatak_odasi" required>
                        <option value="0">0</option><option value="1">1</option>
                        <option value="2">2</option><option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Banyolar*</label>
                    <select class="nice-select" name="banyo" required>
                        <option value="0">0</option><option value="1">1</option>
                        <option value="2">2</option><option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Mutfaklar*</label>
                    <select class="nice-select" name="mutfak" required>
                        <option value="0">0</option><option value="1">1</option>
                        <option value="2">2</option><option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Garajlar</label>
                    <select class="nice-select" name="garaj">
                        <option value="0">0</option><option value="1">1</option>
                        <option value="2">2</option><option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Garaj Boyutu</label>
                    <input type="text" name="garaj_boyutu" placeholder="Ör: 1,230 sqft">
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Yapım Yılı*</label>
                    <input type="text" name="yapim_yili" placeholder="Tür Yılı" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                    <label for="">Kat Sayısı*</label>
                    <select class="nice-select" name="kat_sayisi" required>
                        <option value="0">Zemin</option><option value="1">1</option>
                        <option value="2">2</option><option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="dash-input-wrapper">
                    <label for="">Açıklama*</label>
                    <textarea class="size-lg" name="aciklama" placeholder="Emlak hakkında yaz..." required></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white card-box border-20 mt-40">
        <h4 class="dash-title-three">Fotoğraf ve Video Eki</h4>
        <div class="dash-input-wrapper mb-20">
            <label for="">Dosya Eki*</label>
            <input type="file" name="dosyalar[]" multiple required>
            <small>.jpg, .png, .mp4 dosyasını yükleyin</small>
        </div>
    </div>

    <div class="bg-white card-box border-20 mt-40">
        <h4 class="dash-title-three m0 pb-5">Seçili Olanaklar</h4>
        <ul class="style-none d-flex flex-wrap filter-input">
            <li><input type="checkbox" name="olanaklar[]" value="klima"><label>Klima ve Isıtma</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="garaj"><label>Garajlar</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="havuz"><label>Yüzme havuzu</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="otopark"><label>Otopark</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="golmanzarasi"><label>Göl Manzarası</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="bahce"><label>Bahçe</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="engelli"><label>Engelli Erişimi</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="evcil"><label>Evcil Hayvan Dostu</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="tavan"><label>Tavan Yüksekliği</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="dus"><label>Açık Hava Duşu</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="buzdolabi"><label>Buzdolabı</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="somine"><label>Şömine</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="wifi"><label>Wifi</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="tv"><label>TV Kablosu</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="barbeku"><label>Barbekü</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="camasir"><label>Çamaşır</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="kurutma"><label>Kurutma makinesi</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="cim"><label>Çim</label></li>
            <li><input type="checkbox" name="olanaklar[]" value="asansor"><label>Elevator</label></li>
        </ul>
    </div>

    <div class="bg-white card-box border-20 mt-40">
        <h4 class="dash-title-three">Adres ve Konum</h4>
        <div class="row">
            <div class="col-12">
                <div class="dash-input-wrapper mb-25">
                    <label for="">Adres*</label>
                    <input type="text" name="adres" placeholder="145/A, Ranchview" required>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                    <label for="">Ülke*</label>
                    <input type="text" name="ulke" placeholder="Ülke" required>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                    <label for="">Şehir*</label>
                    <input type="text" name="sehir" placeholder="Şehir" required>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                    <label for="">İlçe*</label>
                    <input type="text" name="ilce" placeholder="İlçe" required>
                </div>
            </div>

            <div class="col-12">
                <div class="dash-input-wrapper mb-25">
                    <label for="">Harita Konumu*</label>
                    <input type="text" name="harita_konum" placeholder="XC23+6XC, İstanbul" required>
                </div>
            </div>
        </div>
    </div>

<button type="submit" name="kaydet" >Gönder</button>
    <div class="button-group d-inline-flex align-items-center mt-30">
        
        <button type="reset" class="dash-cancel-btn tran3sx">İptal</button>
    </div>

</form>

		</div>
		<!-- /.dashboard-body -->


		
<?php include 'common/footer.php'; ?>