<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">ปฏิทิน</a></li>
        <li><a href="../member/m_course.php">สนใจเรียน</a></li>
        <li><a href="../member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../member/m_info.php">ส่วนตัว</a></li>
        <li><a href="../e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/m_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
  $user_login = $_SESSION["user"] ;
  $user_pwd = $_POST["user_pwd"];
  $user_id = $_POST["user_id"];
  $user_name = $_POST["user_name"];
  $user_email = $_POST["user_email"];
  $user_study = $_POST["user_study"];
  $user_edu =  $_POST["user_edu"];
  $user_age25 =  $_POST["user_age25"];
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

    $StrSQL = "UPDATE user  SET  pass =  '$user_pwd' , "  .
            " stou_id =  '$user_id' , " .
            " name =  '$user_name' , " .
            " email =  '$user_email' , " .
            " edu =  '$user_edu' , " .
            " age25 =  '$user_age25' , " .
            " study =  '$user_study ' " .
            " WHERE user = '$user_login'";
            if ($conn->query($StrSQL) === TRUE) {
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-success\">";
                     echo "<div class=\"panel-heading text-center\"> Update Success</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "แก้ไขข้อมูลเรียบร้อยแล้ว<br> กรุณาเข้าระบบอีกครั้ง <br>";
                        echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary\">เข้าระบบใหม่</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";
              } else {
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-danger\">";
                     echo "<div class=\"panel-heading text-center\"> Update Fail</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "ปรับปรุงข้อมูลผิดพลาด<br> กลับสู่หน้าประวัติส่วนตัวอีกครั้ง <br>". $conn->error;
                        echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary\">กลับหน้าเกี่ยวกับอีกครั้ง</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";
              }
$conn->close();
?>
<span class="pull-right">STOU.25</span>
<?php include '../include/footer2.php';?>