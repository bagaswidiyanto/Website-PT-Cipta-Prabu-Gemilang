<section class="creatif py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center position-relative">
            <?php foreach ($tagline as $tl) { ?>
                <div class="box-creatif text-center">
                    <div class="img">
                        <img src="https://admin103.ciptaprabugemilang.com/upload/tagline/<?= $tl->image; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="card-body text-white fw-bold">
                        <?= $tl->title; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<!-- Quote Start -->
<section class="quote py-5">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-6">
                <div class="company">
                    <div class="about-company wow fadeInUp" data-wow-delay="0.1s">
                        <div class="heading mb-3">
                            <p><b>Tentang PT Cipta Prabu Gemilang</b></p>
                        </div>
                        <div class="content">
                            <?= $website->description; ?>
                        </div>
                    </div>
                    <div class="row gy-4 gy-sm-0 mt-5">
                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="heading mb-3">
                                <p><b>Alamat Kami</b></p>
                            </div>
                            <div class="content">
                                <?= $website->address; ?>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="heading mb-3">
                                <p><b>Kontak Kami</b></p>
                            </div>
                            <div class="content">
                                <p>Phone : <?= $noWa; ?></p>
                                <p>Email : <?= $website->email; ?></p>
                            </div>
                            <div class="d-flex pt-4">
                                <?php foreach ($sosmed as $sosmed) { ?>
                                    <a class="btn btn-outline-light btn-social" href="<?= $sosmed->link; ?>" title="<?= $sosmed->name; ?>" target="_blank"><i class="<?= $sosmed->icon; ?>"></i></a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-quote">
                    <div class="heading mb-3 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-3 text-black">MEMBUTUHKAN BANTUAN? <br> KAMI ADA UNTUK ANDA</h2>
                        <p>Silahkan isi formulir di bawah ini untuk mengirimkan pesan atau pertanyaan Anda kepada
                            kami. Kami akan dengan senang hati membantu menjawab pertanyaan atau memberikan
                            informasi yang Anda butuhkan. Terima kasih.</p>
                    </div>
                    <form id="help" class="form-contact">
                        <div class="row g-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="nama" id="nama" maxlength="255" class="form-control" placeholder="Nama Lengkap Anda" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="telp" maxlength="15" minlength="10" id="telp" class="form-control" placeholder="No Handphone Anda" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="pekerjaan" id="pekerjaan" maxlength="255" class="form-control" placeholder="Jenis Pekerjaan Proyek" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsikan Project Request Anda" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="more-btn text-end">
                                <button type="submit" class="bg-blue-dongker border-0 px-3 py-2 fw-bold">Kirim
                                    Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quote End -->


<!-- Footer Start -->
<footer class="footer py-5">
    <div class="container">
        <?= $website->map; ?>
    </div>
</footer>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="copyright py-4">
    <div class="container">
        <div class="row d-flex justify-content-center  text-center">
            <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9 col-12">
                <p>Copyright © 2023 - <a href="https://progimedia.com/" target="_blank">PROGIMEDIA</a> All Rights
                    Reserved. Powered
                    by <a href="https://digitalindo.co.id/" target="_blank">Digitalindo</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top" aria-label="Back To Top"><i class="bi bi-arrow-up"></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="ctn-box">
        <div class="fixed-box">
            <div class="icon-section">
                <div class="box-segitiga">
                    <div class="text-segitiga">
                        <p>Tanya Saya</p>
                    </div>
                </div>
                <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" alt="" onclick="chatWhatsApp();">
            </div>
        </div>
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section" style="background: linear-gradient(180deg, #254061 0%, #4F81BD 100%)">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.ciptaprabugemilang.com/upload/wa_image/<?= $sec1->image; ?>">
                        </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                        <div class="avatar">
                            <img class="avatar" src="https://admin103.ciptaprabugemilang.com/upload/wa_image/<?= $sec2->image; ?>">
                        </div>
                        <div class="profile">
                            <p class="position"></p>
                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                                </small>
                            <? } else { ?>
                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                </small>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section" style="background: linear-gradient(180deg, #254061 0%, #4F81BD 100%)">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.ciptaprabugemilang.com/upload/wa_image/<?= $sec3->image; ?>">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Halo saya <?= ucwords(strtolower($sec2->nama)); ?>, Admin <?= $website->name; ?>.</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Ada yang bisa saya bantu ?</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/parallax/parallax.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>


<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $('[data-fancybox="gallery"]').fancybox({
            onInit: function(instance) {

                // Make zoom icon clickable
                instance.$refs.toolbar.find('.fancybox-zoom').on('click', function() {

                    if (instance.isScaledDown()) {
                        instance.scaleToActual();

                    } else {
                        instance.scaleToFit();
                    }

                });
            }
        });

        $.fancybox.defaults.buttons = [
            'slideShow',
            'fullScreen',
            'thumbs',
            'zoom',
            'close'
        ];

    });

    $('input#telp').bind("change keyup", function(event) {
        // skip for arrow keys
        if (event.which >= 37 && event.which <= 40) {
            event.preventDefault();
        }

        $(this).val(function(index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/([0-9])$/, '$1')
                /*.replace(/([0-9])([0-9]{3})$/, '$1.$2') //pakai sen dibelakangnya  */
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, "");
        });

    });

    $(document).ready(function() {
        base_url = '<?= base_url() ?>';

        $("#help").submit(function() {
            $(".btn").attr("disabled", true);

            var data = {
                nama: $("#nama").val(),
                telp: $("#telp").val(),
                pekerjaan: $("#pekerjaan").val(),
                deskripsi: $("#deskripsi").val()
            }

            $.ajax({
                type: "POST",
                url: base_url + "bantuan",
                data: data,

                success: function(response) {
                    $('.success').fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                    setInterval(function() {
                        alert("Terima Kasih, Pesan anda akan kami proses secepatnya.")
                        window.location = base_url;
                    }, 1000)
                },
                error: function() {
                    $(".error").fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                }
            });
            return false;
        });
    });
</script>

<script type="text/javascript">
    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }

    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }

    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }
</script>
</body>

</html>