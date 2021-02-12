<?php include '../include/header2.php';?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li ><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li class="active"><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
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
<?php

        $sub_id = $_POST["sub_id"];
        $train_day = $_POST["train_day"];
        $course_id = $_POST["user_study"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stou";

        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $StrSQL = "SELECT * FROM train WHERE sub_id = '$sub_id' and course_id = '$course_id'";
        $result = $conn->query($StrSQL);

        if ($result->num_rows == 0) {
          $StrSQL = "SELECT * FROM subject WHERE sub_id = '$sub_id'";
          $result2 = $conn->query($StrSQL);
          if ($result2->num_rows > 0) {
            $StrSQL = "INSERT INTO train (sub_id, course_id, train_day)
            VALUES ('$sub_id', '$course_id', '$train_day')";
            
            if ($conn->query($StrSQL) === TRUE) {
                    // forward
                    $conn->close();
                    header( "location: ../admin/a_course.php" );
                    exit(0);
            } else {
                // error
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-danger\">";
                     echo "<div class=\"panel-heading text-center\">เพิ่มข้อมูลเกิดข้อผิดพลาด</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "ข้อผิดพลาด<br> ไม่สามารถเพิ่มชุดวิชาได้เกิดข้อผิดพลาดบางประการ <br>". $conn->error."<br>";
                        echo "<a href=\"../admin/a_course.php\"><button type=\"button\" class=\"btn btn-primary\">ชุดวิชาเรียน</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";
              $conn->close();
            } 
          }else{
             // error
             echo "<div class=\"container\">" ;    
             echo "<div class=\"row\">";
             echo "<div class=\"col-sm-4\"></div>";
               echo "<div class=\"col-sm-4\">"; 
                echo "<div class=\"panel panel-danger\">";
                  echo "<div class=\"panel-heading text-center\">เพิ่มข้อมูลเกิดข้อผิดพลาด</div>";
                    echo "<div class=\"panel-body text-center\">";
                     echo "ข้อผิดพลาด<br> ไม่สามารถเพิ่มชุดวิชาได้เกิดข้อผิดพลาดบางประการ <br>". $conn->error."<br>";
                     echo "<a href=\"../admin/a_course.php\"><button type=\"button\" class=\"btn btn-primary\">ชุดวิชาเรียน</button></a>";
                     echo "</div>";
                   echo "<div class=\"panel-footer\"></div>";
                echo "</div>";
               echo "</div>";
           echo "<div class=\"col-sm-4\"></div>";
           echo "</div>";
           echo "</div>";
           $conn->close();
          }
      }else{
        
          echo "<div class=\"container\">" ;    
          echo "<div class=\"row\">";
          echo "<div class=\"col-sm-4\"></div>";
            echo "<div class=\"col-sm-4\">"; 
             echo "<div class=\"panel panel-danger\">";
               echo "<div class=\"panel-heading text-center\">เพิ่มข้อมูลเกิดข้อผิดพลาด</div>";
                 echo "<div class=\"panel-body text-center\">";
                  echo "ข้อผิดพลาด<br> ชุดวิชานี้มีอยู่แล้ว <br>ไม่สามารถชุดวิชานี้ได้ <br>". $conn->error."<br>";
                  echo "<a href=\"../admin/a_course.php\"><button type=\"button\" class=\"btn btn-primary\">ชุดวิชาเรียน</button></a>";
                  echo "</div>";
                echo "<div class=\"panel-footer\"></div>";
             echo "</div>";
            echo "</div>";
        echo "<div class=\"col-sm-4\"></div>";
        echo "</div>";
        echo "</div>";
        $conn->close();
      }
?>
<span class="pull-right">STOU.04</span>
<?php include '../include/footer2.php';?>