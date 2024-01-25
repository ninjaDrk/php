<?php
include('../connection/config.php');

if(isset($_POST['user_delete']))
{
    $user_id= $_POST['user_delete'];
    $query = "DELETE FROM user WHERE id_user='$user_id'";
    $query = $conn->prepare($sql);
    $query->execute();
    if($query)
    {
        $_SESSION['message'] = "User/Admin Deleted Successfully";
        header('location: index.php');
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Something went wrong.!";
        header('location: index.php');
        exit(0);
    }
}
?>