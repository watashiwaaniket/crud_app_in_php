<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "SELECT * FROM `students` WHERE `id` = '" . mysqli_real_escape_string($connection, $id) . "'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed!! " . mysqli_error($connection));
    }
    else {
        $row = mysqli_fetch_assoc($result);
    }
}

if(isset($_POST["update_students"])) {
    if(isset($_GET["id_new"])) {
        $idnew = $_GET["id_new"];
    }

    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $rno = $_POST["r_no"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    $query = "UPDATE `students` SET `first_name` = '$fname', `last_name` = '$lname', `roll_no` = '$rno', `mobile` = '$mobile', `email` = '$email' WHERE `id` = '$idnew'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed!! " . mysqli_error($connection));
    }
    else {
        echo"Data Updated!";
        exit; // Add exit after header redirect
    }
}
?>


<div class="parent">
    <div class="stud_form">
        <form action="update_page.php?id_new=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form_control" value="<?php echo isset($row['first_name']) ? $row['first_name'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form_control" value="<?php echo isset($row['last_name']) ? $row['last_name'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="r_no">Roll No</label>
                <input type="text" name="r_no" class="form_control" value="<?php echo isset($row['roll_no']) ? $row['roll_no'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No</label>
                <input type="text" name="mobile" class="form_control" value="<?php echo isset($row['mobile']) ? $row['mobile'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form_control" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>">
            </div>
            <div class="button">
                <input class="btn btn-success" type="submit" name="update_students" value="Update Student" />
            </div>
        </form>
    </div>
</div>


<?php include("footer.php"); ?>