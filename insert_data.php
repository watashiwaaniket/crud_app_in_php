<?php include("dbcon.php"); ?>
<?php 

if(isset($_POST["add_students"])){
    
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $r_no = $_POST["r_no"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];


    if($f_name == "" || empty($f_name)){
        header("location:index.php?message=You Need to Fill in the First Name!!");
    }
    if($l_name == "" || empty($l_name)){
        header("location:index.php?message=You Need to Fill in the Last Name!!");
    }
    if($r_no == "" || empty($r_no)){
        header("location:index.php?message=You Need to Fill in the Roll Number!!");
    }
    if($mobile == "" || empty($mobile)){
        header("location:index.php?message=You Need to Fill in the Mobile Number!!");
    }
    if($email == "" || empty($email)){
        header("location:index.php?message=You Need to Fill in the Email!!");
    }
    else{
        $query = "INSERT INTO `students` (`first_name`,`last_name`,`roll_no`,`mobile`,`email`) VALUES ('" . mysqli_real_escape_string($connection, $f_name) . "','" . mysqli_real_escape_string($connection, $l_name) . "','" . mysqli_real_escape_string($connection, $r_no) . "','" . mysqli_real_escape_string($connection, $mobile) . "','" . mysqli_real_escape_string($connection, $email) . "')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            header("location:index.php?insert_msg=Your data has been added succesfully");
        }
    }

}

?>