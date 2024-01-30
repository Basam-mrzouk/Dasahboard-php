<?php

session_start();

if(isset($_SESSION["bassam"])){
    header("location:../details.php");
}

include('includes/dab/db.php');
include('includes/temp/header.php');


if($_SERVER["REQUEST_METHOD"]== "POST"){

    if(isset($_POST['sumbit-login'])){
        $email =$_POST['email'];
        $password =$_POST['pass'];
        $hashpassword= sha1($password);
        $statment =$connect->prepare("SELECT * FROM users WHERE `email`=? and `password`=?");
        $statment->execute(array($email,$hashpassword));
        $userCount =$statment->rowCount();
        if($userCount>0){
         $result=$statment->fetch();
         if($result['role']=="user"){
            $_SESSION["bassam"]=$result["username"];
            header("location:../details.php");
         }else{
            echo "<div class='alert alert-danger text-center'>you are user not</div>";
         }
        }else{
            echo "<div class='alert alert-primary text-center'> plese create account you are not in data  </div>";
        }
    }
}



?>


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <a class="btn btn-primary text-center px-5" href="login.php">Login Admin</a>
            <h2 class="text-center">User Login&#128525</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;  ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control " name="email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass">
  </div>
 
  <button type="submit" name="sumbit-login" class="btn btn-primary btn-block">Submit</button>
  <a class="btn btn-primary text-center px-5 mt-5" href="../index.php">Exit</a>
</form>
        </div>
    </div>
</div>

<?php
include("includes/temp/footer.php");
?>