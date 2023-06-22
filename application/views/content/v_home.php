 <section class="hero-header wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row align-items-center gy-4 gy-md-0 position-relative z-1">
             <div class="col-md-6 text-center text-md-start">
                 <div class="hero-logo">
                     <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                 </div>
                 <div class="caption my-4">
                     <h1 class="display-5 text-white"><?= $homeweb->title; ?></h1>
                 </div>
                 <div class="business-unit">
                     <p class="text-white"><?= $homeweb->deskripsi; ?></p>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="d-flex justify-content-around">
                     <?php foreach ($tagline as $tl) { ?>
                         <div class="progress-header">
                             <div class="img">
                                 <img src="https://admin103.ciptaprabugemilang.com/upload/tagline/<?= $tl->image; ?>" class="img-fluid" alt="">
                             </div>
                             <div class="title text-center mt-4">
                                 <p class="text-white fw-bold"><?= $tl->title; ?></p>
                             </div>
                         </div>
                     <?php } ?>
                 </div>
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

 <section class="about-company py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="header-title mb-4">
             <p class="text-dongker fw-normal fs-3"><?= $about_company->nama; ?></p>
             <h2><?= $website->name; ?></h2>
         </div>
         <div class="company">
             <div class="row">
                 <div class="col-md-6">
                     <div class="history position-relative">
                         <?= $website->description; ?>
                         <div class="more-btn mt-5">
                             <a href="<?= base_url('profile') ?>">Selengkapnya</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="portofolio position-relative py-5">
     <div class="container">
         <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
             <h2 class="fw-normal"><?= $dc1->title; ?></h2>
         </div>
         <div class="box-image">
             <?php foreach ($portofolio_developer as $pd) { ?>
                 <div class="image_box wow fadeInUp" data-wow-delay="0.1s">
                     <a href="https://admin103.ciptaprabugemilang.com/upload/portofolio_developer/<?= $pd->image; ?>" data-fancybox="<?= $pd->id; ?>" data-filter="#content_B" data-caption="<?= $pd->deskripsi; ?>">
                         <div class="img position-relative">
                             <img src="https://admin103.ciptaprabugemilang.com/upload/portofolio_developer/<?= $pd->image; ?>" alt="" />
                         </div>
                     </a>
                     <div class="content">
                         <span><?= $pd->title; ?></span>
                         <p><?= $pd->deskripsi; ?></p>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>

 <section class="main-services py-5">
     <div class="container">
         <div class="header-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
             <h2>Unit Bisnis Kami</h2>
         </div>
         <div class="row justify-content-center justify-content-lg-start gy-4 gy-lg-0 wow fadeInUp" data-wow-delay="0.1s">
             <?php foreach ($service as $s) { ?>
                 <div class="col-sm-6 col-md-4">
                     <div class="service">
                         <a href="<?= $s->id == 1 ? base_url('developer') : ($s->id == 2 ? base_url('kontraktor') : base_url('perdagangan_umum')) ?>">
                             <div class="img">
                                 <img src="https://admin103.ciptaprabugemilang.com/upload/service/<?= $s->image; ?>" class="img-fluid w-100" alt="">
                             </div>
                             <div class="card-body text-center fw-bold text-dongker text-uppercase">
                                 <?= $s->title; ?>
                             </div>
                         </a>
                     </div>
                 </div>
             <?php } ?>

         </div>
     </div>
 </section>

 <section class="business bg-grey py-5">
     <div class="container">
         <div class="row gy-4 gy-md-0">
             <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="top-content">
                     <div class="heading">
                         <h1><?= $about_developer->nama; ?></h1>
                     </div>
                     <div class="desc text-justify">
                         <p><?= $about_developer->deskripsi; ?></p>
                     </div>
                 </div>
                 <div class="more-btn mt-4">
                     <a href="<?= base_url('developer'); ?>" class="bg-blue-dongker">Informasi Lebih lanjut</a>
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

 <section class="business py-5">
     <div class="container">
         <div class="row gy-4 gy-md-0">
             <div class="col-md-6 d-block d-md-none wow fadeInUp" data-wow-delay="0.1s">
                 <div class="top-content">
                     <div class="heading">
                         <h1><?= $about_kontraktor->nama; ?></h1>
                     </div>
                     <div class="desc text-justify">
                         <p><?= $about_kontraktor->deskripsi; ?></p>
                     </div>
                 </div>
                 <div class="more-btn mt-4">
                     <a href="<?= base_url('kontraktor'); ?>" class="bg-blue-dongker">Informasi Lebih lanjut</a>
                 </div>
             </div>
             <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="img">
                     <img src="https://admin103.ciptaprabugemilang.com/upload/about_kontraktor/<?= $about_kontraktor->image; ?>" class="img-fluid" alt="">
                 </div>
             </div>
             <div class="col-md-6 text-end d-none d-md-block wow fadeInUp" data-wow-delay="0.1s">
                 <div class="top-content">
                     <div class="heading">
                         <h1><?= $about_kontraktor->nama; ?></h1>
                     </div>
                     <div class="desc text-justify">
                         <p><?= $about_kontraktor->deskripsi; ?></p>
                     </div>
                 </div>
                 <div class="more-btn mt-4">
                     <a href="<?= base_url('kontraktor'); ?>" class="bg-blue-dongker">Informasi Lebih lanjut</a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="business bg-grey py-5">
     <div class="container">
         <div class="row gy-4 gy-md-0">
             <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="top-content">
                     <div class="heading">
                         <h1><?= $about_perdagangan->nama; ?></h1>
                     </div>
                     <div class="desc text-justify">
                         <p><?= $about_perdagangan->deskripsi; ?></p>
                     </div>
                 </div>
                 <div class="more-btn mt-4">
                     <a href="<?= base_url('perdagangan_umum'); ?>" class="bg-blue-dongker">Informasi Lebih lanjut</a>
                 </div>
             </div>
             <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="img">
                     <img src="https://admin103.ciptaprabugemilang.com/upload/about_perdagangan/<?= $about_perdagangan->image; ?>" class="img-fluid" alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="latest-news py-5">
     <div class="container">
         <div class="header-title">
             <h2>Informasi dan berita</h2>
         </div>
         <div class="row gy-5 gy-md-0">
             <?php
                $noUrut = 1;
                foreach ($news as $news) { ?>
                 <?php if ($noUrut == 1) { ?>
                     <div class="col-md-6">
                         <div class="widget">
                             <div class="fist-news wow fadeInUp" data-wow-delay="0.1s">
                                 <div class="entry-img">
                                     <a href="<?= base_url("news/detail/$news->slug"); ?>">
                                         <img src="https://admin103.ciptaprabugemilang.com/upload/posts/<?= $news->image; ?>" class="img-fluid" title="<?= $news->title; ?>" alt="">
                                     </a>
                                 </div>
                                 <div class="pb-3">
                                     <div class="entry-date my-2">
                                         <small>Post <?= date('d F Y', strtotime($news->created_date)); ?></small>
                                     </div>
                                     <div class="entry-title">
                                         <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                             <h4><?= $news->title; ?></h4>
                                         </a>
                                     </div>
                                     <div class="entry-desc">
                                         <?= strip_tags($news->title); ?>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php } else if ($noUrut == 2) { ?>
                     <div class="col-md-6">
                         <div class="side-news">
                             <div class="row gy-4">
                                 <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                                     <div class="widget">
                                         <div class="entry-img">
                                             <a href="<?= base_url("news/detail/$news->slug"); ?>">
                                                 <img src="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/<?= $news->image; ?>" class="img-fluid" title="<?= $news->title; ?>" alt="">
                                             </a>
                                         </div>
                                         <div class="pb-2">
                                             <div class="entry-date">
                                                 <small>Post <?= date('d F Y', strtotime($news->created_date)); ?></small>
                                             </div>
                                             <div class="entry-title">
                                                 <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                                     <p><?= $news->title; ?></p>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             <?php } else if ($noUrut == 5) { ?>
                                 <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                                     <div class="widget">
                                         <div class="entry-img">
                                             <a href="<?= base_url("news/detail/$news->slug"); ?>">
                                                 <img src="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/<?= $news->image; ?>" class="img-fluid" title="<?= $news->title; ?>" alt="">
                                             </a>
                                         </div>
                                         <div class="pb-2">
                                             <div class="entry-date">
                                                 <small>Post <?= date('d F Y', strtotime($news->created_date)); ?></small>
                                             </div>
                                             <div class="entry-title">
                                                 <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                                     <p><?= $news->title; ?></p>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 <?php } else { ?>
                     <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                         <div class="widget">
                             <div class="entry-img">
                                 <a href="<?= base_url("news/detail/$news->slug"); ?>">
                                     <img src="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/<?= $news->image; ?>" class="img-fluid" title="<?= $news->title; ?>" alt="">
                                 </a>
                             </div>
                             <div class="pb-2">
                                 <div class="entry-date">
                                     <small>Post <?= date('d F Y', strtotime($news->created_date)); ?></small>
                                 </div>
                                 <div class="entry-title">
                                     <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                         <p><?= $news->title; ?></p>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
                 <?php $noUrut++; ?>
             <?php } ?>
         </div>
     </div>
 </section>