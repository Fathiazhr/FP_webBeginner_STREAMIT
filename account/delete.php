
<?php
// fungsi buat hapus akun dan logout
   session_start();
   include_once('../base_url.php');
   include_once('../config/config.php');
   $id = $_SESSION['user']['id'];
    $result = mysqli_query($mysqli, "DELETE FROM tbl_user WHERE id=$id");
    
    if($result){
        session_destroy();
        header('Location:'.base_url('account/login'));
    }
