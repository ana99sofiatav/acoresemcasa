<?php
include('../../multi_login.php/functions.php');
include_once '../db.php';

$comment_id = $_POST['comment_id'];

$sql_del = "DELETE FROM tbl_user_comments_ponta_delgada WHERE  id = $comment_id";
$stmt = $conn->prepare($sql_del);
$stmt->execute();

if (! empty($stmt)) {
    echo true;
}
?>