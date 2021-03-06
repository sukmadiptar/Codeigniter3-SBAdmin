<section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= base_url('assets/img/'); ?>logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
<!-- Querry Navbar start-->
<?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "
          SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` 
            JOIN `user_access_menu` 
              ON `user_menu`.`id` =
                 `user_access_menu`.`menu_id`
           WHERE `user_access_menu`.`role_id` = $role_id
        ORDER BY `user_access_menu`.`menu_id` ASC
        ";
        $menu = $this->db->query($queryMenu)->result_array();
      ?>
<!-- Querry Menu end -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#fiturs">Fitur</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#uji">Uji Coba</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#tentang">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#berlangganan">Berlangganan</a>
                                    </li>
                                    <li class="navbar-btn my-0">
                                        <a class="main-btn2" href="<?= base_url('auth'); ?>">Masuk</a>
                                    </li>
                                </ul>
                            </div> 
                        </nav> 
                    </div>
                </div>
            </div> 
        </div> 
        <div id="home" class="header_slider">
            <div class="single_slider d-flex align-items-center" style="background-color: #494FCA;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider_content">
                                <h4 class="slider_title fadeInUp" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    Platform Sekolah Online <br>
                                    yang Menyenangkan</h4>
                                <p class="slider_slogan fadeInDown mt-4" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.5s; animation-name: fadeInDown;">Belajar lebih mudah, kapanpun, dimanapun <br>
                                    Mudah dijangkau hingga kepelosok negeri.</p>
                                <a href="htt<?= base_url('auth/register'); ?>" rel="" class="main-btn fadeInLeftBig" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.8s; animation-name: fadeInLeftBig;">Mulai Belajar</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-image fadeInRightBig" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.8s; animation-name: fadeInRightBig;">
                                <img src="<?= base_url('assets/img/'); ?>Illustration.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>