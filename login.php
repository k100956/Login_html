<?php
$uname=$_POST['uname'];

$radius = radius_auth_open();
radius_add_server($radius, '140.110.16.92', '1812', '6a204bd8', 5, 3); //hostname,port,secret,timeout,tries
radius_create_request($radius, RADIUS_ACCESS_REQUEST);
radius_put_attr($radius, RADIUS_USER_NAME, $_POST['uname']);
radius_put_attr($radius, RADIUS_USER_PASSWORD, $_POST['pswd']);
$result = radius_send_request($radius);
switch ($result) {
case RADIUS_ACCESS_ACCEPT:
  // An Access-Accept response to an Access-Request indicating that the RADIUS server authenticated the user successfully.
$uuid = shell_exec("sudo cat /home/nchc".$uname."/.elk_config | grep uuid |sed 's/uuid=//g'");
session_start();
$_SESSION['usid']=$uname;
setcookie( 'redirect',1,time()+32400,NULL,NULL,NULL,TRUE);
setcookie( 'uuid',$uuid,time()+32400,NULL,NULL,NULL,TRUE);

  echo "<script>window.location.href = 'https://test1.nchc.org.tw'</script>";
   exit;
case RADIUS_ACCESS_REJECT:
  // An Access-Reject response to an Access-Request indicating that the RADIUS server could not authenticate the user.
  echo "<script>alert('未輸入帳號 或 密碼錯誤')</script>";
  echo "<script>window.location.href = 'https://test1.nchc.org.tw'</script>";
  exit;
case RADIUS_ACCESS_CHALLENGE:
  // An Access-Challenge response to an Access-Request indicating that the RADIUS server requires further information in another Access-Request before authenticating the user.
  echo 'Challenge required';
  echo "<script>window.location.href = 'https://test1.nchc.org.tw'</script>";
  exit;
default:
 // die('帳號不存在');
  echo "<script>alert('帳號不存在')</script>";
  echo "<script>window.location.href = 'https://test1.nchc.org.tw'</script>";
}
?>
