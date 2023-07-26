<?php
$pro_active = 'm';
?>
<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>price</th>
        <th>seller</th>
        <th>discount</th>
        <th>main_image</th>
        <th>other_images</th>
        <th>quantity</th>
        <th>description</th>
        <th>edit/delete</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $counter   = 0;   
       $select_product = $connect -> query('SELECT * FROM products WHERE type_product = 7');
       foreach( $select_product as $row_product){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php echo $row_product['name'];?></td>
        <td><?php echo $row_product['price'];?></td>
        <td><?php echo $row_product['seller'];?></td>
        <td><?php echo $row_product['discount'];?></td>
        <td><img src="./product_img/<?php echo$row_product['main_img'];?>" alt="main image" style="width:50px;height:50px;border-radius:50%;"></td>
        <td>
            <?php
             $show = explode("-",$row_product['other_imgs']); 
             for($i = 0 ;$i < count($show);$i++ ){
            ?>
            <img src="./product_img/<?php echo $show[$i];?>" alt="other images" style="width:50px;height: 50px;border-radius:50%;"/>
            <?php 
            } ?>
        </td>
        <td><?php echo $row_product['quantity'];?></td>
        <td><?php echo $row_product['description'];?></td>
        <td>
        <a href="?do=edit&id=<?php echo$row_product['id']?>" class="btn btn-warning">Edit</a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_product['id']?>">
        Delete Product
        </button>

        <!-- Modal -->
        <div style="color: black;" class="modal fade" id="exampleModal<?php echo$row_product['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color: orange;font-weight:bold;"><?php echo$row_product['name']  ?></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are You sure To delete <span style="color: red;font-weight:bold;"><?php echo $row_product['name']  ?></span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="functions/delete_product.php?id=<?php echo $row_product['id']?>" class="btn btn-danger">Confirm</a>

            </div>
            </div>
        </div>
        </div>
        </td>
        </tr>   
        <?php 
    } ?>


    </tbody>
</table>