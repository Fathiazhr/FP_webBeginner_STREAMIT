<!-- Header -->
 <header id="main-header">
         <div class="main-header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <div class="navbar-toggler-icon" data-toggle="collapse">
                              <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                           </div>
                        </a>
                        <a class="navbar-brand" href="<?= base_url('') ?>"> <img class="img-fluid logo" src="<?= base_url() ?>assets/images/logo.png"
                           alt="streamit" /> </a>
                     
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <div class="menu-main-menu-container">
                              <ul id="top-menu" class="navbar-nav ml-auto">
                                 <li class="menu-item">
                                    <a href="<?= base_url('') ?>">Home</a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="<?= base_url('movie') ?>">Movies</a>
                                 </li>     
                                 <li class="menu-item">
                                    <a href="<?= base_url('about') ?>">About Us</a>
                                 </li>     
                              </ul>
                           </div>
                        </div>
                        <div class="navbar-right menu-right">
                           <ul class="d-flex align-items-center list-inline m-0">
                              <li class="nav-item nav-icon">
                                 <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                    data-toggle="search-toggle">
                                 <img src="https://avatars.dicebear.com/api/micah/t.svg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>
                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3"> 
                                          <?php if(isset($_SESSION['auth'])){?>
                                             <a href="<?= base_url('account/profile') ?>" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                   <div class="media-body ml-3">
                                                      <h6 class="my-0 ">Profil</h6>
                                                   </div>
                                                </div>
                                             </a>
                                             <a href="<?= base_url('account/logout') ?>" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                   <div class="media-body ml-3">
                                                      <h6 class="my-0 ">Logout</h6>
                                                   </div>
                                                </div>
                                             </a>
                                      <?php  } else{ ?>
                                       <a href="<?= base_url('account/login') ?>" class="iq-sub-card setting-dropdown">
                                          <div class="media align-items-center">
                                             <div class="media-body ml-3">
                                                <h6 class="my-0 ">Login</h6>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="<?= base_url('account/registration') ?>" class="iq-sub-card setting-dropdown">
                                          <div class="media align-items-center">
                                             <div class="media-body ml-3">
                                                <h6 class="my-0 ">Registrasi</h6>
                                             </div>
                                          </div>
                                       </a>
                                   <?php      }?>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </nav>
                     
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->