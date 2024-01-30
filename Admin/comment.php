<?php
include('init.php');
$statment =$connect->prepare("select * from comment");
$statment->execute();
$commentCount =$statment->rowCount();
$result =$statment->fetchAll();
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h2 class="text-center">number of count <span class="badge badge-primary"> <?php echo $commentCount;   ?></span></h2>
        <table class="table table-dark table-bordered text-center">
<tr>
    <th>Id</th>
    <th>comment</th>
    
    <th>stratus</th>
    
    <th>user_id </th>
    <th>post_id  </th>
    <th>create_at</th>
    <th>opreation</th>
</tr>

<tbody>

<?PHP

if($commentCount>0){
    foreach( $result aS $e){
        ?>
<tr>
    <td><?php echo $e['comment_id']  ?></td>
    <td><?php echo $e["comment"]  ?></td>
    <td><?php echo $e["stratus"]  ?></td>
    <td><?php echo $e["user_id"]  ?></td>
    
    <td><?php echo $e["post_id"]  ?></td>
   
    <td><?php echo $e["create_at"]  ?></td>
   <td> <a href="#" class="btn btn-success"><i class="fa-regular fa-eye"></i></a>
    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>

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
include('includes/temp/footer.php');
?>