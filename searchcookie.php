<?php
  session_start();
  $cookies=$_COOKIE["PUBLIC_APP_USER_SSO_TOKEN"];
  $usid=$_SESSION['usid'];

  if(isset($_COOKIE['redirect'])){
    echo "<script>window.location.href = '/$usid/'</script>";

	}

if (is_null($cookies)){
echo "<script>alert('請登入身分認證平台系統')</script>";
echo "<script>window.location.href = 'https://sysadmin.nchc.org.tw/'</script>";    

exit;
}

else{
return;
}




?>
