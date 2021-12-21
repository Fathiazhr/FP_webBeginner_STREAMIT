
<?php
   session_start();
   include_once('../config/config.php');
   include_once('../base_url.php');
   // fungsi untuk LOGIN
   if(isset($_POST['login'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];
      
    $result = mysqli_query($mysqli,"SELECT * FROM tbl_user WHERE email = '$email' && password = '$pass' ");
    
    if(mysqli_num_rows($result) > 0){
       $_SESSION['user'] = mysqli_fetch_array($result);
       $_SESSION['auth'] = true;
       header('Location:'.base_url('account/profile'));
      }else{
         header('Location:'.base_url('account/login'));
    }



   }
  
?>
