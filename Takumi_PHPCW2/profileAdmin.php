<?php
    include('./pages/header.php');
    
?>

<form method="POST" action="">
    <div class="mb-3">
        <select class="form-select form-select-lg" name="course">
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="JavaScript">JavaScript</option>
        <option value="advance">JavaScrpt Advance</option>
        <option value="php">PHP</option>
        <option value="CMS">CMS</option>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select form-select-lg" name="course">
        <?php 
            $file = fopen("./data/students/students.json","r");
            $stArray = json_decode(fread($file,filesize("./data/students/students.json")),true);
            fclose($file);
            foreach($stArray as $students){
                echo  "<option>".$students['stID']." ".$students['fname']." ".$students['lname']."</option>";
            }
        ?>    
    </div>
    <input type="submit">
</form>
<?php
    include('./pages/footer.php');
?>

