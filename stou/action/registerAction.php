<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul> 
    </div>
  </div>
</nav>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ผลการลงทะเบียน</div>
        <div class="panel-body">
        <?php
            $user_login = $_POST["user_login"];
            $user_pwd = $_POST["user_pwd"];
            $user_id = $_POST["user_id"];
            $user_name = $_POST["user_name"];
            $user_email = $_POST["user_email"];
            $user_study = $_POST["user_study"];
            $date = date('Y-m-d H:i:s');
            $msg = "";
            $fwPage = "";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "stou";

            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_set_charset($conn,"utf8");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

            $StrSQL = "SELECT * FROM user WHERE user = '$user_login'";
            $result = $conn->query($StrSQL);

            if ($result->num_rows == 0) {
                $StrSQL = "INSERT INTO user (user, pass, stou_id, name, email, study, reg_date, role)
                VALUES ('$user_login', '$user_pwd', '$user_id', '$user_name', '$user_email','$user_study','$date', 'C')";
                
                if ($conn->query($StrSQL) === TRUE) {
                  $msg = "ลงทะเบียนเรียนร้อย <br> ------------------ <br> user = " .$user_login . "<br> pass = " .  $user_pwd;
                  $fwPage = "LOGIN";
                } else {
                  $msg = "ลงทะเบียนเกิดข้อผิดพลาด" . "<br>" . $conn->error;
                  $fwPage = "REG";
                } 
              }else{
                $msg = "ไม่สามารถลงทะเบียนได้ เนื่องจาก ID ซ้ำ";
                $fwPage = "REG";
              }
      ?>
          <div class="alert alert-success">
            <strong><?php echo $msg ?></strong> 
          </div>
              <div class="text-center">
          <?php
              if($fwPage == "LOGIN"){
                echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary text-center\">เข้าสู่หน้าระบบ</button></a>";
              } else{
                echo "<a href=\"../register.php\"><button type=\"button\" class=\"btn btn-primary text-center\">เข้าหน้าลงทะเบียน</button></a>";
              }
              ?>
          </div>
            <?php

            $conn->close();
              ?>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
    </div>
  </div>
</div>
<span class="pull-right">STOU.AC12</span>

<?php  include '../include/footer2.php';?>