<?php
    include('./pages/header.php');
    
?>
<div class="alert alert-success alert-dismissible fade show" role="alert" style="display: <?php
            if(isset($_GET['msg'])) echo "block";
            else echo "none";
            ?> ;">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong>Message</strong> <?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>
            </div>
            
            <script>
              var alertList = document.querySelectorAll('.alert');
              alertList.forEach(function (alert) {
                new bootstrap.Alert(alert)
              })
            </script>
<form method="post" action="<?php echo $baseName.'regCourse.php'?>">
    <div class="mb-3">
        <select class="form-select form-select-lg" name="course">
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JavaScript</option>
        <option value="advance">JavaScrpt Advance</option>
        <option value="php">PHP</option>
        <option value="CMS">CMS</option>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select form-select-lg" name="student">
        <?php 
            $file = fopen("./data/students/students.json","r");
            $stArray = json_decode(fread($file,filesize("./data/students/students.json")),true);
            fclose($file);
            foreach($stArray as $students){
                echo  "<option value='".$students['stID']."'>".$students['stID']." ".$students['fname']." ".$students['lname']."</option>";
            }
        ?>    
    </div>
    <input type="submit" value="Add">
</form>
<?php
    include('./pages/footer.php');
?>

