<?php
/**
 * Created by PhpStorm.
 * User: nishan
 * Date: 22-11-2017
 * Time: 08:33 PM
 */
require ('config.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql="DELETE FROM `user` WHERE `email`='$id'";
        mysqli_query($conn,$sql);
        mysqli_commit($conn);
        header('location:admin.php');
    }
    else{
        header('location:admin.php');
    }
?>