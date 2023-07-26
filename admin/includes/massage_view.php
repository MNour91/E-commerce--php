

<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>FULL_NAME</th>
        <th>Email</th>
        <th>subject</th>
        <th>message</th>
        <th>readed</th>
        <th>control</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $counter   = 0;   
       $select_message = $connect -> query('SELECT * FROM massage');
       foreach( $select_message as $row_message){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php echo $row_message['first_name']." ". $row_message['last_name'];  ?></td>
        <td><?php echo $row_message['email'] ; ?></td>
        <td><?php echo $row_message['subject'] ; ?></td>
        <td><?php echo $row_message['message'] ; ?></td>
        <td class="read"><?php if($row_message['readed'] == 0){echo"unread";}else{echo"readed";}  ?></td>
        <td>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary messg_view"  data="<?php echo$row_message['id'] ?>" data-toggle="modal" data-target="#exampleModalLong<?php echo$row_message['id'] ?>" >
        view message
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong<?php echo$row_message['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="color: #000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row_message['subject'] ; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo $row_message['message'] ; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>

    

              <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_message['id']?>">
            Delete 
            </button>

            <!-- Modal -->
            <div style="color: black;" class="modal fade" id="exampleModal<?php echo $row_message['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color: orange;font-weight:bold;"><?php echo $row_message['first_name']  ?></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are You sure To delete <span style="color: red;font-weight:bold;"><?php echo $row_message['first_name']  ?></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="functions/delete_message.php?id=<?php echo $row_message['id']?>" class="btn btn-danger">Confirm</a>

                </div>
                </div>
            </div>
            </div>
        </td>
        </tr>   
        <?php } ?>


    </tbody>
</table>