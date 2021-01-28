<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul> 
    </div>
  </div>
</nav>
<?php
$user = $_POST["user_login"];
$pass = $_POST["user_pwd"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$StrSQL = "SELECT * FROM user WHERE user = '$user' and pass = '$pass'";
$result = $conn->query($StrSQL);


if ($result->num_rows > 0) {

  $_SESSION["user"] = "$user";

  while($row = $result->fetch_assoc()) {
    $_SESSION["role"]  =  $row["role"];

    echo "Age = " . $row["age25"] . "<br>";
    echo "study = " . $row["study"] . "<br>";

    if($row["age25"] == "Y" && $row["study"] == "3" ){
      $_SESSION["a25"]  =  "A";
    }else{
      $_SESSION["a25"]  =  "N";
    }
  }

  if($_SESSION["role"] ==  "A"){
    header( "location: ../a_index.php" );
  }else{
    header( "location: ../m_index.php" );
  }
  exit(0); 
} else {
    echo "<div class=\"container\">" ;    
    echo "<div class=\"row\">";
    echo "<div class=\"col-sm-4\"></div>";
      echo "<div class=\"col-sm-4\">"; 
       echo "<div class=\"panel panel-danger\">";
         echo "<div class=\"panel-heading text-center\">LOG IN FAIL</div>";
           echo "<div class=\"panel-body text-center\">";
            echo "ไม่มีสิทธิ์เข้าระบบ<br> กรุณาเข้าระบบอีกครั้ง <br>หรือ สมัครเป็นสมาชิกใหม่ <br><br>";
            echo "<a href=\"../login.php\"><button type=\"button\" class=\"btn btn-primary\">เข้าระบบใหม่</button></a>";
            echo "</div>";
          echo "<div class=\"panel-footer\"></div>";
       echo "</div>";
      echo "</div>";
  echo "<div class=\"col-sm-4\"></div>";
  echo "</div>";
  echo "</div>";
}
$conn->close();
?>
<span class="pull-right">STOU.06</span>

<?php include '../include/footer2.php';?>