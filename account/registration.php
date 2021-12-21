<?php
include('../base_url.php');
require_once('../layout/header.php');
if(isset($_SESSION['auth'])){
   header('Location:'.base_url('account/login'));
}
?>

<!-- MainContent -->
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-7 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <form method="post" action="<?= base_url('account/create') ?>">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Nama</label>
                                 <input type="text" name="name" class="form-control mb-0" id="exampleInputEmail2" placeholder="Masukan Nama Lengkap ..." autocomplete="off" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">  
                                 <label>E-mail</label>                               
                                 <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail3" placeholder="Masukan email ..." autocomplete="off" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" class="form-control mb-0" 
                                name="password"
                                 id="exampleInputEmail2" placeholder="Masukan Password ..." autocomplete="off" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">  
                                 <label>Tanggal Lahir</label>                               
                                 <input type="date" class="form-control mb-0" 
                                 name='tanggal_lahir' id="exampleInputEmail3" placeholder="Last Name" autocomplete="off" required>
                              </div>
                           </div>
                           <div class="col-md-6 d-flex">

                               <div class="custom-control custom-radio mt-2 mr-2 d-block">
                                  <input name="gender" value="Laki-laki" type="radio" id="customRadio1" name="customRadio" class="custom-control-input mr-1">
                                  <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                                </div>
                                <div  class="custom-control custom-radio mt-2">
                                  <input name="gender" type="radio" value="Perempuan" id="customRadio2" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                </div>
                         
                           </div>
                         <div class="col-md-12">

                          <button type="submit" name="daftar" class="btn btn-hover d-block my-2">Daftar</button>
                          
                        </div>
                     </form>
                  </div>
               </div>    
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Sudah punya akun? <a href="<?= base_url('account/login') ?>" class="text-primary ml-2">login</a>
                  </div>                        
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
require_once('../layout/footer.php');
require_once('../layout/script.php');
?>