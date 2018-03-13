<?php
if(isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $realUsername = "admin";
    $realPassword = "1234";
    if($username == $realUsername && $password == $realPassword) {
        $_SESSION['valid'] = "admin";
        header("Location:adminpanel.php");
    } else {
        include("loginadmin.html");
        echo "<script>document.getElementById(\"admin_login_warning\").innerText = \"Wrong Username or Password\"</script>";
    }
} else {
    include("loginadmin.html");
}
?>



