  <!-- Main Wrapper -->
  <main class="wrapper">

      <!-- Header -->
      <header class="header-main">

          <!-- /.Header Topbar -->

          <!-- Header Logo & Navigation -->
          <nav class="menu-bar font2-title1">
              <div class="theme-container container">
                  <div class="row">
                      <div class="col-md-2 col-sm-2">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-logo" href="<?= base_url(false) ?>"> <img src="assets/img/logo/logo-black.png" alt="logo" /> </a>
                      </div>
                      <div class="col-md-10 col-sm-10 fs-12">
                          <div id="navbar" class="collapse navbar-collapse no-pad">
                              <ul class="navbar-nav theme-menu">
                                  <li class="active">
                                      <a href="<?= base_url(false) ?>" class="dropdown-toggle">Home</a>
                                  </li>
                                  <li> <a href="#aboutus">Tentang</a> </li>
                                  <li> <a href="<?= base_url(false,'tracking') ?>"> Tracking </a> </li>
                                  <li>
                                     <a href='<?= base_url('admin/login') ?>' style="background:#F5AB35;border-color:#F5AB35;" class="btn btn-primary btn-sm p-3">Login</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </nav>
          <!-- /.Header Logo & Navigation -->

      </header>
      <!-- /.Header -->

      <!-- Content Wrapper -->
      <article>
       
          
        <?php $this->load->view($content) ?>

          <!-- Contact us -->
          <section class="contact-wrap pad-120">
              <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
              <div class="theme-container container">
                  <div class="row">
                      <div class="col-md-6 col-sm-8">
                          <div class="title-wrap">
                              <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">Kontak Kami</h2>
                          </div>
                          <ul class="contact-detail title-2">
                              <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>Whatsapp:</span>
                                  <p class="gray-clr"> +62 874 4345 5353</p>
                              </li>
                              <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>No Telepon:</span>
                                  <p class="gray-clr"> +62 214 2389 2424 </p>
                              </li>
                              <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email :</span>
                                  <p class="gray-clr"> support@kurirgo.com</p>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>
          <!-- /.Contact us -->
      </article>
      <!-- /.Content Wrapper -->

      <!-- Footer -->
      <footer>
          <div class="footer-main pad-120 white-clr">
              <div class="theme-container container">
                  <div class="row">
                      <div class="col-md-4 col-sm-6 footer-widget">
                          <a href="#"> <img class="logo" alt="#" src="assets/img/logo/logo-white.png" /> </a>
                      </div>
                      <div class="col-md-4 col-sm-6 footer-widget">
                          <h2 class="title-1 fw-900">Page</h2>
                          <ul>
                              <li> <a href="#">Tracking</a> </li>
                              <li> <a href="#">Contact</a> </li>
                              <li> <a href="#">Career</a> </li>
                          </ul>
                      </div>
                      <div class="col-md-4 col-sm-6 footer-widget">
                          <h2 class="title-1 fw-900">Follow US</h2>
                          <ul class="social-icons list-inline">
                              <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                              <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                              <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>

          <div class="footer-bottom">
              <div class="theme-container container">
                  <div class="row">
                      <div class="col-md-6 col-sm-6">
                          <p> © Copyright 2021, All rights reserved </p>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- /.Footer -->


  </main>

  
  <footer id="contact" class="footer-one iq-bg-dark">
     
     <!-- Address -->
     <div class="footer-top">
         <div class="container-fluid">
             <div class="row footer-standard">
                 <div class="col-lg-7">
                     <div class="widget text-left">
                         <div class="menu-footer-link-1-container">
                             <ul id="menu-footer-link-1" class="menu p-0">
                                 <li id="menu-item-7314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
                                     <a href="#">Terms Of Use</a>
                                 </li>
                                 <li id="menu-item-7316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
                                     <a href="#">Privacy-Policy</a>
                                 </li>
                                 <li id="menu-item-7118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                                    <a href="#">FAQ</a>
                                </li>
                             </ul>
                         </div>
                     </div>
                     <div class="widget text-left">			
                         <div class="textwidget">
                             <p><small>© 2021 STREAMIT. All Rights Reserved. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum veniam repellendus ratione soluta adipisci ullam alias nostrum qui assumenda possimus.</small></p>
                         </div>
                     </div>                        
                 </div>
                 <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
                     <h6 class="footer-link-title">
                         Follow Us :
                     </h6>
                     <ul class="info-share"> 
                         <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                     </ul>

                 </div>
                 <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <div class="widget text-left">
                         <div class="textwidget">
                             <h6 class="footer-link-title">Streamit App</h6>
                             <div class="d-flex align-items-center">
                                 <a class="app-image" href="#">
                                     <img src="<?=base_url()?>assets/images/footer/01.jpg" alt="play-store">
                                 </a><br>
                                 <a class="ml-3 app-image" href="#"><img src="<?= base_url() ?>assets/images/footer/02.jpg" alt="app-store"></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Address END -->

</footer>

<!-- MainContent End-->
<!-- back-to-top -->
<div id="back-to-top">
   <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>