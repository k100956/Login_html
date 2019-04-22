<!DOCTYPE HTML>
<html>
<head>
<title>國家高速網路與計算中心</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="/images/favicon-usermin.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/unauthenticated/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/unauthenticated/css/fontawesome.min.css" rel="stylesheet" type="text/css">
<link href="/unauthenticated/css/login.min.css" rel="stylesheet" type="text/css">
<script src="/unauthenticated/js/login.min.js" type="text/javascript"></script>
</head>
<body  oncontextmenu="return false">
<?php include 'searchcookie.php'; ?>
<div class="container">
<form method="post" target="_top" action="login.php" class="form-signin clearfix" role="form">
<img src="/images/favicon-usermin.ico" style="width:55px;height:55px;"></img><h2 class="form-signin-heading">
     <span style="vertical-align: middle;"><strong>Log查詢平台</strong></span></h2>
<br /><br /><div class="input-group form-group">
<span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
<input type="text" class="form-control" name="uname" placeholder="帳號名稱"  autofocus>
</div>
<div class="input-group form-group">
<span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
<input type="password" class="form-control" name="pswd" placeholder="OTP密碼"  >
</div>
<center><button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;登入</button></center>
</form>
</div>
</body>
</html>
