<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php
    if ($this->uri->segment(1) == '') {
        $segment1 = $website->metaTitle;
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } else if ($this->uri->segment(1) == 'developer') {
        $segment1 = $website->metaTitle . ' | Developer';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'kontraktor') {
        $segment1 = $website->metaTitle . ' | Kontraktor';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'perdagangan_umum') {
        $segment1 = $website->metaTitle . ' | Perdagangan Umum';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'profile') {
        $segment1 = $website->metaTitle . ' | Profile';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'news') {
        $segment1 = $website->metaTitle . ' | News';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    }
    ?>

    <?php if ($this->uri->segment(2) != 'detail') { ?>
    <title><?= $segment1; ?></title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">


    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="http://ciptaprabugemilang.com" />
    <meta property="og:image" content="<?= base_url() ?>assets/img/og-image.png" />
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'detail') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $meta->metaTitle . ' - ' . $website->name . '</title>
    <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
    <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta property="og:title" content="' . $meta->metaTitle . '" />
    <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
    <meta property="og:image" content="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/' . $meta->image . '" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="' . base_url() . 'news/detail/' . $meta->slug . '">
    <meta name="twitter:title" content="' . $meta->metaTitle . '">
    <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
    <meta name="twitter:image" content="https://admin103.ciptaprabugemilang.com/upload/posts/thumbnail/' . $meta->image . '">';
    }
    ?>


    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/img/logo-url.png" sizes="32x32" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div class="container">
            <a href="<?= base_url(); ?>" class="navbar-brand align-items-center" aria-label="Logo">
                <img src="https://admin103.ciptaprabugemilang.com/upload/<?= $website->image; ?>" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-label="navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $url = $this->uri->segment(1) ?>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <a href="<?= base_url(); ?>"
                        class="nav-item nav-link <?= $url == '' ? 'active' : ''; ?>">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle <?= $url == 'developer' ? 'active' : ($url == 'kontraktor' ? 'active' : ($url == 'perdagangan_umum' ? 'active' : '')); ?>"
                            data-bs-toggle="dropdown">Unit Bisnis</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= base_url("developer") ?>"
                                class="dropdown-item <?= $url == 'developer' ? 'active' : ''; ?>">Developer</a>
                            <a href="<?= base_url("kontraktor") ?>"
                                class="dropdown-item <?= $url == 'kontraktor' ? 'active' : ''; ?>">Kontraktor</a>
                            <a href="<?= base_url("perdagangan_umum") ?>"
                                class="dropdown-item <?= $url == 'perdagangan_umum' ? 'active' : ''; ?>">Perdagangan
                                Umum</a>
                        </div>
                    </div>
                    <a href="<?= base_url("profile") ?>"
                        class="nav-item nav-link <?= $url == 'profile' ? 'active' : ''; ?>">Profile</a>
                    <a href="<?= base_url("news") ?>"
                        class="nav-item nav-link <?= $url == 'news' ? 'active' : ''; ?>">News</a>
                </div>
                <div class="top-contact ms-auto">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt me-2"></i>
                        <div>

                            <p><?= $noWa; ?></p>
                            <p><?= $website->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->