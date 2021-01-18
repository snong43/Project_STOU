
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
      <li><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li class="active"><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
  $course_id = $_POST["course_id"];
  $en = $_POST["en"];
  $math = $_POST["math"];
  $sci = $_POST["sci"];
  $write_exam = $_POST["write_exam"];
  $train = $_POST["train"];
  $m_edu = $_POST["m_edu"];
  $age25 = $_POST["age25"];
  $online = $_POST["online"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "stou";

  $conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($conn,"utf8");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

$StrSQL = "UPDATE course  SET  en =  '$en' , "  .
            " math =  '$math' , " .
            " sci =  '$sci' , " .
            " write_exam =  '$write_exam' , " .
            " train =  '$train' , " .
            " m_edu =  '$m_edu' , " .
            " online =  '$online' , " .
            " age25 =  '$age25'  " .
            " WHERE course_id = '$course_id'";

            if ($conn->query($StrSQL) === TRUE) {
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-success\">";
                     echo "<div class=\"panel-heading text-center\"> Update Success</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "แก้ไขข้อมูลเรียบร้อยแล้ว<br>  <br>";
                        echo "<a href=\"../admin/a_exam.php\"><button type=\"button\" class=\"btn btn-primary\">ไปหน้าแบบทดสอบ</button></a>";
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
                        echo "ปรับปรุงข้อมูลผิดพลาด<br>  <br>". $conn->error;
                        echo "<a href=\"../admin/a_exam.php\"><button type=\"button\" class=\"btn btn-primary\">ไปหน้าแบบทดสอบ</button></a>";
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
<span class="pull-right">STOU.AC21</span>

<?php include '../include/footer2.php';?>