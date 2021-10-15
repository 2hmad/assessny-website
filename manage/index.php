<!DOCTYPE html>
<html>
<head>
<title>Assessny Dashboard</title>
<?php include('links.php') ?>
</head>
<body>

<div class="container" style="text-align: center;">
    <form method="POST" style="padding: 40px;margin-top: 18%;display: inline-block;border: 1px solid #e8e8e8">
        <div style="margin-bottom: -13%;padding: 10px;width: 100px;height: 100px;font-size: 55px;border: 1px solid #0089ff;border-radius: 50%;transform: translate(135%, -95%);background: #0089ff;color: white;"><i class="fal fa-user-crown"></i></div>
        <input type="email" name="email-admin" placeholder="Email Address" style="display: block;padding: 7px;width: 350px;border: 1px solid #CCC;border-radius: 3px;outline:none;margin-bottom: 5%;margin-right:auto;margin-left:auto">
        <input type="password" name="pass-admin" placeholder="Password" style="display: block;padding: 7px;width: 350px;border: 1px solid #CCC;border-radius: 3px;outline:none;margin-bottom: 5%;margin-right:auto;margin-left:auto">
        <input type="submit" name="login" value="Login As Admin" style="padding: 10px;background: #0095ff;border: 1px solid #0095ff;border-radius: 5px;color: white;font-weight: bold;outline: none;">
<?php
if(isset($_SESSION['email'])) {
    header('Location: dashboard.php');
} else {
    if(isset($_POST['login'])) {
        $email = $_POST['email-admin'];
        $pass = sha1($_POST['pass-admin']);
        if($email !== "" && $pass !== "") {
            $sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$pass'";
            $query = mysqli_query($connect, $sql);
            $num = mysqli_num_rows($query);
            if($num > 0) {
                header('Location: dashboard.php');
                session_start();
                $_SESSION['email'] = $email;
            } else {
                echo "<div class='alert alert-danger' style='margin-top:3%'>Email or Password incorrect, please try again</div>";
            }
        }
    }
}
?>
    </form>
</div>

</body>
<?php include('scripts.php') ?>
</html>