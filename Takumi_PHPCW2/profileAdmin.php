<?php
    include('./pages/header.php');
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
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: <?php
            if(isset($_GET['aaa'])) echo "block";
            else echo "none";
            ?> ; backgroud-color:red; color:firebrick; width: 40%;">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong>Message</strong> <?php if(isset($_GET['aaa'])) echo $_GET['aaa']; ?>
            </div>
            
            <script>
              var alertList = document.querySelectorAll('.alert');
              alertList.forEach(function (alert) {
                new bootstrap.Alert(alert)
              })
            </script>
<form method="post" action="<?php echo $baseName.'regCourse.php'?> " style="width: 75%; display: flex; flex-direction: column; align-items :center;">
    <div class="mb-3" style="width: 50%;">
        <select class="form-select form-select-lg" name="course" ">
        <option value="" disabled>selsct course</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JavaScript</option>
        <option value="advance">JavaScrpt Advance</option>
        <option value="php">PHP</option>
        <option value="CMS">CMS</option>
        </select>
    </div>
    <div class="mb-3" style="width: 50%;">
        <select class="form-select form-select-lg" name="student" >
              <option value="" disabled >select</option>
        <?php 
            $file = fopen("./data/students/students.json","r");
            $stArray = json_decode(fread($file,filesize("./data/students/students.json")),true);
            fclose($file);
            foreach($stArray as $students){
                echo  "<option value='".$students['stID']."'>".$students['stID']." ".$students['fname']." ".$students['lname']."</option>";
            }
        ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" style="width: 30%;">ADD</button>
</form>
<?php
    include('./pages/footer.php');
?>

