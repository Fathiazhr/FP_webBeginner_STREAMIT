
<?php
   session_start();
   include_once('../config/config.php');
   include_once('../base_url.php');
   // fungsi untuk update akun
   if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
      $id = $_SESSION['user']['id'];
      $result = mysqli_query($mysqli,"UPDATE tbl_user SET name ='$name',email='$email',tanggal_lahir='$tanggal_lahir',gender='$gender',password='$password' WHERE id='$id'");
    
    if($result){
        $result_user =  mysqli_query($mysqli,"SELECT * FROM tbl_user WHERE id='$id'");
       $_SESSION['user'] = mysqli_fetch_array($result_user);
       header('Location:'.base_url('account/profile'));
    }

   }
  
?>
