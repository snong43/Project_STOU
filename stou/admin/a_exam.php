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
        <li><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li class="active"><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
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
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "stou";
  $user_login = $_SESSION["user"];

  $conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($conn,"utf8");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
<form class="form-horizontal">
<div class="container">
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">ข้อมูลการทดสอบ</div>
      <div class="panel-body">
      <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>course_id</th>
        <th>course_name</th>
        <th>MATH</th>
        <th>SCI</th>
        <th>WRITE</th>
        <th>TRAIN</th>
        <th>ONLINE</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php
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

        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["course_id"] ."</td>";
                echo "<td>" . $row["course_name"] ."</td>";
                echo "<td>" . $row["math"] ."</td>";
                echo "<td>" . $row["sci"] ."</td>";
                echo "<td>" . $row["write_exam"] ."</td>";
                echo "<td>" . $row["train"] ."</td>"; 
                 echo "<td>" . $row["online"] ."</td>";
                 echo "<td>". "<a href=\"../action/u_exam.php?course_id=".$row["course_id"]."&course_name=".$row["course_name"]."&online=".$row["online"].
                "&math=".$row["math"]."&sci=".$row["sci"] ."&write_exam=".$row["write_exam"]."&train=".$row["train"] .
                "\" ><button type=\"button\" class=\"btn btn-info\">ปรับปรุง</button></a>" ."</td>";    
                echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</tbody>
</table>
    </div>
    </div>

  </div>
</div>
</form>
<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.30 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>