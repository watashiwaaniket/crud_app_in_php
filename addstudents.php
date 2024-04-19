<?php include("header.php"); ?>

<div class="parent">
    <div class="stud_form">
        <form action="insert_data.php" method="post">
            <div class="form-group">
                <label for="f_name">First Name</label>
                <input type="text" name="f_name" class="form_control">
            </div>
            <div class="form-group">
                <label for="l_name">Last Name</label>
                <input type="text" name="l_name" class="form_control">
            </div>
            <div class="form-group">
                <label for="r_no">Roll No</label>
                <input type="text" name="r_no" class="form_control">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No</label>
                <input type="text" name="mobile" class="form_control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form_control">
            </div>
            <div class="button">
                <input class="btn btn-success" type="submit" name="add_students" value="Add Students" />
            </div>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>