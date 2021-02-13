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
        <li><a href="../admin/a_exam.php">ประเมินตนเอง</a></li>
        <li><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/a_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">     
        <li  class="active"><a href="a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
$user = $_SESSION["user"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$StrSQL = "SELECT * FROM user WHERE user = '$user'";
$result = $conn->query($StrSQL);
$p = "";
$stou_id = "";
$name = "";
$email = "";
$study = "";
$edu = "";
$age25 = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $p = $row["pass"];
      $stou_id = $row["stou_id"];
      $name = $row["name"];
      $email = $row["email"];
      $study = $row["study"];
      $edu = $row["edu"];
      $age25 = $row["age25"];

    }
  } 
?>
<div class="container">
<h2>ข้อมูลส่วนตัว</h2>
  <form class="form-horizontal" action="../action/updAdInfoAction.php" method="post">
  <div class="panel panel-info">
      <div class="panel-heading">รายละเอียด</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" for="user_login">ชื่อผู้ใช้:</label>
      <div class="col-sm-10">
           <p>     <?php echo $_SESSION["user"] ; ?> </p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_pwd">รหัสผ่าน:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="user_pwd" placeholder="Enter User Password" name="user_pwd" value = "<?php echo $p; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_id">รหัสนักศึกษา:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="user_id" placeholder="Enter STOU ID" name="user_id" value="<?php echo $stou_id ; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">ชื่อ-นามสกุล:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="user_name" placeholder="Enter Name" name="user_name" value="<?php echo $name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_email">อีเมลล์:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="user_email" placeholder="Enter Email" name="user_email" value="<?php echo $email; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_study">สาขาวิชาที่เรียน:</label>
      <div class="col-sm-10">          
        <div class="form-group col-sm-12">
                <select class="input-large form-control"  name="user_study" id="user_study">
                   <?php
                        if( $study == 1){
                            echo "<option value=\"01\" selected>01 : สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา</option>";
                        }else{
                            echo "<option value=\"01\">01 : สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา</option>";
                        } 

                        if($study == 2){
                            echo "<option value=\"02\" selected>02 : สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป</option>";
                        }else{
                            echo "<option value=\"02\">02 : สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป</option>";
                        } 
                        
                        if($study == 3){
                            echo "<option value=\"03\" selected>03 : สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน</option>";
                        }else{
                            echo "<option value=\"03\">03 : สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน</option>";
                        } 
                        
                        if($study == 4){
                            echo "<option value=\"04\" selected>04 : สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ</option>";
                        }else{
                            echo "<option value=\"04\">04 : สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ</option>";
                        } 
                        
                        
                        if($study == 5){
                            echo "<option value=\"05\" selected>05 : สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์</option>";
                        }else{
                            echo "<option value=\"05\">05 : สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์</option>";
                        
                        } 
                        
                        if($study == 6){
                            echo "<option value=\"06\" selected>06 : สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว</option>";
                        }else{
                            echo "<option value=\"06\">06 : สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว</option>";
                        } 
                        
                        if($study == 7){
                            echo "<option value=\"07\" selected>07 : สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย</option>";
                        }else{
                            echo "<option value=\"07\">07 : สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย</option>";
                        } 
                        
                        if($study == 8){
                            echo "<option value=\"08\" selected>08 : สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา</option>";
                        }else{
                            echo "<option value=\"08\">08 : สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา</option>";
                        } 
                         if($study == 9){
                            echo "<option value=\"09\" selected>09 : สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต</option>";
                        }else{
                            echo "<option value=\"09\">09 : สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต</option>";
                        } 
                         if($study == "10"){
                            echo "<option value=\"10\" selected>10 : สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา</option>";
                        }else{
                            echo "<option value=\"10\">10 : สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา</option>";
                        } 
                         if($study == "11"){
                            echo "<option value=\"11\" selected>11 : สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง</option>";
                        }else{
                            echo "<option value=\"11\">11 : สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง</option>";
                        } 
                         if($study == "12"){
                            echo "<option value=\"12\" selected>12 : สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ</option>";
                        }else{
                            echo "<option value=\"12\">12 : สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ</option>";
                        } 

                        if($study == "13"){
                            echo "<option value=\"13\" selected>13 : สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง</option>";
                        }else{
                            echo "<option value=\"13\">13 : สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง</option>";
                        } 
                         if($study == "14"){
                            echo "<option value=\"14\" selected>14 : สาขาวิชาวิทยาการจัดการ - การจัดการ</option>";
                        }else{
                            echo "<option value=\"14\">14 : สาขาวิชาวิทยาการจัดการ - การจัดการ</option>";
                        } 
                         if($study == "15"){
                            echo "<option value=\"15\" selected>15 : สาขาวิชาวิทยาการจัดการ - การเงิน</option>";
                        }else{
                            echo "<option value=\"15\">15 : สาขาวิชาวิทยาการจัดการ - การเงิน</option>";
                        } 
                         if($study == "16"){
                            echo "<option value=\"16\" selected>16 : สาขาวิชาวิทยาการจัดการ - การตลาด</option>";
                        }else{
                            echo "<option value=\"16\">16 : สาขาวิชาวิทยาการจัดการ - การตลาด</option>";
                        } 
                         if($study == "17"){
                            echo "<option value=\"17\" selected>17 : สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว</option>";
                        }else{
                            echo "<option value=\"17\">17 : สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว</option>";
                        } 
                         if($study == "18"){
                            echo "<option value=\"18\" selected>18 : สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต</option>";
                        }else{
                            echo "<option value=\"18\">18 : สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต</option>";
                        } 
                         if($study == "19"){
                            echo "<option value=\"19\" selected>19 : สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต</option>";
                        }else{
                            echo "<option value=\"19\">19 : สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต</option>";
                        } 
                         if($study == "20"){
                            echo "<option value=\"20\" selected>20 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร</option>";
                        }else{
                            echo "<option value=\"20\">20 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร</option>";
                        } 
                         if($study == "21"){
                            echo "<option value=\"21\" selected>21 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม</option>";
                        }else{
                            echo "<option value=\"21\">21 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม</option>";
                        } 
                         if($study == "22"){
                            echo "<option value=\"22\" selected>22 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช</option>";
                        }else{
                            echo "<option value=\"22\">22 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช</option>";
                        } 
                         if($study == "23"){
                            echo "<option value=\"23\" selected>23 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์</option>";
    
                        }else{
                            echo "<option value=\"23\">23 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์</option>";
    
                        } 
                         if($study == "24"){
                            echo "<option value=\"24\" selected>24 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร</option>";
                        }else{
                            echo "<option value=\"24\">24 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร</option>";
                        } 
                         if($study == "25"){
                            echo "<option value=\"25\" selected>25 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์</option>";
                        }else{
                            echo "<option value=\"25\">25 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์</option>";
                        } 
                         if($study == "26"){
                            echo "<option value=\"26\" selected>26 : สาขาวิชานิติศาสตร์ </option>";
                        }else{
                            echo "<option value=\"26\">26 : สาขาวิชานิติศาสตร์ </option>";
                        } 
                         if($study == "27"){
                            echo "<option value=\"27\" selected>27 : สาขาวิชานิเทศศาสตร์</option>";
                        }else{
                            echo "<option value=\"27\">27 : สาขาวิชานิเทศศาสตร์</option>";
                        } 
                         if($study == "28"){
                            echo "<option value=\"28\" selected>28 : สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน</option>";
                        }else{
                            echo "<option value=\"28\">28 : สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน</option>";
                        } 
                         if($study == "29"){
                            echo "<option value=\"29\" selected>29 : สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย</option>";
                        }else{
                            echo "<option value=\"29\">29 : สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย</option>";
                        } 
                        if($study == "30"){
                            echo "<option value=\"30\" selected>30 : สาขาวิชาวิทยาศาสตร์สุขภาพ - แพทย์แผนไทย</option>";
                        }else{
                            echo "<option value=\"30\">30 : สาขาวิชาวิทยาศาสตร์สุขภาพ - แพทย์แผนไทย</option>";
                        } 

                         if($study == "31"){
                            echo "<option value=\"31\" selected>31 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร</option>";
                        }else{
                            echo "<option value=\"31\">31 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร</option>";
                        } 
                         if($study == "32"){
                            echo "<option value=\"32\" selected>32 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์</option>";
                        }else{
                            echo "<option value=\"32\">32 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์</option>";
                        } 
                         if($study == "33"){
                            echo "<option value=\"33\" selected>32 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม</option>";
    
                        }else{
                            echo "<option value=\"33\">33 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม</option>";
    
                        } 
                         if($study == "34"){
                            echo "<option value=\"34\" selected>34 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์</option>";
    
                        }else{
                            echo "<option value=\"34\">34 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์</option>";
    
                        } 
                         if($study == "35"){
                            echo "<option value=\"35\" selected>35 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์</option>";
    
                        }else{
                            echo "<option value=\"35\">35 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์</option>";
    
                        } 
                         if($study == "36"){
                            echo "<option value=\"36\" selected>36 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ</option>";
    
                        }else{
                            echo "<option value=\"36\">36 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ</option>";
    
                        } 
              
                   ?>
                </select>
            </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="user_edu">วุฒิการศึกษาที่ใช้สมัคร:</label>
      <div class="col-sm-10">          
        <div class="form-group col-sm-12">
                <select class="input-large form-control"  name="user_edu" id="user_edu">
                        <?php

                        if($edu ==  '3'){
                            echo "<option value=\"3\" selected>มัธยมศึกษาตอนต้น</option>";

                        }else{
                            echo "<option value=\"3\">มัธยมศึกษาตอนต้น</option>";

                        }

                        if($edu ==  '6'){
                            echo "<option value=\"6\" selected>มัธยมศึกษาตอนปลาย</option>";

                        }else{
                            echo "<option value=\"6\">มัธยมศึกษาตอนปลาย</option>";

                        }
                        if($edu ==  '9'){
                            echo "<option value=\"9\" selected>ประกาศนียบัตรขั้นสูง</option>";

                        }else{
                            echo "<option value=\"9\">ประกาศนียบัตรขั้นสูง</option>";

                        }
                        if($edu ==  '12'){
                            echo "<option value=\"12\" selected>ปริญญาตรี</option>";

                        }else{
                            echo "<option value=\"12\">ปริญญาตรี</option>";

                        }
                        ?>
                </select>
            </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_age25">อายุ:</label>
      <div class="col-sm-10">          
        <div class="form-group col-sm-12">
                <select class="input-large form-control"  name="user_age25" id="user_age25">
                  
                  <?php
                        if($edu ==  '12'){
                            echo "<option value=\"Y\" selected>น้อยกว่า หรือ เท่ากับ 25 ปี</option>";

                        }else{
                            echo "<option value=\"N\">น้อยกว่า หรือ เท่ากับ 25 ปี</option>";

                        }

                        if($edu ==  '12'){
                            echo "<option value=\"Y\" selected>ตั้งแต่ 25 ปีขึ้นไป<</option>";

                        }else{
                            echo "<option value=\"N\">ตั้งแต่ 25 ปีขึ้นไป</option>";

                        }

                    ?>

                </select>
            </div>
      </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="../m_index.php"><button type="button" class="btn btn-primary">กลับสู่เมนูหลัก</button></a>
        <button type="submit" class="btn btn-primary">บันทึกการแก้ไขข้อมูล</button>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<?php
  $conn->close();
?>
<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.31 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>