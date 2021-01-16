<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ</a>
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
    $user_login  = $_POST["user_login"];
    $user_id  = $_POST["user_id"];
    $user_name  = $_POST["user_name"];
    $user_email  = $_POST["user_email"];
    $user_study  = $_POST["user_study"];
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

$sql = "SELECT * FROM user u where u.user = '$user_login' AND u.stoud_id = '$user_id' AND u.name = '$user_name' AND  u.email = '$user_email' AND u.study = '$user_study'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class=\"container\">" ;    
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm-4\"></div>";
      echo "<div class=\"col-sm-4\">"; 
       echo "<div class=\"panel panel-success\">";
         echo "<div class=\"panel-heading text-center\">ลืมหรัสผ่าน</div>";
           echo "<div class=\"panel-body text-center\">";
            echo "รหัสผ่าน คือ " .  $row["pass"] ;
            echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary\">กลับหน้าเข้าระบบ</button></a>";
            echo "</div>";
          echo "<div class=\"panel-footer\"></div>";
       echo "</div>";
      echo "</div>";
  echo "<div class=\"col-sm-4\"></div>";
  echo "</div>";
  echo "</div>";
  }
} else {
    echo "<div class=\"container\">" ;    
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm-4\"></div>";
      echo "<div class=\"col-sm-4\">"; 
       echo "<div class=\"panel panel-danger\">";
         echo "<div class=\"panel-heading text-center\">ลืมหรัสผ่าน</div>";
           echo "<div class=\"panel-body text-center\">";
            echo "คุณกรอกข้อมูลไม่ถูกต้อง <br>". "หากต้องการรหัสผ่านกรุณาส่งรูปบัตรประชาชน หรือบัตรนักศึกษามาที่ admin@stou.com"."<br>";
            echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary\">กลับหน้าเข้าระบบ</button></a>";
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
<?php include '../include/footer2.php';?>