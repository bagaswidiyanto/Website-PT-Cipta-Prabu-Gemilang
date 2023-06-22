<section class="hero-header wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 text-center text-md-start position-relative z-1">
            <div class="col-md-2">
                <div class="hero-logo">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="caption my-4">
                    <h1 class="display-5 text-white"><span class="fw-light">Unit bisnis</span> <br> Kontraktor</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="second-icon">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/about_kontraktor/<?= $about_kontraktor->icon; ?>" class="img-fluid" alt="">
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
                <div class="img">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/about_kontraktor/<?= $about_kontraktor->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="top-content text-start text-md-end">
                    <div class="row justify-content-end">
                        <div class="col-lg-9 col-xl-8">
                            <div class="heading ">
                                <h1 class="display-5 text-dongker"><?= $about_kontraktor->nama; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="desc text-justify">
                        <p><?= $about_kontraktor->deskripsi; ?></p>
                    </div>
                    <div class="more-btn mt-5">
                        <a href="<?= $chatInfo; ?>" target="_blank" class="bg-blue-dongker">Hubungi Kami <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-kontraktor py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4><?= $dc5->deskripsi; ?></h4>
                </div>
            </div>
        </div>
        <div class="row gy-4 mt-5">
            <?php foreach ($layanan as $l) { ?>
                <div class="col-6 col-sm-4 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex">
                        <div class="icon">
                            <img src="<?= base_url(); ?>assets/img/Cklis.svg" class="img-fluid" alt="">
                        </div>
                        <div class="title ms-2">
                            <p class="fw-bold"><?= $l->nama; ?></p>
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
                    <h4 class="fw-normal"><?= $dc6->deskripsi; ?></h4>
                </div>
            </div>
        </div>
        <?php foreach (array_chunk($portofolio_kontraktor, 5, true) as $array) { ?>
            <div class="box-image wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($array as $key) { ?>
                    <div class="image_box">
                        <a href="https://admin103.ciptaprabugemilang.com/upload/portofolio_kontraktor/<?= $key->image; ?>" data-fancybox="1" data-filter="#content_B" data-caption="Loremx ipsum dolor sit amet, consectetur adipisicing elit. ">
                            <div class="img position-relative">
                                <img src="https://admin103.ciptaprabugemilang.com/upload/portofolio_kontraktor/<?= $key->image; ?>" alt="" />
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
    </div>
</section>