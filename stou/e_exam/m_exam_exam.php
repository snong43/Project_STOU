<?php include '../include/header2.php';?>
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
      <a class="navbar-brand" href="../m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../member/m_course.php">สนใจเรียน</a></li>
        <li><a href="../member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="../member/m_exam.php">ประเมินตนเอง</a></li>
        <li ><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li class="active"><a href="../e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<script>
    var answer = ["", "", "", "", "", "", "", "", "", ""]; 

    function validate(){
        var q1 = $('input[name="quest_1"]:checked').val(); ;       
        var q2 = $('input[name="quest_2"]:checked').val(); ;       
        var q3 = $('input[name="quest_3"]:checked').val(); ;       
        var q4 = $('input[name="quest_4"]:checked').val(); ;       
        var q5 = $('input[name="quest_5"]:checked').val(); ;       
        var q6 = $('input[name="quest_6"]:checked').val(); ;       
        var q7 = $('input[name="quest_7"]:checked').val(); ;       
        var q8 = $('input[name="quest_8"]:checked').val(); ;       
        var q9 = $('input[name="quest_9"]:checked').val(); ;       
        var q10 = $('input[name="quest_10"]:checked').val();    

        if(q1 == undefined || q2 == undefined || q3 == undefined || q4 == undefined || q5 == undefined
        || q6 == undefined || q7 == undefined || q8 == undefined || q9 == undefined || q10 == undefined){

            if(q1 == undefined ){
                document.getElementById("q1_required").style.display = "block";
            }else{
                document.getElementById("q1_required").style.display = "none";
            }
            if(q2 == undefined ){
                document.getElementById("q2_required").style.display = "block";
            }else{
                document.getElementById("q2_required").style.display = "none";
            }
            if(q3 == undefined ){
                document.getElementById("q3_required").style.display = "block";
            }else{
                document.getElementById("q3_required").style.display = "none";
            }
            if(q4 == undefined ){
                document.getElementById("q4_required").style.display = "block";
            }else{
                document.getElementById("q4_required").style.display = "none";
            }
            if(q5 == undefined ){
                document.getElementById("q5_required").style.display = "block";
            }else{
                document.getElementById("q5_required").style.display = "none";
            }
            if(q6 == undefined ){
                document.getElementById("q6_required").style.display = "block";
            }else{
                document.getElementById("q6_required").style.display = "none";
            }
            if(q7 == undefined ){
                document.getElementById("q7_required").style.display = "block";
            }else{
                document.getElementById("q7_required").style.display = "none";
            }
            if(q8 == undefined ){
                document.getElementById("q8_required").style.display = "block";
            }else{
                document.getElementById("q8_required").style.display = "none";
            }
            if(q9 == undefined ){
                document.getElementById("q9_required").style.display = "block";
            }else{
                document.getElementById("q9_required").style.display = "none";
            }
            if(q10 == undefined ){
                document.getElementById("q10_required").style.display = "block";
            }else{
                document.getElementById("q10_required").style.display = "none";
            }

        }else{
            document.getElementById("sendExam").disabled = true;

            clearRequired();
            checkAnswer();
        }
    }

    function clearRequired(){
        document.getElementById("q1_required").style.display = "none";
        document.getElementById("q2_required").style.display = "none";
        document.getElementById("q3_required").style.display = "none";
        document.getElementById("q4_required").style.display = "none";
        document.getElementById("q5_required").style.display = "none";
        document.getElementById("q6_required").style.display = "none";
        document.getElementById("q7_required").style.display = "none";
        document.getElementById("q8_required").style.display = "none";
        document.getElementById("q9_required").style.display = "none";
        document.getElementById("q10_required").style.display = "none";
    }

    function checkAnswer(){
        var q1 = $('input[name="quest_1"]:checked').val(); ;       
        var q2 = $('input[name="quest_2"]:checked').val(); ;       
        var q3 = $('input[name="quest_3"]:checked').val(); ;       
        var q4 = $('input[name="quest_4"]:checked').val(); ;       
        var q5 = $('input[name="quest_5"]:checked').val(); ;       
        var q6 = $('input[name="quest_6"]:checked').val(); ;       
        var q7 = $('input[name="quest_7"]:checked').val(); ;       
        var q8 = $('input[name="quest_8"]:checked').val(); ;       
        var q9 = $('input[name="quest_9"]:checked').val(); ;       
        var q10 = $('input[name="quest_10"]:checked').val();    
        var cNumber = 0;

        if(q1 == answer[0]){
            document.getElementById("ic_1_"+answer[0]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_1_"+answer[0]).innerHTML  = "❌";
        }
        if(q2 == answer[1]){
            document.getElementById("ic_2_"+answer[1]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_2_"+answer[1]).innerHTML  = "❌";
        }
        if(q3 == answer[2]){
            document.getElementById("ic_3_"+answer[2]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_3_"+answer[2]).innerHTML  = "❌";
        }
        if(q4 == answer[3]){
            document.getElementById("ic_4_"+answer[3]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_4_"+answer[3]).innerHTML  = "❌";
        }
        if(q5 == answer[4]){
            document.getElementById("ic_5_"+answer[4]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_5_"+answer[4]).innerHTML  = "❌";
        }
        if(q6 == answer[5]){
            document.getElementById("ic_6_"+answer[5]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_6_"+answer[5]).innerHTML  = "❌";
        }
        if(q7 == answer[6]){
            document.getElementById("ic_7_"+answer[6]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_7_"+answer[6]).innerHTML  = "❌";
        }
        if(q8 == answer[7]){
            document.getElementById("ic_8_"+answer[7]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_8_"+answer[7]).innerHTML  = "❌";
        }
        if(q9 == answer[8]){
            document.getElementById("ic_9_"+answer[8]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_9_"+answer[8]).innerHTML  = "❌";
        }
        if(q10 == answer[9]){
            document.getElementById("ic_10_"+answer[9]).innerHTML = "✅";
            cNumber++;
        }else{
            document.getElementById("ic_10_"+answer[9]).innerHTML  = "❌";
        }

        document.getElementById("score").innerHTML = "<h3>  คะแนนที่ได้รับทั้งหมด " + cNumber + " คะแนน</h3>" ;
    }

</script>

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

    $StrSQL = "select e.sub_id, e.ex_id, eu.active_no,e.ex_quest,e.ex_ans, ec.ex_choice, ec.ex_desc from exam e join exam_user eu on ".
    " e.sub_id = eu.sub_id AND e.ex_id = eu.ex_id join exam_choice ec on e.ex_id = ec.ex_id ".
    " where e.sub_id = '$sub_id' order by active_no asc";

    $result = $conn->query($StrSQL);
    ?>
        <div class="container">
        <p><?php echo "แบบทดสอบ ชุดวิชา " . $sub_id . " " . $sub_name?></p>     

            <div class="panel-group">
    <?php
    $count_row = 1;

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($count_row%4 == 1){
                echo "<div class=\"panel panel-primary\">";
                echo "<div class=\"panel-heading\">";
                echo "ข้อ ". $row["active_no"] . ". " .  $row["ex_quest"] . " ?  <span id=\"q". $row["active_no"]."_required\" style=\"display:none;color:red;\" >กรุณาเลือกคำตอบ (...)</span> ";
                echo "</div>";
                echo "<div class=\"panel-body\">";

                echo "<div class=\"radio\">";
                echo "<label><input type=\"radio\" name=\"quest_".$row["active_no"]."\" value=\"". $row["ex_choice"]."\">" . $row["ex_choice"] . ") ".$row["ex_desc"] ."</label><span id=\"ic_". $row["active_no"]."_".$row["ex_choice"]  ."\"></span>";
                echo "</div>";
                ?>
                    <script>
                        answer[<?php echo $row["active_no"]-1; ?>] =  <?php echo $row["ex_ans"]; ?> ;
                    </script>
                <?php
            }else{
                echo "<div class=\"radio\">";
                echo "<label><input type=\"radio\" name=\"quest_".$row["active_no"]."\" value=\"". $row["ex_choice"]."\">" . $row["ex_choice"] . ") ".$row["ex_desc"] ."</label><span id=\"ic_". $row["active_no"]."_".$row["ex_choice"]  ."\"></span>";
                echo "</div>";
            }
            if($count_row%4 == 0){
                echo "</div>";
                echo "</div>";
            }
            $count_row++;
        }
    }else{
        mysqli_close($conn);
    }
?>
    <br>
    <a href="../e_exam/m_exam_search.php"><button type="button" class="btn btn-default">Back</button></a>
    <button type="button" class="btn btn-primary" onclick="validate()" id="sendExam" >ส่งข้อสอบ</button>
    <span id="score" style="color:blue"></span>
        </div>

    </div>
    <?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.45 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>