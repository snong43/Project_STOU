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
        <li class="active"><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../member/m_info.php">ส่วนตัว</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    $sub_id = $_GET["sub_id"];
    $user_login = $_SESSION["user"] ;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stou";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // sql to delete a record
$sql = "DELETE FROM grade WHERE user='$user_login' and sub_id = '$sub_id'";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header( "location: ../member/m_grade.php" );
    exit(0);
} else {
  echo "<div class=\"container\">" ;    
  echo "<div class=\"row\">";
  echo "<div class=\"col-sm-4\"></div>";
    echo "<div class=\"col-sm-4\">"; 
     echo "<div class=\"panel panel-danger\">";
       echo "<div class=\"panel-heading text-center\">ลบข้อมูลลงทะเบียน</div>";
         echo "<div class=\"panel-body text-center\">";
          echo "ลบข้อมูลไม่สำเร็จ<br> เกิดข้อผิดพลาด <br>". $conn->error."<br><br>";
          echo "<a href=\"../member/m_grade.php\"><button type=\"button\" class=\"btn btn-primary\">กลับหน้า ข้อมูลการลงทะเบียน</button></a>";
          echo "</div>";
        echo "<div class=\"panel-footer\"></div>";
     echo "</div>";
    echo "</div>";
echo "<div class=\"col-sm-4\"></div>";
echo "</div>";
echo "</div>";
  $conn->close();
}
?>
<span class="pull-right">STOU.07</span>
<?php include '../include/footer2.php';?>