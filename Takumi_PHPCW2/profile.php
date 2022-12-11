<?php 
include './pages/header.php';
 
if(!isset($_SESSION['logUser'])) {
    header("Location: ".$baseName.'index.php');
    exit();
}
?>

<div class="row justify-content-start align-items-start g-2" style="width: 100%;">
    <div class="col-3">
        <div class="card text-start">
          <div class="card-body" style="text-align:center; ">
            <?php
                echo "<h4 class='card-title' style='font-weight:600;'>".$_SESSION['logUser']['fname']." ".$_SESSION['logUser']['lname']."</h4>";
                echo "<p class='card-text' style='font-weight:600;'>".$_SESSION['logUser']['stID']."</p>";
                echo "<p class='card-text' style='font-weight:600;'>".$_SESSION['logUser']['email']."</p>";   
            ?>
          </div>
        </div>
    </div>
    <div class="col-9"></div>
</div>

<?php include './pages/footer.php'; ?>