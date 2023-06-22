 <section class="hero-header general-trading wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row align-items-center gy-4 gy-md-0 text-center text-md-start position-relative z-1">
             <div class="col-md-2 ">
                 <div class="hero-logo">
                     <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="caption my-4">
                     <h1 class="display-5 text-white"><span class="fw-light">Unit bisnis</span> <br> Perdagangan Umum
                     </h1>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="second-icon">
                     <img src="https://admin103.ciptaprabugemilang.com/upload/about_perdagangan/<?= $about_perdagangan->icon; ?>" class="img-fluid" alt="">
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
                     <div class="heading">
                         <h1 class="display-4 text-dongker"><?= $about_perdagangan->nama; ?></h1>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="desc text-justify">
                     <p><?= $about_perdagangan->deskripsi; ?></p>
                 </div>
                 <div class="more-btn mt-5">
                     <a href="<?= $chatInfo; ?>" target="_blank" class="bg-blue-dongker">Hubungi Kami <i class="fas fa-arrow-right ms-2"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="image-trading py-5">
     <div class="container">
         <div class="slider-container">
             <div class="swiper-container trading-slider">
                 <div class="swiper-wrapper">
                     <?php foreach ($slider_perdagangan as $sp) { ?>
                         <div class="swiper-slide">
                             <div class="box">
                                 <div class="img">
                                     <img src="https://admin103.ciptaprabugemilang.com/upload/slider_perdagangan/<?= $sp->image; ?>" title="<?= $sp->nama; ?>" class="img-fluid" alt="">
                                 </div>
                             </div>
                         </div>
                     <?php } ?>
                 </div>
             </div>
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