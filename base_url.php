<?php

// fungsi untuk membuat url utama
function base_url($url = ''){
   return 'http://'.$_SERVER['HTTP_HOST'] . '/streamit-native' . '/' . $url;

}