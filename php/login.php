<?php
header("Content-type:text/html;charset=UTF-8");
$username = $_POST['username'];
$password = $_POST['password'];
if (checkEmpty($username, $password)) {
    if (checkUser($username, $password)) {
        session_start();
        $_SESSION['username'] = $username;
        echo $_SESSION['username'], ' Welcome to <a href="../main.php">Management System</a><br />';
    } else {
        exit('Login Fail ! Click Here <a href="../login.html">Return</a> To Try Again');
    }
}
function checkEmpty($username, $password)
{
    if ($username == null || $password == null) {
        echo '<html <head <Script Language="JavaScript" alert("用户名或密码为空");</Script </head </html ' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\" ";
    } else {
        return true;
    }
}
function checkUser($username, $password)
{
    $conn = mysqli_connect("localhost", "wd", "asdfasdf");
    mysqli_select_db($conn, "info_db");
    $sql = "select * from user_list where username='{$username}' and password='{$password}';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
    mysqli_close($conn);
}
