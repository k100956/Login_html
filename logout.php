<?php
  unset($_SESSION['usid']);
  setcookie("uuid",clear,time()-14400);
  setcookie("redirect",clear,time()-14400);
  echo "<script>alert('登出成功!現在轉至登入頁面')</script>";
  echo "<script>window.location.href = 'index.php'</script>";

?>
