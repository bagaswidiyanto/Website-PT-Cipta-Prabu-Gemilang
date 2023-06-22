<section class="hero-header hero-developer wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 text-center text-md-start position-relative z-1">
            <div class="col-md-2">
                <div class="hero-logo">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="caption my-4">
                    <h1 class="display-5 text-white"><span class="fw-light">Unit bisnis</span> <br> Developer</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="second-icon">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/about_developer/<?= $about_developer->icon; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="privilege mt-5 pt-0 pt-md-5 position-relative z-1">
            <div class="row gy-4 gy-md-0">
                <?php foreach ($keunggulan as $k) { ?>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-3">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <img src="https://admin103.ciptaprabugemilang.com/upload/keunggulan/<?= $k->image; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="card-title text-white fw-bold">
                                    <?= $k->title; ?>
                                </div>
                                <div class="card-text text-white">
                                    <?= $k->deskripsi; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="top-feature bg-blue-dongker">
    <div class="container">
        <div class="row align-items-center gy-4 gy-lg-0">
            <div class="col-lg-4 position-relative dbm_column wow fadeIn" data-wow-delay="0.1s">
                <div class="data-text pe-0 pe-md-5">
                    <p><?= $website->name; ?> : </p>
                    <p>Informasi lebih lanjut dapat hubungi kami</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="top-ctn d-flex align-items-center ps-0 ps-lg-4 pe-0 pe-lg-3">
                    <div class="d-flex">
                        <i class="fas fa-home"></i>
                        <div class="ps-3">
                            <?= $website->address; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="top-ctn d-flex align-items-center ps-0 ps-lg-5">
                    <div class="d-flex">
                        <i class="fas fa-phone-alt"></i>
                        <div class="ps-3">
                            <p><?= $noWa; ?></p>
                            <p><?= $website->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="general-trading position-relative z-1 bg-white py-5">
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="top-content">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8">
                            <div class="heading ">
                                <h1 class="display-5 text-dongker"><?= $about_developer->nama; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="desc text-justify">
                        <p><?= $about_developer->deskripsi; ?></p>
                    </div>
                    <div class="more-btn mt-5">
                        <a href="<?= $chatInfo; ?>" target="_blank" class="bg-blue-dongker">Hubungi Kami <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/about_developer/<?= $about_developer->image; ?>" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="promo-homes py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-title mb-4">
                    <h2 class="text-white"><?= $dc2->title; ?></h2>
                    <p class="text-white"><?= $dc2->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="slider-container">
            <div class="swiper-container promo-homes-slider pb-5">
                <div class="swiper-wrapper">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_tipe_rumah")->result() as $keyCore) { ?>
                        <div class="swiper-slide">
                            <div class="widget">
                                <div class="row gy-5 gy-md-0">
                                    <div class="col-md-6">
                                        <div class="produk-tab">
                                            <div class="tab-content position-relative pt-4">
                                                <?php foreach ($this->db->query("SELECT * FROM tbl_detail_gambar_tipe_rumah WHERE header = '" . $keyCore->id_header . "'")->result() as $keyParrent) { ?>
                                                    <?php $tabActiveBig = $this->db->query("SELECT * FROM tbl_detail_gambar_tipe_rumah WHERE header = '" . $keyCore->id_header . "' LIMIT 1")->row() ?>
                                                    <div class="tab-pane fade <?php
                                                                                if ($keyParrent->sort != "") {
                                                                                    if ($keyParrent->sort == $tabActiveBig->sort) {
                                                                                        echo "show active";
                                                                                    }
                                                                                } else {
                                                                                    if ($keyParrent->sort == "") {
                                                                                        echo "show active";
                                                                                    }
                                                                                }
                                                                                ?>" id="tab-dev-home-<?= $keyParrent->header . $keyParrent->id ?>">
                                                        <div class="img" title="">
                                                            <a href="https://admin103.ciptaprabugemilang.com/upload/gambar_tipe_rumah/<?= $keyParrent->image; ?>" data-fancybox="" data-caption="">
                                                                <img src="https://admin103.ciptaprabugemilang.com/upload/gambar_tipe_rumah/<?= $keyParrent->image; ?>" class="img-fluid" alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <ul class="nav nav-tabs border-0 justify-content-center mt-4" id="myTab">
                                                <?php foreach ($this->db->query("SELECT * FROM tbl_detail_gambar_tipe_rumah WHERE header = '" . $keyCore->id_header . "'")->result() as $keyParrent) { ?>
                                                    <?php $tabActiveSmall = $this->db->query("SELECT * FROM tbl_detail_gambar_tipe_rumah WHERE header = '" . $keyCore->id_header . "' LIMIT 1")->row() ?>
                                                    <li class="nav-item">
                                                        <a href="#tab-dev-home-<?= $keyParrent->header . $keyParrent->id ?>" title="" class="nav-link <?php
                                                                                                                                                        if ($keyParrent->sort != "") {
                                                                                                                                                            if ($keyParrent->sort == $tabActiveSmall->sort) {
                                                                                                                                                                echo "active";
                                                                                                                                                            }
                                                                                                                                                        } else {
                                                                                                                                                            if ($keyParrent->sort == "") {
                                                                                                                                                                echo "active";
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                        ?>" data-bs-toggle="tab">
                                                            <div class="img">
                                                                <img src="https://admin103.ciptaprabugemilang.com/upload/gambar_tipe_rumah/<?= $keyParrent->image; ?>" class="img-fluid" alt="">
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column justify-content-between">
                                        <!-- <div class="ps-4"> -->
                                        <div class="caption ps-4">
                                            <div class="heading-title mb-2">
                                                <span><?= $keyCore->tipe; ?></span>
                                            </div>
                                            <div class="heading-price">
                                                <span>Rp <?= number_format($keyCore->harga, 0, ',', ','); ?> ++</span>
                                            </div>
                                        </div>
                                        <div class="location mt-5 ps-4">
                                            <div class="heading mb-3">
                                                <h5 class="text-white">Lokasi :</h5>
                                            </div>
                                            <p class="text-white"><?= $keyCore->lokasi; ?></p>
                                        </div>
                                        <div class="facility mt-5 ps-4">
                                            <div class="heading mb-3">
                                                <h5 class="text-white">Fasilitas :</h5>
                                            </div>
                                            <div class="d-flex align-items-baseline">
                                                <div class="me-5">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="<?= base_url(); ?>assets/img/ic-facility-1.svg" class="img-fluid me-3" alt="">
                                                        <p>Listirk : <?= $keyCore->listrik; ?></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="<?= base_url(); ?>assets/img/ic-facility-2.svg" class="img-fluid me-3" alt="">
                                                        <p>Jumlah Unit : <?= $keyCore->jumlah_unit; ?></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="<?= base_url(); ?>assets/img/ic-facility-3.svg" class="img-fluid me-3" alt="">
                                                    <p>Air : <?= $keyCore->air; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $numberAPI = $website->phone;
                                        $n1API = substr($numberAPI, 1);
                                        $apiWa = $n1API;

                                        $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PT.Cipta%20Prabu%20Gemilang...%21%0ASaya%20tertarik%20dengan%20property%20$keyCore->slug,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                                        ?>
                                        <div class="more-btn d-flex mt-5 ps-4">
                                            <a href="<?= $waLink; ?>" target="_blank" title="Info Lebih Lanjut Dari Chat">Info Lebih Lanjut</a>
                                            <a href="https://admin103.ciptaprabugemilang.com/upload/brosur/<?= $keyCore->brosur; ?>" target="_blank" class="bg-transparent ms-3 border border-1 border-white text-white">Download
                                                Brosur</a>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>


<section class="all-types py-5">
    <div class="container">
        <div class="header-title mb-5">
            <h2><?= $dc3->title; ?></h2>
        </div>
        <div class="type-area">
            <div class="row gy-4">
                <?php
                if (($type->num_rows()) > 0) {
                    foreach ($type->result() as $key) {
                        $row_tipe = $this->db->query("SELECT * FROM tbl_detail_gambar_tipe_rumah WHERE header = '" . $key->id_header . "'")->row();
                ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="widget">
                                <div class="img">
                                    <a href="https://admin103.ciptaprabugemilang.com/upload/gambar_tipe_rumah/<?= $row_tipe->image; ?>" data-fancybox="" data-caption="">
                                        <img src="https://admin103.ciptaprabugemilang.com/upload/gambar_tipe_rumah/<?= $row_tipe->image; ?>" class="img-fluid" alt="" />
                                    </a>
                                </div>
                                <div class="caption px-2 py-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="card-title">
                                            <?= $key->tipe; ?>
                                        </div>
                                        <div class="more-btn">
                                            <a href="https://admin103.ciptaprabugemilang.com/upload/brosur/<?= $key->brosur; ?>" target="_blank">Download Brosur</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <nav class="type-pagination justify-content-center d-flex">
                <?= $pagination; ?>
            </nav>
        </div>
    </div>
</section>

<section class="container previlige-bottom  py-5">
    <div class="bg-blue-dongker py-5 px-2 px-lg-5">
        <div class="row justify-content-center">
            <?php foreach ($service_developer as $sd) { ?>
                <div class="col-md-4">
                    <div class="box">
                        <div class="card-title">
                            <?= $sd->title; ?>
                        </div>
                        <div class="card-text">
                            <?= $sd->deskripsi; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<section class="video-portofolio py-5">
    <div class="container">
        <div class="header-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h4>Galeri Video</h4>
        </div>
        <div class="slider-container wow fadeInUp" data-wow-delay="0.1s">
            <div class="swiper-container video-portofolio-slider pb-4">
                <div class="swiper-wrapper">
                    <?php foreach ($gallery_video as $gv) { ?>
                        <div class="swiper-slide">
                            <div class="box-video">
                                <?= $gv->video; ?>
                                <div class="content px-2">
                                    <p><strong><?= $gv->nama; ?></strong></p>
                                    <small><?= $gv->deskripsi; ?></small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>


<section class="portofolio position-relative py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="header-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="fw-normal"><?= $dc4->deskripsi; ?></h4>
                </div>
            </div>
        </div>
        <?php foreach (array_chunk($portofolio_dev, 5, true) as $array) { ?>
            <div class="box-image">
                <?php foreach ($array as $key) { ?>
                    <div class="image_box wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://admin103.ciptaprabugemilang.com/upload/portofolio_developer/<?= $key->image; ?>" data-fancybox="1" data-filter="#content_B" data-caption="Loremx ipsum dolor sit amet, consectetur adipisicing elit. ">
                            <div class="img position-relative">
                                <img src="https://admin103.ciptaprabugemilang.com/upload/portofolio_developer/<?= $key->image; ?>" alt="" />
                            </div>
                        </a>
                        <div class="content">
                            <span><?= $key->title; ?></span>
                            <p><?= $key->deskripsi; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="more-btn text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <a href="https://admin103.ciptaprabugemilang.com/upload/about_developer/<?= $about_developer->brosur; ?>" target="_blank" class="bg-blue-dongker">Download Brosur</a>
        </div>
    </div>
</section>