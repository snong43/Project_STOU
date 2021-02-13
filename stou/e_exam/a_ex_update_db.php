<?php include '../include/header2.php';?>
<?php
$user_login = $_SESSION["role"] ;

if(!isset($user_login)){
  header( "location: ../login.php" );
  exit(0);
}

if("A" != $user_login ){
  header( "location: ../m_index.php" );
  exit(0);
}

?>
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


$sub_id = $_POST["sub_id"];
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

$StrSQL =  "UPDATE exam SET ex_ans = '$ans', ex_quest = '$ex0' WHERE  sub_id= '$sub_id' and ex_id = '$ex_id'";


  if ($conn->query($StrSQL) === TRUE) {
    $StrSQL =  "UPDATE exam_choice SET ex_desc = '$ex1' WHERE  ex_choice= '1' and ex_id = '$ex_id'";
    if ($conn->query($StrSQL) === TRUE) {
      $StrSQL =  "UPDATE exam_choice SET ex_desc = '$ex2' WHERE  ex_choice= '2' and ex_id = '$ex_id'";
      if ($conn->query($StrSQL) === TRUE) {
        $StrSQL =  "UPDATE exam_choice SET ex_desc = '$ex3' WHERE  ex_choice= '3' and ex_id = '$ex_id'";
        if ($conn->query($StrSQL) === TRUE) {
          $StrSQL =  "UPDATE exam_choice SET ex_desc = '$ex4' WHERE  ex_choice= '4' and ex_id = '$ex_id'";
          if ($conn->query($StrSQL) === TRUE) {
            $conn->close();
            header("Location: a_exam_search.php");
            exit();
          }else{
            echo "update 4= ". $StrSQL . "<br>";
          }
        }else{
          echo "Error updating record: " . $conn->error;
        }
      }else{
        echo "Error updating record: " . $conn->error;
      }
    }else{
      echo "Error updating record: " . $conn->error;
    }
  }else{
    echo "Error updating record: " . $conn->error;
  }

  $conn->close();

?>

<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.35<?php echo $space ?></span>

<?php include '../include/footer2.php';?>