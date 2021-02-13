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
<style>
.table-hover tbody tr:hover td {
    background: aqua;
}
</style>
<?php

    $sub_id = $_GET["sub_id"];
    $sub_name = $_GET["sub_name"];

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
    <div class="panel panel-primary">
      <div class="panel-heading">แบบทดสอบ <?php echo $sub_id . " " . $sub_name  ?></div>

      <div class="panel-body">
      <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>ชุดวิชา</th>
        <th>ex_id</th>
        <th>โจทย์คำถาม</th>
        <th>เฉลย</th>
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

        $sql = "SELECT * FROM exam where sub_id = '$sub_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["sub_id"] ."</td>";
                echo "<td>" . $row["ex_id"] ."</td>";
                echo "<td>" . $row["ex_quest"] ."</td>";
                echo "<td>" . $row["ex_ans"] ."</td>";
 
                 echo "<td>". "<a href=\"./choose_ex_ed.php?sub_id=". $row["sub_id"] . "&ex_id=".$row["ex_id"] . 
                 "&ex_quest=" . $row["ex_quest"] . "&ex_ans=" . $row["ex_ans"].
                "\" ><button type=\"button\" class=\"btn btn-success\">ปรับปรุง</button></a>" ."</td>";    
                echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<tr>
  <td colspan="5"> <a href="./a_exam_search.php"><button type="button" class="btn btn-default">Back</button></a> </td>
</tr>
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
<span class="pull-right">STOU.42 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>