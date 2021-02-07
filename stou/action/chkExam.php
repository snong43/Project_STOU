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
        <li class="active"><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/m_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<style>
.table-hover tbody tr:hover td {
    background: aqua;
}
</style>
<div class="container">
<div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">สาขาวิชาที่เหมาะกับคุณ</div>
      <div class="panel-body">
<?php
  $math  = $_POST["math"];
  $sci  = $_POST["sci"];
  $online  = $_POST["online"];
  $write_exam  = $_POST["write_exam"];
  $train  = $_POST["train"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "stou";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT *  FROM course WHERE  math='$math' AND sci = '$sci' AND online='$online' AND write_exam = '$write_exam' AND train = '$train' ";

 // echo "SQL = " .$sql;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row

    echo "<table class=\"table table-hover\">";
    echo "  <thead>";
    echo "<th>ลำดับที่</th>";
    echo "<th>สาขาวิชาที่เหมาะสม</th>";
    echo "  </thead>";
    echo "  <tbody>";
    $count = 1;
    while($row = $result->fetch_assoc()) {

      if($count % 2 != 0){
        echo "    <tr>";
      }else{
        echo "    <tr class=\"active\">";

      }
      echo "      <td>". $count."</td>";
      echo "      <td>". $row["course_name"] ."</td>";
      echo "    </tr>";
      $count += 1;
    }

    echo "      </tbody>";
    echo "</table><br>";

    if($_SESSION["a25"] == "A"){
      echo "<p style=\"color:red;\">** เนื่องจากคุณ มีเพียง วุฒิ ม.3  และ อายุไม่ถึง 25 ปี  ยังไม่สามารถสมัครเรียนปริญญาตรีได้</p>";
      echo "<p style=\"color:red;\">** แต่สามารถเรียนสัมฤทธิบัตรได้ เก็บชุดวิชาไปก่อน กรุณาศึกษาข้อมูลจาก <a href=\"https://www.stou.ac.th/study/sumrit/learn/learn.asp\">www.stou.ac.th/study/sumrit/learn/learn.asp</a></p>";
      echo "<br>";
      echo "<p style=\"color:red;\">** แต่หากคุณ มีวุฒิ ม.3 แต่อายุ ยังไม่ถึง 25 ปี แต่เรียนจบมาแล้วอย่างน้อย 5 ปี สาามารถสมัครปริญญาได้เลย</p>";
      echo "<p style=\"color:red;\">** โดยไม่ต้องใช้วุฒิ ม.6 กรุณาศึกษาข้อมูลจาก <a href=\"../member/m_course.php\">หลักสูตรปริญญตรี</a></p>";


    }

    echo "<a href=\"../member/m_course.php\"><button type=\"button\" class=\"btn btn-primary\">กลับสู่หน้าหลักสูตร</button></a>";
    echo "</div>";
  } else {
    echo "ไม่มีสาขาวิชาที่เหมาะสมสำหรับคุณ กรุณาเลือกใหม่<br>";
    echo "<a href=\"../member/m_exam.php\"><button type=\"button\" class=\"btn btn-primary\">หลักสูหน้าทดสอบใหม่</button></a>";
  }
  $conn->close();
?>
</div>
</div>
</div>
<span class="pull-right">STOU.05</span>

<?php include '../include/footer2.php';?>