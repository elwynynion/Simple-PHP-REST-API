<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");

if (isset($_POST['api_data'])) {


    $api_data = strtolower($_POST['api_data']);
    
    if(!isset($api_data)){
        
    }else {
        // header("Location: api/".$api_data."");
        echo "<script> window.location.href = 'api/".$api_data."'; </script>";
    }
}
?>
