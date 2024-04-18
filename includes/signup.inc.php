<?php
include_once 'dbh.inc,php';

 $sql= "INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Libby', 'Simpson', 'simpsonlee18797@gmail.com', 'Admin', 'test123');";
mysquil_query($conn, $sql);

header ("Location: ../index.php?signup=success");
?>