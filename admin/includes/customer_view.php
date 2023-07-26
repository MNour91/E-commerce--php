<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        </tr>
    </thead>
    <tbody id="output">
       <?php
       $counter   = 0;   
       $select_customer = $connect -> query('SELECT * FROM customer');
       foreach( $select_customer as $row_customer){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php echo $row_customer['name']  ;?></td>
        <td><?php echo $row_customer['email'];  ?></td>
        <td><?php echo $row_customer['phone'] ; ?></td>
        <td><?php echo $row_customer['address'] ; ?></td>

         
        <?php } ?>


    </tbody>
</table>