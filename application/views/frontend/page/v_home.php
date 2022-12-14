<?php $this->load->view('frontend/template/v_navbar')?>

<?php $this->load->helper('text');?>

<section class="ftco-section ftco-no-pb ftco-intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-10 col-xl-8">
                <div class="text" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#scroll" class="icon-scroll"><span class="ion ion-ios-arrow-round-down"></span></a>
                    <h1 class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, incidunt. <img
                            src="<?=base_url('assets/frontend/icon/')?>women_hijab.png" alt="" width="60">
                    </h1>
                    <p class="mt-4"><a href="#helo" class="btn-custom">Available for freelance work <span
                                class="ion ion-ios-arrow-round-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4 mt-md-5">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                        <a href="<?=base_url('assets/frontend/')?>images/work-1.jpg"
                            class="work-featured img glightbox d-flex align-items-center justify-content-center"
                            style="background-image:url(<?=base_url('assets/frontend/')?>images/xwork-1.jpg.pagespeed.ic.6QxRdundCU.jpg)">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                        <a href="<?=base_url('assets/frontend/')?>images/work-1.jpg"
                            class="work-featured img glightbox d-flex align-items-center justify-content-center"
                            style="background-image:url(<?=base_url('assets/frontend/')?>images/xwork-2.jpg.pagespeed.ic.I10cEvKzsN.jpg)">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                        <a href="<?=base_url('assets/frontend/')?>images/work-1.jpg"
                            class="work-featured img glightbox d-flex align-items-center justify-content-center"
                            style="background-image:url(<?=base_url('assets/frontend/')?>images/xwork-3.jpg.pagespeed.ic.rrxgzENJ5X.jpg)">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                        <a href="<?=base_url('assets/frontend/')?>images/work-1.jpg"
                            class="work-featured img glightbox d-flex align-items-center justify-content-center"
                            style="background-image:url(<?=base_url('assets/frontend/')?>images/xwork-4.jpg.pagespeed.ic.MvnkG9WUXc.jpg)">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">About Me</span>
                <h2 class="mb-4">Welcome????????, Selamat Datang Semuanya! </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="row g-xl-5">
                    <div class="col-md-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="img w-100"
                            style="background-image:url(<?=base_url('assets/frontend/images/' . $about_me['photo'])?>)">
                        </div>
                    </div>
                    <div class="col-md-7 py-5 heading-section" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <div class="py-md-5">
                            <span class="subheading">Selamat datang di website portofolio ku!????</span>

                            <h2 class="mb-4"><?=$about_me['name']?></h2>

                            <p><?=$about_me['description']?></p>


                            <div style="margin-top: 30px;">



                                <a href="about.html"
                                    style="background-color: white;color: #1D1E21; padding: 10px;border-radius: 20px;">Selengkapnya
                                    <span class="ion ion-ios-arrow-round-forward"></span></a>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Services</span>
                <h2 class="mb-4">Apa Saja yang Bisa Saya Lakukan?</h2>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="row">

                    <?php foreach ($services as $s): ?>
                    <div class="col-md-6 col-lg-3 text-center d-flex align-items-stretch mb-2">
                        <div class="services-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100"
                            style="margin: auto;padding: 50px;">
                            <div class="icon">
                                <img src="<?=base_url('assets/frontend/icon/')?>women_hijab.png" alt="" width="90">
                            </div>
                            <div class="text mt-2">
                                <h3><?=$s->service_name?></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>


                </div>
            </div>
        </div>
    </div>
</section>

<hr>
<section class="ftco-section" id="scroll">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Portfolio</span>
                <h2 class="mb-4">My Portfolio</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="row">

                    <?php foreach ($porto as $p): ?>

                    <div class="col-md-4">
                        <div class="work-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                            <div class="img"
                                style="background-image:url(<?=base_url('assets/frontend/images/portofolio/' . $p->image);?>)">
                            </div>
                            <div class="text">
                                <span class="category"><?=$p->tag?></span>
                                <h3><a href="#">

                                        <?=word_limiter($p->title, 4, ' ...');
?>
                                    </a></h3>
                            </div>
                        </div>
                    </div>


                    <?php endforeach?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt testimony-section">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="row justify-content-end pb-4">
                    <div class="col-md-7 heading-section" data-aos="fade-up" data-aos-duration="1000">
                        <span class="subheading">Testimonial</span>
                        <h2 class="mb-3">Satisfied Clients</h2>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-7" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="carousel-testimony">
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="ion ion-ios-quote">
                                    </div>
                                    <div class="text">
                                        <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                            countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image:url(<?=base_url('assets/frontend/')?>images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                            </div>
                                            <div class="pl-3 tx">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="ion ion-ios-quote">
                                    </div>
                                    <div class="text">
                                        <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                            countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)">
                                            </div>
                                            <div class="pl-3 tx">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="ion ion-ios-quote">
                                    </div>
                                    <div class="text">
                                        <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                            countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image:url(images/person_3.jpg)">
                                            </div>
                                            <div class="pl-3 tx">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="ion ion-ios-quote">
                                    </div>
                                    <div class="text">
                                        <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                            countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                                            </div>
                                            <div class="pl-3 tx">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="ion ion-ios-quote">
                                    </div>
                                    <div class="text">
                                        <p class="mb-4 msg">Far far away, behind the word mountains, far from the
                                            countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the
                                            coast of the Semantics, a large language ocean.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image:url(images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)">
                                            </div>
                                            <div class="pl-3 tx">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>