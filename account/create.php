<?php
include('../base_url.php');

//  fungsi registarsi user baru
if(isset($_POST['daftar'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    
    include_once('../config/config.php');
    $result = mysqli_query($mysqli,"INSERT INTO tbl_user VALUES('0','$name','$email','$tanggal_lahir','$gender','$password')");
     
    $_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Berhasil Registrasi</strong> 
    </div>';
    header("Location:".base_url('account/login'));
    die;
 
 }
 