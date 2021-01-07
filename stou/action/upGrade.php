<?php include '../include/header2.php';?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../m_index.php">Home</a></li>
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/">ปฏิทิน</a></li>
        <li><a href="#">สนใจเรียน</a></li>
        <li><a href="#">กิจกรรม</a></li>
        <li><a href="./member/m_grade.php">บันทึกผลการเรียน</a></li>

        <li><a href="#">ทดสอบตัวเอง</a></li>
        <li><a href="#">ติดต่อ</a></li>



      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="active"><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>



    </div>
  </div>
</nav>

<?php

    $sub_id = $_POST["sub_id"];
    $term_no = $_POST["term_no"];
    $term_year = $_POST["term_year"];
    $grade = $_POST["grade"];
    $user_login = $_SESSION["user"] ;


    echo "sub_id =" . $sub_id ;
    echo "term_no =" . $term_no ;
    echo "term_year =" . $term_year ;
    echo "grade =" . $grade ;
    echo "user_login =" . $user_login ;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stou";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");


    $sql = "UPDATE grade SET term_year='$term_year' , term_no ='$term_no', grade = '$grade' WHERE sub_id = '$sub_id' and user = '$user_login' ";

if ($conn->query($sql) === TRUE) {
    $conn->close();
    header( "location: ../member/m_grade.php" );
    exit(0);

  echo "Record updated successfully";
} else {
    echo "<div class=\"container\">" ;    
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm-4\"></div>";
      echo "<div class=\"col-sm-4\">"; 
       echo "<div class=\"panel panel-danger\">";
         echo "<div class=\"panel-heading text-center\">แก้ไขข้อมูลลงทะเบียน</div>";
           echo "<div class=\"panel-body text-center\">";
            echo "แก้ไขข้อมูลไม่สำเร็จ<br> เกิดข้อผิดพลาด <br>". $conn->error."<br><br>";
            echo "<a href=\"../member/m_gradea.php\"><button type=\"button\" class=\"btn btn-primary\">กลับหน้า ข้อมูลการลงทะเบียน</button></a>";
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




<?php include '../include/footer2.php';?>