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
        <li ><a href="./admin/a_admin.php">กำหนดสิทธิ์</a></li>
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


$sub_id = $_POST["sub_id"];
$sub_name = $_POST["sub_name"];
$ex_id = $_POST["ex_id"];
$ex0 = $_POST["ex0"];
$ex1 = $_POST["ex1"];
$ex2 = $_POST["ex2"];
$ex3 = $_POST["ex3"];
$ex4 = $_POST["ex4"];
$ans = $_POST["ans"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$StrSQL =  "UPDATE subject SET has_exam = 'Y' WHERE  sub_id= '$sub_id'";


if ($conn->query($StrSQL) === TRUE) {
    $StrSQL = "INSERT INTO exam (sub_id, ex_id, ex_quest, ex_ans) VALUES ('$sub_id', '$ex_id', '$ex0' , '$ans')";
    if ($conn->query($StrSQL) === TRUE) {
        $StrSQL = "INSERT INTO exam_choice (ex_id, ex_choice, ex_desc) VALUES ('$ex_id', '1', '$ex1'), ('$ex_id', '2', '$ex2'),('$ex_id','3','$ex3'),('$ex_id','4','$ex4')";

        if ($conn->query($StrSQL) === TRUE) {
            $conn->close();
            header( "location: ./a_ex_insert.php?sub_id=$sub_id&sub_name=$sub_name" );
            exit(0);
        }else{
            echo $conn->error;
        }
    }else{
        echo $conn->error;
    }
} else {
  echo "Error updating record: " . $conn->error;
}





?>

<span class="pull-right">STOU.29</span>

<?php include '../include/footer2.php';?>