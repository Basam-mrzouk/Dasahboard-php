<?php

session_start();
if(isset($_SESSION["bassam"])){


include('init.php');
$q1 =$connect->prepare("select * from users");
$q1->execute();
$userCount =$q1->rowCount();

$q2 =$connect->prepare("select * from categroy");
$q2->execute();
$catCount =$q2->rowCount();


$q3 =$connect->prepare("select * from posts");
$q3->execute();
$postCount =$q3->rowCount();


$q4 =$connect->prepare("select * from comment");
$q4->execute();
$comentCount =$q4->rowCount();

?>
    
<div class="stati mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <H1><i class="fa-regular fa-user"></i></H1>
                    <h2>USERS</h2>
                    <h2><?php echo $userCount  ?></h2>
                    <a href="#" class="btn btn-success">Show</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                <H1><i class="fa-solid fa-shapes"></i></H1>
                <h2>Categroy</h2>
                    <h2><?php echo $catCount  ?></h2>
                    <a href="#" class="btn btn-warning">Show</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                    <H1><i class="fa-solid fa-address-card"></i></H1>
                    <h2>Posts</h2>
                    <h2><?php echo $postCount  ?></h2>
                    <a href="#" class="btn btn-primary">Show</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box">
                  <h1><i class="fa-regular fa-comment"></i></h1>
                    <h2>Comment</h2>
                    <h2><?php echo $comentCount  ?></h2>
                    <a href="#" class="btn btn-danger">Show</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php

include('includes/temp/footer.php');
}else{
    echo "<h2 style='text-align:center;background:red;color:white;'>plase log in</h2>";
    header("refresh:3;url=login.php");

}
?>
