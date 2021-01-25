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
        <li ><a href="../member/m_course.php">สนใจเรียน</a></li>
        <li class="active"><a href="../member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../member/m_info.php">ส่วนตัว</a></li>
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
<?php

$study = $_POST["user_study"];
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

$sql = "SELECT c.course_id, c.course_name,
s.sub_id, s.sub_name, t.train_day 
FROM train t join Subject s on t.sub_id = s.sub_id join course c on 
t.course_id = c.course_id where c.course_id  = '$study' ";

// echo "SQL = " . $sql;

// echo "SQL = " .$sql;
$result = $conn->query($sql);

      if ($result->num_rows > 0) {
            $count = 1;
            echo "<div class=\"container\">";
            echo "<div class=\"panel panel-primary\">";

            while($row = $result->fetch_assoc()) {

              if($count == 1){
                echo "<div class=\"panel-heading\">ชุดวิชาฝึกอบรม " . $row["course_name"]."</div>";
                echo "<div class=\"panel-body\">";
                echo "<table class=\"table table-striped table-hover\">";
                echo "<thead>";
                echo "<tr>";
                echo  "<th>ลำดับ</th>";
                echo  "<th>รหัสชุดวิชา</th>";
                echo  "<th>ชื่อชุดวิชา</th>";
                echo  "<th>จำนวนวันฝึกอบรม (วัน)</th>";
                echo  "</tr>";
                echo  "</thead>";
                echo  " <tbody>";
                echo  "<tr>";
                echo  "  <td>" . $count ."</td>";
                echo  "  <td>" . $row["sub_id"] ."</td>";
                echo  "  <td>" . $row["sub_name"] ."</td>";
                echo  "  <td>" . $row["train_day"]  ."</td>";
                echo  "</tr>";
              }else{
                echo  "<tr>";
                echo  "  <td>" . $count ."</td>";
                echo  "  <td>" . $row["sub_id"] ."</td>";
                echo  "  <td>" . $row["sub_name"] ."</td>";
                echo  "  <td>" . $row["train_day"]  ."</td>";
                echo  "</tr>";
              }

              $count = $count +1;
            }
            echo  "</tbody>";

            echo "</table>";
          
      }else{
        echo "<div class=\"container\">";
        echo "<div class=\"panel panel-primary\">";
        echo "<div class=\"panel-heading\">ชุดวิชาฝึกอบรม </div>";
        echo "<div class=\"panel-body\">";

        echo "<div class=\"panel-body\">";
        echo "ไม่มีข้อมูลฝึกอบรม";
        echo "</div>";
      }
$conn->close();

?>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="../member/m_day_train.php"><button type="submit" class="btn btn-primary" name="btnSave">กลับไปเลือกสาขาวิชาอื่น</button></a>
      </div>
    </div>
  <br>
    </div>

  </div>
  
</div>



<span class="pull-right">12</span>

<?php include '../include/footer2.php';?>