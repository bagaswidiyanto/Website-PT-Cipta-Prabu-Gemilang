<section class="single-news position-relative py-5">
    <div class="container">
        <div class="news-area text-center">
            <div class="card-title">
                <?= $news_detail->title; ?>
            </div>
            <div class="card-date mt-4">
                <?= date('d F Y', strtotime($news_detail->created_date)); ?>
            </div>
            <div class="card-image mt-4 mb-5">
                <img src="https://admin103.ciptaprabugemilang.com/upload/posts/<?= $news_detail->image; ?>" class="img-fluid" alt="">
            </div>
            <div class="card-text text-justify">
                <?= $news_detail->content; ?>
            </div>
        </div>
    </div>
</section>

<section class="popular-news news py-5">
    <div class="container">
        <div class="header-title">
            <h2>Berita Populer</h2>
        </div>
        <div class="news-area pt-5">
            <div class="row gy-4">
                <?php foreach ($recent_news as $rn) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <div class="img">
                                <a href="<?= base_url("news/detail/$rn->slug"); ?>" title="<?= $rn->title; ?>">
                                    <img src="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/<?= $rn->image; ?>" <?= $rn->title; ?> class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="card-content py-2 px-2">
                                <small><i class="far fa-clock me-1"></i> <?= date('d F Y', strtotime($news_detail->created_date)); ?></small>
                                <div class="card-title fw-bold mt-2">
                                    <a href="<?= base_url("news/detail/$rn->slug"); ?>" title="<?= $rn->title; ?>">
                                        <?= $rn->title; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>