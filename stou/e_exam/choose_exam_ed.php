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
  $ex_id = $_GET["ex_id"];
  $active_no = $_GET["active_no"];
  $ex_quest = $_GET["ex_quest"];

?>
<div class="container">
<form class="form-horizontal" >
  <div class="panel-group">

      <div class="panel panel-danger">
        <div class="panel-heading">ข้อสอบปัจจุบัน</div>
          <div class="panel-body">


          <div class="form-group">
            <label class="control-label col-sm-2" >sub_id:</label>
            <label class="control-label col-sm-2" style="text-align: left;"><?php echo $sub_id;  ?></label>
            <label class="control-label col-sm-2" >ex_id:</label>
            <label class="control-label col-sm-2" style="text-align: left;"><?php echo $ex_id;  ?></label>
            <label class="control-label col-sm-2" >active_no:</label>
            <label class="control-label col-sm-2" style="text-align: left;"><?php echo $active_no;  ?></label>
          </div>
            
          <div class="form-group">
            <label class="control-label col-sm-2" >ex_quest:</label>
            <label class="control-label col-sm-10" style="text-align: left;"><?php echo $ex_quest;  ?></label>
          </div>
           </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading"> เลือกจัดข้อสอบใหม่ </div>
          <div class="panel-body">


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

          $sql = "select e.sub_id, e.ex_id, e.ex_quest, e.ex_ans, eu.active_no from exam e left join exam_user eu on e.sub_id = eu.sub_id and e.ex_id = eu.ex_id where e.sub_id = ".$sub_id." and active_no is null order by ex_id";
          $result = $conn->query($sql);

          echo "<table class=\"table table-striped table-hover\">";
          echo "<thead>";
          echo "<tr>";
          echo "<th>sub_id</th>";    
          echo "<th>ex_id</th>";    
          echo " <th>ex_quest</th>";   
          echo "<th>ex_ans</th>";   
          echo "<th>active_no</th>";    
          echo "<th>Action</th>";    

          echo " </tr>";
          echo "</thead>";
          echo "<tbody>";

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>". $row["sub_id"] . "</td>";
              echo "<td>". $row["ex_id"] . "</td>";
              echo "<td>". $row["ex_quest"] . "</td>";
              echo "<td>". $row["ex_ans"] . "</td>";
              echo "<td>". $row["active_no"] . "</td>";
              echo "<td>". "<a href=\"./a_exam_update_db.php?sub_id=". $row["sub_id"] . "&active_no=". $active_no . "&ex_id=". $row["ex_id"] .
              "&sub_id_current=" .$sub_id . "&ex_id_current=" . $ex_id .
              "\" ><button type=\"button\" class=\"btn btn-success\">ปรับปรุงข้อสอบใหม่</button></a>" ."</td>"; 

              echo "</tr>";
            }
          }else{
            echo "ไม่มีข้อมูล";
          }
        
        echo  "</tbody>";
        echo "</table>";

          ?>
          <a href="./a_exam_search.php"><button type="button" class="btn btn-default">Back</button></a> 
          </div>
      </div>
    </div>
    </form>
  </div>
  <?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.43 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>