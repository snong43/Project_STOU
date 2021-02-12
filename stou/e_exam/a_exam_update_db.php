<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../a_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li ><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li class="active"><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/a_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php


$sub_id = $_GET["sub_id"];
$ex_id = $_GET["ex_id"];
$active_no = $_GET["active_no"];
$sub_id_current = $_GET["sub_id_current"];
$ex_id_current = $_GET["ex_id_current"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$StrSQL = "DELETE FROM exam_user WHERE sub_id='$sub_id_current ' AND ex_id='$ex_id_current'";

if ($conn->query($StrSQL) === TRUE) {
    $StrSQL = "INSERT INTO exam_user (sub_id, ex_id, active_no) VALUES ('$sub_id', '$ex_id', '$active_no' )";
    if ($conn->query($StrSQL) === TRUE) {
      $conn->close();
      header( "location: ./a_exam_search.php" );
      exit(0);
    }else{
      echo $conn->error;
    }

}else{
  echo $conn->error;

}

  $conn->close();

?>

<span class="pull-right">STOU.29</span>

<?php include '../include/footer2.php';?>