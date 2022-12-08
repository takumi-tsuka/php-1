<?php 
include './pages/header.php';
$patimages = scandir('./data/patimages');
// print_r(unlink('./data/patimages/Angel/test.txt'));
?>
<style>
    .list-group-item-action{
        text-decoration: none;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-start align-items-start g-2">
        <div class="col-3">
            <!-- Hover added -->
            <div class="list-group">
                <?php
                    foreach($patimages as $dirName){
                        if($dirName=="." || $dirName=="..") continue;
                        $imgDir = scandir('./data/patimages/'.$dirName);
                        $counter = 0;
                        foreach($imgDir as $img){
                            if($img=="." || $img=="..") continue;
                            $counter++;
                        }
                        echo "<div class='d-flex list-group-item justify-content-between align-items-center'>";
                        echo "<a href='".$_SERVER['PHP_SELF']."?name=$dirName' class=' list-group-item-action'>$dirName</a>";
                        echo "<span class='badge bg-primary badge-pill'>$counter</span>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <div class="col-9">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
            <?php
                if(isset($_GET['name'])){
                    $dir = './data/patimages/'.$_GET['name'];
                    $images = scandir($dir);
                    foreach($images as $idx=>$image){
                        if($image=="." || $image=="..") continue;
                        $image = $dir."/$image";
                        if ($idx==2) {
                            echo "<div class='carousel-item active'>
                        <img src='$image' class='d-block w-100'/>
                        </div>";
                        continue;
                        }
                        echo "<div class='carousel-item'>
                        <img src='$image' class='d-block w-100'/>
                      </div>";
                    }
                }
            ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </div>
</div>
<?php
    
    
    ?>
<?php 
    include './pages/footer.php';
    ?>