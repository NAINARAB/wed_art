<?php
    require_once '../datab.php';

    $id         = mysqli_real_escape_string($conn, $_POST['id']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_mobile = mysqli_real_escape_string($conn, $_POST['user_mobile']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    $user_branch = mysqli_real_escape_string($conn, $_POST['user_branch']);
    $user_role = mysqli_real_escape_string($conn, $_POST['user_role']);

    $enc_pass = md5('wedart'.$user_password);
    
    $sql = "UPDATE user_data SET `name`='$user_name', `mobile`='$user_mobile', `password`='$enc_pass', `branch_id`='$user_branch', `role`='$user_role', `created_by`='null' WHERE `id`='$id'";

    if(mysqli_query($conn, $sql))
    {
        $res['status']  = 'Success';
        $res['remarks'] = 'User Details Updated';
    }
    else
    {
        $res['status']  = 'Failed';
        $res['remarks'] = 'Failed to Update User';
    }
    echo json_encode($res);
?>