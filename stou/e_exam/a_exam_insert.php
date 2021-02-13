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
        <li><a href="../admin/a_exam.php">ประเมินตนเอง</a></li>
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
<style>
.table-hover tbody tr:hover td {
    background: aqua;
}
</style>
<?php

$sub_id = $_GET["sub_id"];
$sub_name = $_GET["sub_name"];
$active_no = $_GET["active_no"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">กำหนดข้อสอบ (MAPPING) => <?php echo $sub_id . " " . $sub_name ?></div>
        <div class="panel-body">




        <table class="table table-hover">
    <thead>
      <tr>
        <th>sub_id</th>
        <th>ex_id</th>
        <th>ex_quest</th>
        <th>ex_ans</th>
        <th>active_no</th>
        <th>Opearation</th>

      </tr>
    </thead>
    <tbody>
        
        <?php
        $sql = "SELECT e.sub_id, e.ex_id, e.ex_quest, e.ex_ans, eu.active_no FROM exam e left join exam_user eu on e.sub_id = eu.sub_id  and e.ex_id = eu.ex_id where e.sub_id = '$sub_id' and eu.active_no is null";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

      

            echo "<tr>";
            echo "<td>". $row["sub_id"]. "</td>";
            echo "<td>". $row["ex_id"]. "</td>";
            echo "<td>". $row["ex_quest"]. "</td>";
            echo "<td>". $row["ex_ans"]. "</td>";
            echo "<td>". $row["active_no"] . "</td>";
            echo "<td><a href=\"./a_exam_insert_db.php?sub_id=" . $row["sub_id"] . "&ex_id=" . $row["ex_id"] . "&active_no=". $active_no ."&sub_name=".$sub_name."\"><button type=\"button\" class=\"btn btn-primary\"> เพิ่มวิชา </button></a></td>";
            echo "<tr>";

          }
        }else{

          echo "ยังไม่มีข้อสอบ";
        }

        ?>
   </tbody>
  </table>
  <a href="../e_exam/a_exam_search.php"><button type="button" class="btn btn-default">Back</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.38 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>