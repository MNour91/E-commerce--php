
<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>customer</th>
        <th>product</th>
        <th>quantity</th>
        <th>price</th>
        <th>OrderDate</th>
        <th>agreement</th>
 
        </tr>
    </thead>
    <tbody>
       <?php
       $counter   = 0;   
       $select_order = $connect -> query('SELECT * FROM orders');
      
    foreach( $select_order as $order){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php
           $c_id = $order['customer_id'];
          $name = $connect -> query("SELECT name FROM customer WHERE id = '$c_id'");
        foreach( $name as $show_customer){
          echo $show_customer['name'];
        }?></td>
        <td><?php
           $id = $order['product_id'];
         $pro_order = $connect -> query("SELECT name FROM products WHERE id = '$id'");
        foreach( $pro_order as $show){
          echo $show['name'];
        }?>
        </td>
        <td><?php echo $order['quantity'];?></td>
        <td><?php echo $order['price'];?></td>
        <td><?php echo $order['time_order'];?></td>
       
        <td>
        <a href="functions/agree_order.php?id=<?php echo $order['id']?>" class="btn <?php if($order['agreement']==0){echo 'btn-warning';}else{echo 'btn-success';}?>"><?php if($order['agreement']==0){echo "Not Agreeing";}else{echo "Agreeing";} ?></a>
        </td>
        </tr>   
        <?php 
    } ?>


    </tbody>
</table>