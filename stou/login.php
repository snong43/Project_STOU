<?php include 'include/header.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/stou"> รอบรู้ มสธ</a>
    </div>
  </div>
</nav>
<div class="container">
  <form class="form-horizontal" action="action/chkLogin.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_login">ชื่อผู้ใช้:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_login" placeholder="Enter UserName" name="user_login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_pwd">รหัสผ่าน:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="user_pwd" placeholder="Enter Password" name="user_pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">เข้าระบบ</button>
        <a href="register.php"><button type="button" class="btn btn-default">สมัครสมาชิกใหม่</button> </a><br>
        <a href="fwd_mail.php" ><u>ลืมรหัสผ่าน</u></a>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.37</span>
<?php include 'include/footer.php';?>
