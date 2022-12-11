<?php 
include './pages/header.php';
if(!isset($_SESSION['logUser'])) {
    header("Location: ".$baseName.'index.php');
    exit();
}
?>
<div class="alert alert-success alert-dismissible fade show" role="alert" style="display: <?php
            if(isset($_GET['msg'])) echo "block";
            else echo "none";
            ?> ;width: 40%;">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong>Message</strong> <?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
            </div>
            
            <script>
              var alertList = document.querySelectorAll('.alert');
              alertList.forEach(function (alert) {
                new bootstrap.Alert(alert)
              })
            </script>
<div class="row justify-content-center align-items-center g-2" style="width: 100%;">
    <div class="col-4">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="display: flex; flex-direction: column; row-gap: 1vh; align-items: center;">
                <select class="form-select form-select-lg" name="course">
                        <option disabled selected>Select Course</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="javascript">JavaScript</option>
                        <option value="advance">JavaScript Advance</option>
                        <option value="php">PHP</option>
                        <option value="CMS">CMS</option>
                </select>
                <input type="submit" value="Show Students" style="width:60%;">
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $course = $_POST['course'];
                $_SESSION['course'] = $course;
                echo "<h2>Course: ".$_SESSION['course']."</h2>";
                echo "<form action='".$_SERVER['PHP_SELF']."?stnm=haha' method='get' style='display: flex; flex-direction: column; row-gap: 1vh; align-items: center';>";
                echo "<select class='form-select form-select-lg' name='student'>";
                $file = fopen("./data/courses/$course/$course.json",'r');
                $datas = fread($file,filesize("./data/courses/$course/$course.json"));
                $datas = json_decode($datas,true);
                fclose($file);
                echo "<option disabled selected>select student</option>";
                foreach($datas as $data){
                    echo  "<option value='".$data['stID']."'>".$data['stID']." mark:".$data['mark']."</option>";
                }
                echo "</select><input type='submit' value='Edit marks' style='width:60%';></form>";
            }
        ?>
    </div>
    <div class="col-5">
        <form action="<?php echo $baseName."marks.php"?>" method="post">
        <?php 
            $file = fopen("./data/courses/".$_SESSION['course']."/".$_SESSION['course'].".json",'r');
            $datas = fread($file,filesize("./data/courses/".$_SESSION['course']."/".$_SESSION['course'].".json"));
            $datas = json_decode($datas,true);
            fclose($file);
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $stID = $_GET['student'];
                $_SESSION['stID'] = $stID;
                foreach($datas as $data){
                    if($data['stID']==$stID){
                        echo "<h1>Student ID: $stID</h1>";
                        echo "<h1>Course: ".$_SESSION['course']."</h1>";
                        echo "<h1>Current Mark: ".$data['mark']."</h1>";
                        echo "<input type='number' name='mark' placeholder='Change mark!!!'><input type='submit' value='EDIT'>";
                    }
                }
            }
        ?>
        </form>
    </div>
<?php include './pages/footer.php'; ?>