<?php
include('../base_url.php');
require_once('../layout/header.php');
if(isset($_SESSION['auth'])){
   header('Location:'.base_url('account/login'));
}
?>
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Sign in</h3>
                     <form method="post" class="mt-4" action="<?= base_url('account/auth') ?>">
                        <div class="form-group">                                 
                           <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" required>
                        </div>
                        <div class="form-group">                                 
                           <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                        </div>
                        
                           <div class="sign-info">
                              <button type="submit" name="login" class="btn btn-hover">Masuk</button>                             
                           </div>       
                     </form>
                  </div>
               </div>
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Tidak punya akun? <a href="<?= base_url('account/registration') ?>" class="text-primary ml-2">Daftar</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
require_once('../layout/script.php');
?>