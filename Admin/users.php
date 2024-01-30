<?php
include('init.php');
$statment = $connect->prepare("select * from users");
$statment->execute();
$userCount = $statment->rowCount();
$result = $statment->fetchAll();

$page = "ALL";
if (isset($_GET['page'])) {
    $page = $_GET["page"];
} else {
    $page = "All";
}
if ($page == 'All') {

?>
    <div class="containner mt-5">
        <div class="row">
            <div class="col-md-12 m-auto">
                
                <h2 class="text-center">number of count <span class="badge badge-primary"> <?php echo $userCount;   ?></span>  <button class="btn btn-success mx-5 p-2">Create User</button></h2>
                <table class="table table-dark mt-4 table-bordered   text-center">
                    <tr>
                        <th>Id</th>
                        <th>User name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>status</th>
                        <th>Role</th>
                        <th>create_at</th>
                        <th>operation</th>
                    </tr>

                    <tbody>

                        <?PHP

                        if ($userCount > 0) {
                            foreach ($result as $e) {
                        ?>
                                <tr>
                                    <td><?php echo $e['user_id']  ?></td>
                                    <td><?php echo $e["username"]  ?></td>
                                    <td><?php echo $e["email"]  ?></td>
                                    <td><?php echo $e["password"]  ?></td>
                                    <td><?php echo $e["states"]  ?></td>
                                    <td><?php echo $e["role"]  ?></td>
                                    <td><?php echo $e["create_at"]  ?></td>
                                    <td> <a href="?page=showuser&user_id<?php echo $e['user_id']     ?>" class="btn btn-success">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="?page=deleteuser&user_id=<?php echo $e['user_id'] ?>" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>


                        <?PHP
                            }
                        }

                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


<?php
} elseif ($page == "deleteuser") {
    $user_id = "";
    if (isset($_GET["user_id"])) {
        $user_id = $_GET["user_id"];
    } else {
        $user_id = "";
    }
    $statment = $connect->prepare("DELETE FROM users WHERE user_id=?");
    $statment->execute(array($user_id));
    // $result = $statment->fetchAll();
    echo "<h2 class='alert alert-danger text-center'>delet user</h2>";
    header("refresh:3;url=users.php");
}elseif($page == "showuser"){

$user_id = "";
if(isset($_GET['user_id'])){
    $user_id= $_GET['user_id'];
}else{
    $user_id= "";
}
$statment =  $connect->prepare("SELECT * FROM users WHERE `user_id`=?");
$statment->execute(array($user_id));
$result=$statment->fetchAll();





    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center p-3">show and edit</h2>
            <form method="post" action="">
            <div class="form-group">
    <label for="exampleInputPassword1">Id</label>
    <input type="text"  class="form-control" name="id">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">USER NAME</label>
    <input type="text"  class="form-control" name="username"  ?>
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" >
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">STATUS</label>
    <input type="text" class="form-control" name="status">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">ROLE</label>
    <input type="text" class="form-control" name="role">
</div>
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>


<?php

}

?>

<?php
include('includes/temp/footer.php');
?>