<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
  if(isset($_GET["message"])) {
    echo"<h6>".$_GET["message"]."</h6>";
  }
?>
<?php
  if(isset($_GET["insert_msg"])) {
    echo"<h6>".$_GET["insert_msg"]."</h6>";
  }
?>
<?php
  if(isset($_GET["delete_msg"])) {
    echo"<h6>".$_GET["delete_msg"]."</h6>";
  }
?>

<div id="add_stud">
    <p>students_table</p>
    <button type="button"><a href="addstudents.php">ADD STUDENTS</a></button>
</div>
<div class="container">    
        <table class="table table-hover table-bordered table-striped">           
            <thead>
                <tr>
                    <th style="background-color: #40B3A2; color: aliceblue;">ID</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">First Name</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Last Name</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Roll No</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Mobile</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Email</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Update</th>
                    <th style="background-color: #40B3A2; color: aliceblue;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "select * from `students`";
                    $result = mysqli_query($connection, $query);

                    if (!$result) {
                        die("query failed!!". mysqli_error($connection));
                    }
                    else {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['roll_no']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn" style="background-color:#40B3A2; color:white;">Update</a></td>
                                <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn" style="background-color:pink; color:white;">Delete</a></td>
                            </tr>

                            <?php
                        }
                    }

                
                ?>
            </tbody>
        </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>