<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
        <div class="row justify-content-start align-item-center g-2">
            <div class="col">
            <?php
            // echo "<h3>".$_SERVER['PHP_SELF']."</h3>";
            // echo "<h3>".$_SERVER['SERVER_NAME']."</h3>";
            // echo "<h3>".$_SERVER['HTTP_HOST']."</h3>";
            // echo "<h3>".$_SERVER['HTTP_USER_AGENT']."</h3>";
            // echo "<h3>".$_SERVER['SCRIPT_NAME']."</h3>";
            // echo "<h3>".$_SERVER['REQUEST_METHOD']."</h3>";
            // echo "<h3> you have typed:".$_GET['fname'].$_GET['lname']."</h3>";
            // if(isset($_GET['fname'])){
            //     echo "<h3> you have typed:".$_GET['fname']."".$_GET['lname']."</h3>";
            // }
        

            // if(isset($_GET['fname'])){
            //     echo "<h1>firstname:".$_GET['fname']."</h1>";
            // }
            // if(isset($_GET['lname'])){
            //     echo "<h1>lastname:".$_GET['lname']."</h1>";
            // }
            // if(isset($_GET['gender'])){
            //     echo "<h1>gender:".$_GET['gender']."</h1>";
            // }
            // if(isset($_GET['fnum']) && isset($_GET['lnum'])){
            //     echo "<h1>".$_GET['fnum'] + $_GET['lnum']."</h1>";
            //     echo "<h1>".$_GET['fnum'] * $_GET['lnum']."</h1>";
            //     echo "<h1>".$_GET['fnum'] / $_GET['lnum']."</h1>";
            //     echo "<h1>".$_GET['fnum'] - $_GET['lnum']."</h1>";
            // }
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                echo "<h1>firstname:".$_POST['fname']."</h1>";
                echo "<h1>lastname:".$_POST['lname']."</h1>";
                echo "<h1>gender:".$_POST['gender']."</h1>";
            }
            ?>
            </div>
        </div>
        <div class="row justify-content-start align-item-center g-2">
            <form action= "<?php $_SERVER['PHP_SELF']?>" method= "POST">
                <input type="text" name="fname" id="fname" placeholder="firstname">
                <input type="text" name="lname" id="lname" placeholder="lastname"> 
                <input type="password" name="password" id="password" placeholder="password">
                <select name="gender" id="">
                    <option>female</option>  
                    <option>male</option>
                    <option>non binary</option>
                    <option>prefer not to say</option>
                </select>
                <input type="submit" value="send">
            </form>
        </div>
        <!-- <div class="row justify-content-start align-item-center g-2">
            <form action= "<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="number" name="fnum" id="fnum" placeholder="firstnum">
                <input type="number" name="lnum" id="lnum" placeholder="lastnum"> 
                <input type="submit" value="send">
            </form>
        </div> -->




        <!-- <div class="row justify-content-start align-item-center g-2">
            <form action= "<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control" name="fname" id="formId1" placeholder="fname">
                      <label for="fname">Firstame</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control" name="lname" id="formId1" placeholder="lname">
                      <label for="lname">Lastname</label>
                      <input type="submit" value= "submit">
                    </div>
            </form>
        </div> -->

   </div>
    
</body>
</html>