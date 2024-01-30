<?php
include('init.php');
$statment =$connect->prepare("select * from categroy");
$statment->execute();
$catCount =$statment->rowCount();
$result =$statment->fetchAll();
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h2 class="text-center">number of count <span class="badge badge-primary"> <?php echo $catCount;   ?></span></h2>
        <table class="table table-dark mtable-bordered  text-center">
<tr>
    <th>Id</th>
    <th>title</th>
    <th>desription</th>
    
    <th>status</th>
    
    <th>create_at</th>
    <th>opertion</th>
</tr>

<tbody>

<?PHP

if($catCount>0){
    foreach( $result aS $e){
        ?>
<tr>
    <td><?php echo $e['categroy_id']  ?></td>
    <td><?php echo $e["title"]  ?></td>
    <td><?php echo $e["description"]  ?></td>
    
    <td><?php echo $e["status"]  ?></td>
   
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