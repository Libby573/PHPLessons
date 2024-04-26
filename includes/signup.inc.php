<?php
include_once 'dbh.inc.php';
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 $sql= "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
mysqli_query($conn, $sql);

header ("Location: ../index.php?signup=success");
?> 
<?php
require "header.php";
?>
<main>
    
    <div class ="wrapper-main">
        <section class="section-default">
            <h1> Signup</h1>
            <?php
            if (isset($_GET['error'])){
                if ($_GET['error'] == "emptyfields"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
                if ($_GET['error'] == "invaliduidmail"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
                if ($_GET['error'] == "invaliduid"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
                if ($_GET['error'] == "invalidmail"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
                if ($_GET['error'] == "passwordcheck"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
                if ($_GET['error'] == "usertaken"){
                    echo '<p class = "signuperror"> Fill in all fields!</p>';
                }
            }
            else if ($_GET["signup"] == "success") {
                echo'<p class="signupsuccess">Signup successful!</p>';
            }
            ?>
            <form class ="includes/signup.inc.php" method="post">
            <input type = "text" name="uid" placeholder ="Username">
            <input type = "text" name="mail" placeholder ="E-mail">
            <input type = "password" name ="pwd" placeholder ="Password">
            <input type = "password" name ="pwd-repeat" placeholder =" Repeat password">
            <button type ="sumbit" name="signup-submit">Signup</button>
</section>
</div>
</main>
<?php
require "footer.php";
?>