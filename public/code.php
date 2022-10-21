<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['MID']);

    $name = mysqli_real_escape_string($con, $_POST['Mname']);
    $email = mysqli_real_escape_string($con, $_POST['MLastname']);
    $phone = mysqli_real_escape_string($con, $_POST['Email']);
    $course = mysqli_real_escape_string($con, $_POST['Tel']);

    $query = "UPDATE members SET Mname='$Mname', MLastname='$MLastname', Email='$Email', Tel='$Tel' WHERE MID='$MID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['Mname']);
    $email = mysqli_real_escape_string($con, $_POST['MLastname']);
    $phone = mysqli_real_escape_string($con, $_POST['Email']);
    $course = mysqli_real_escape_string($con, $_POST['Tel']);

    $query = "INSERT INTO members (Mname,MLastname,Email,Tel) VALUES ('$Mname','$MLastname','$Email','$Tel')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>