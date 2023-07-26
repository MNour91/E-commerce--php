<a href="?do=add" class="btn btn-primary m-3">Add_Post</a>

<table class="table table-bordered table-striped table-hover table-dark" style="margin: auto;width:90%;">
    <thead>
        <tr>
        <th>Id</th>
        <th>NAME</th>
         <th>img</th>
        <th>Subject</th>
        <th>DATE</th>
        <th>Post</th>
        <th>Read_Post</th>
        <th>control</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $counter   = 0;   
       $select_post = $connect -> query('SELECT * FROM blog');
       foreach( $select_post as $row_post){
       ?>
        <tr>
        <td><?php echo++$counter;  ?></td>
        <td><?php echo $row_post['name']?></td>
        <td><img src="./img/<?php echo $row_post['img']?>" width="50px" height="50px"></td>

        <td><?php echo $row_post['subject'] ; ?></td>
        <td><?php echo $row_post['date'] ; ?></td>
        <td><?php echo $row_post['post'] ; ?></td>
        <td>      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary messg_view"  data="<?php echo$row_post['id'] ?>" data-toggle="modal" data-target="#exampleModalLong<?php echo$row_post['id'] ?>" >
        view post
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong<?php echo$row_post['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="color: #000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row_post['subject'] ; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo $row_post['post'] ; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
    </td>
        <td>
  
            <a href="?do=edit&id=<?php echo$row_post['id']?>" class="btn btn-warning">Edit</a>

              <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_post['id']?>">
            Delete 
            </button>

            <!-- Modal -->
            <div style="color: black;" class="modal fade" id="exampleModal<?php echo $row_post['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color: orange;font-weight:bold;"><?php echo $row_post['name']  ?></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are You sure To delete <span style="color: red;font-weight:bold;"><?php echo $row_post['subject']  ?></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="functions/delete_post.php?id=<?php echo $row_post['id']?>" class="btn btn-danger">Confirm</a>

                </div>
                </div>
            </div>
            </div>
        </td>
        </tr>   
        <?php } ?>


    </tbody>
</table>