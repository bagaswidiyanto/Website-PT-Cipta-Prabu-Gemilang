<section class="hero-header-profile hero-news general-trading wow fadeIn" data-wow-delay="0.1s">
    <div class="slider-container">
        <div class="swiper-container hero-profile-slider">
            <div class="swiper-wrapper">
                <?php foreach ($hero_slider as $hs) { ?>
                    <div class="swiper-slide">
                        <div class="img position-relative">
                            <img src="https://admin103.ciptaprabugemilang.com/upload/hero_news_slider/<?= $hs->image; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>


<section class="news position-relative py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-title">
                    <h2><?= $about_news->title; ?></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-text text-justify">
                    <?= $about_news->caption; ?>
                </div>
            </div>
        </div>
        <div class="news-area">
            <div class="row gy-4">
                <?php
                if (($news->num_rows()) > 0) {
                    foreach ($news->result() as $news) {
                ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="widget">
                                <div class="img">
                                    <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                        <img src="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/<?= $news->image; ?>" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="card-content py-2 px-2">
                                    <small><i class="far fa-clock me-1"></i>
                                        <?= date('d F Y', strtotime($news->created_date)); ?></small>
                                    <div class="card-title fw-bold mt-2">
                                        <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                            <?= $news->title; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <nav class="news-pagination justify-content-center d-flex">
                <?= $pagination; ?>
            </nav>
        </div>
    </div>
</section>