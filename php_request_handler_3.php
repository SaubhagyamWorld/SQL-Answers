<?php
$comment = $_POST['comment'];
$user_id = $_POST['user_id'];
$product _id = $_POST['product_id'];
$status ='1';

$insert = INSERT INTO comments (user_id, product_id, comment, status, created_at) VALUES ($user_id, $product _id, $comment , $status, date());

?>
