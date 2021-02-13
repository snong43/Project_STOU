<?php include 'include/header.php';?>
<?php
$user_login = $_SESSION["role"] ;

if(!isset($user_login)){
  header( "location: ../login.php" );
  exit(0);
}

if("C" != $user_login ){
  header( "location: ../a_index.php" );
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
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="member/m_course.php">สนใจเรียน</a></li>
        <li><a href="member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="member/m_exam.php">ประเมินตนเอง</a></li>
        <li><a href="member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">        
        <li><a href="./member/m_info.php"><img src="img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<style>


</style>
<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">ข่าวประชาสัมพันธ์</div>
      <div class="panel-body">
      
      
      <?php

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "stou";

          $conn = new mysqli($servername, $username, $password, $dbname);
          mysqli_set_charset($conn,"utf8");

          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }


          $StrSQL = "SELECT * FROM news order by news_date desc limit 5";
          $result = $conn->query($StrSQL);
          $first_row = true;
          $row_number = 1;
          ?>

              <div class="panel-group" id="accordion">

          <?php
      
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

              if($first_row == true){

                echo "<div class=\"panel panel-info\">";
                echo "<div class=\"panel-heading\">";
                echo "<h4 class=\"panel-title\">";
                echo "    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse". $row_number ."\">". $row["news_title"]."</a>";
                echo "  </h4>";
                echo "</div>";
                echo "<div id=\"collapse". $row_number ."\" class=\"panel-collapse collapse in\">";
                echo "  <div class=\"panel-body\">";
                echo "<blockquote>";
                echo "<p>" . $row["news_content"] . "</p>";
                echo "<footer style=\"background-color: #FFFFFF\"> วันที่ประกาศ : " . $row["news_date"] . "</footer>";
                echo "</blockquote>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                $first_row  = false;
                $row_number++;
              }else{

                echo "<div class=\"panel panel-info\">";
                echo "<div class=\"panel-heading\">";
                echo "<h4 class=\"panel-title\">";
                echo "    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse". $row_number ."\">". $row["news_title"]."</a>";
                echo "  </h4>";
                echo "</div>";
                echo "<div id=\"collapse". $row_number ."\" class=\"panel-collapse collapse \">";
                echo "  <div class=\"panel-body\">";
                echo "<blockquote>";
                echo "<p>" . $row["news_content"] . "</p>";
                echo "<footer style=\"background-color: #FFFFFF\"> วันที่ประกาศ : " . $row["news_date"] . "</footer>";
                echo "</blockquote>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                $row_number++;
              }
            }
          }else{
            echo "<div class=\"text-center\">ไม่มีข่าวสารในช่วงนี้</div>";
          }
      ?>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">   
  <div class="row">
        <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">สนใจเรียน</div>
        <div class="panel-body"><a href="member/m_course.php"><img src="img/study.png" class="img-responsive"  class="img-responsive" style="width:100%" title="สนใจเรียน"></a></div>
      </div>
    </div>
  <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">ประเมินตนเอง</div>
        <div class="panel-body"><a href="member/m_exam.php"><img src="img/exam.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">วิชาอบรม</div>
        <div class="panel-body"><a href="member/m_day_train.php"><img src="img/them.png" class="img-responsive" style="width:100%" title="วิชาอบรม"></a></div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">คลังข้อสอบ</div>
        <div class="panel-body">
          <a href="e_exam/m_exam_search.php">
            <div class="panel-body"><a href="e_exam/m_exam_search.php"><img src="img/course.png" class="img-responsive" style="width:100%" title="คลังข้อสอบ"></a></div>
         </a>
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">บันทึกผลการเรียน</div>
        <div class="panel-body"><a href="member/m_grade.php"><img src="img/record.png" class="img-responsive" style="width:100%" title="บันทึกผลการเรียน"></a></div>
      </div>
    </div>

  <div class="col-sm-2">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">ส่วนตัว</div>
        <div class="panel-body"><a href="member/m_info.php"><img src="img/person.png" class="img-responsive"  style="width:100%" title="ส่วนตัว"></a></div>
      </div>
    </div>
</div>
</div>
<br>
</div>

<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.62 <?php echo $space ?></span>
<?php include 'include/footer.php';?>