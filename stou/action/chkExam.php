<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ []</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/">ปฏิทิน</a></li>
        <li><a href="#">สนใจเรียน</a></li>
        <li><a href="#">กิจกรรม</a></li>
        <li><a href="#">บันทึกผลการเรียน</a></li>
        <li><a href="#">ทดสอบตัวเอง</a></li>
        <li><a href="#">ติดต่อ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
  $m_edu  = $_POST["m_edu"];
  $age25  = $_POST["age25"];
  $en  = $_POST["en"];
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

  $sql = "SELECT *  FROM course WHERE m_edu = '$m_edu' AND math='$math' AND sci = '$sci' AND age25='$age25' AND online='$online' AND write_exam = '$write_exam' AND train = '$train' ";

  echo "SQL = " .$sql;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "สาขาวิชา : " . $row["course_name"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
<span class="pull-right">STOU.AC04</span>

<?php include '../include/footer2.php';?>