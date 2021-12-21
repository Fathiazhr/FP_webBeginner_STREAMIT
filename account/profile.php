<?php	
ob_start();
include('../base_url.php');
include('../layout/header.php');
require_once('../layout/navbar.php');
if(!isset($_SESSION['auth'])){
    header('Location:'.base_url('account/login'));
}
?>
<section class="m-profile manage-p mb-5">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-lg-10">
                    <div class="sign-user_card">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="upload_profile d-inline-block">
                                <img src="<?= base_url() ?>assets/images/user/user.jpg" class="profile-pic rounded-circle img-fluid" alt="user">
                              
                                </div>
                            </div>
                            <div class="col-lg-10 device-margin">
                                <div class="profile-from">
                                    <h4 class="mb-3">Atur Profil</h4>
                                    <form method="post" class="mt-4" action="<?= base_url('account/update')?>">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input value="<?= $_SESSION['user']['name'] ?>" name="name" type="text" class="form-control mb-0" id="exampleInputl2"
                                                placeholder="Masukan Nama Lengkap" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?= $_SESSION['user']['email'] ?>" type="email" name="email" class="form-control date-input basicFlatpickr mb-0" placeholder="Masukan email" id="exampleInputPassword2"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input value="<?= $_SESSION['user']['password'] ?>" type="password"name="password" class="form-control date-input basicFlatpickr mb-0" placeholder="MAsukan password" id="exampleInputPassword2"
                                            required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input value="<?= $_SESSION['user']['tanggal_lahir'] ?>" type="date" name="tanggal_lahir"
                                             class="form-control date-input basicFlatpickr mb-0" placeholder="Select Date" id="exampleInputPassword2"
                                            required>
                                        </div>
                                        <div class="form-group d-flex flex-md-row flex-column">
                                             <div class="custom-control custom-radio mt-2 mr-2 d-block">
                                                <input <?= $_SESSION['user']['gender'] == 'Laki-laki' ? 'checked':'' ?> name="gender" value="Laki-laki" type="radio" id="customRadio1" name="customRadio" class="custom-control-input mr-1">
                                                <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                                            </div>
                                            <div class="custom-control custom-radio mt-2">
                                                <input <?= $_SESSION['user']['gender'] == 'Perempuan' ? 'checked':'' ?>  name="gender"  type="radio" value="Perempuan" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" name="update" class="btn btn-hover">Simpan</button>
                                            <a href="<?= base_url('account/delete') ?>" class="btn btn-link">Hapus Akun</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
require_once('../layout/script.php');
ob_end_flush();
?>