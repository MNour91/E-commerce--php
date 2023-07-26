
<a href="?do=add" class="btn btn-primary m-3" <?php if($_SESSION['priv']!= 0){echo "hidden";} ?> >Add_User</a>

<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Adrress</th>
        <th>Gender</th>
        <th>Privileges</th>
         <th>Status</th>
        <th>control</th>
       
        </tr>
    </thead>
    <tbody id="output">
       <?php
       $counter   = 0;   
       $select_user = $connect -> query('SELECT * FROM users');
       foreach( $select_user as $row_user){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php echo $row_user['name']  ;?></td>
        <td><?php echo $row_user['email'];  ?></td>
        <td><?php echo $row_user['phone'] ; ?></td>
        <td><?php echo $row_user['address'] ; ?></td>
        <td><?php if($row_user['gender'] == 0){echo"Male";}else{echo"Famale";}  ?></td>
        <td>
            <?php if($row_user['priv'] == 0)
            {echo"owner";}
            elseif($row_user['priv'] == 1){echo"Admin";}
            elseif($row_user['priv'] == 2){echo"Editor";} 
            else{echo"Supervisor";}
            ?>
    
    
        </td>
        <td> <span class="btn <?php if($row_user['status'] == 1){echo"btn-success";}else{echo"btn-danger";}  ?>"><?php if($row_user['status'] == 0){echo"offline";}else{echo"online";}  ?></span></td>

        <td   
    
                <?php
                if($_SESSION['priv']==1){
                    if($row_user['priv']<1){
                    echo "hidden";
                    }
                }
               if($_SESSION['priv']==2){
                    if($row_user['priv']<2){
                    echo "hidden";
                    }
                }

                elseif($_SESSION['priv']==3){

                        if($row_user['priv']<3){
                            echo "hidden";
                        }
                }
                ?>
                    
        >


        
         <a href="?do=edit&id=<?php echo$row_user['id']?>" class="btn btn-warning">Edit</a>

                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_user['id']?>">
            Delete
            </button>

            <!-- Modal -->
            <div style="color: black;" class="modal fade" id="exampleModal<?php echo$row_user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color: orange;font-weight:bold;"><?php echo$row_user['name']  ?></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are You sure To delete <span style="color: red;font-weight:bold;"><?php echo $row_user['name']  ?></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="functions/delete_user.php?id=<?php echo $row_user['id']?>" class="btn btn-danger">Confirm</a>

                </div>
                </div>
            </div>
            </div>
        </td>
       
        </tr>   
        <?php } ?>


    </tbody>
</table>