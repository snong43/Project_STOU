<?php include 'include/header3.php';?>

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
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center"> LOG OUT</div>
        <div class="panel-body text-center">
            ออกจากระบบเรียบร้อยแล้ว
            <br>
            <a href="login.php"><button type="button" class="btn btn-primary">เข้าสู่ระบบ</button></a>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
  
    </div>
  </div>
</div><br>
<span class="pull-right">STOU.41</span>
<?php include 'include/footer3.php';?>