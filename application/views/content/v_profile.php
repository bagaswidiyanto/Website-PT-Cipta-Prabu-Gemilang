<section class="hero-header-profile general-trading wow fadeIn" data-wow-delay="0.1s">
    <div class="slider-container">
        <div class="swiper-container hero-profile-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $s) { ?>
                    <div class="swiper-slide">
                        <div class="img position-relative">
                            <img src="https://admin103.ciptaprabugemilang.com/upload/hero_profile_slider/<?= $s->image; ?>" title="<?= $s->nama; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>


<section class="tab-profile position-relative">
    <div class="container">
        <div class="header-title text-center py-5">
            <h5><strong><?= $about_company->nama; ?></strong></h5>
            <h2><?= $website->name; ?></h2>
        </div>
        <div class="d-flex justify-content-center">
            <ul class="nav nav-tabs border-0 justify-content-center w-fit" id="myTab">
                <li class="nav-item">
                    <a href="#sejarah" title="" class="nav-link active" data-bs-toggle="tab">
                        <div class="title">
                            <p>Sejarah</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#visi-misi" title="" class="nav-link" data-bs-toggle="tab">
                        <div class="title">
                            <p>Visi Misi</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content position-relative pt-5 text-black">

        <div class="tab-pane fade show active" id="sejarah">
            <div class="content container pb-5">
                <div class="img text-center mb-5">
                    <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                </div>
                <div class="card-text text-justify">
                    <?= $about_company->deskripsi; ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade position-relative" id="visi-misi">
            <img src="<?= base_url(); ?>assets/img/bg-visi-misi.webp" class="img-fluid bg-misi" alt="">
            <div class="img" title="">
                <div class="content container pb-5">
                    <div class="row gy-5 gy-md-0">
                        <div class="col-md-6">
                            <div class="visi">
                                <div class="header-title">
                                    <h2><?= $visi->nama; ?></h2>
                                </div>
                                <div class="card-text text-justify">
                                    <?= $visi->deskripsi; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="owl-carousel visi-slider">
                                <?php foreach ($slider_visi as $sv) { ?>
                                    <div class="img">
                                        <a href="https://admin103.ciptaprabugemilang.com/upload/slider_visi/<?= $sv->image; ?>" data-fancybox="" data-caption="">
                                            <img src="https://admin103.ciptaprabugemilang.com/upload/slider_visi/<?= $sv->image; ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mt-5">
                        <div class="col-md-6">
                            <div class="misi">
                                <div class="header-title">
                                    <h2><?= $misi->nama; ?></h2>
                                </div>
                                <div class="text-justify">
                                    <?= $misi->deskripsi; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>