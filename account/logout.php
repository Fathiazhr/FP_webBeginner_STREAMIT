<?php
// fungsi untuk logout
include_once('../base_url.php');
session_start();
session_destroy();
header('Location:'.base_url('account/login'));