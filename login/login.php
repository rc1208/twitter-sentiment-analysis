<?php
include("database/db_conection.php");
session_start();
if(isset($_POST['login']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $check_user="select * from users WHERE name='$user_name'AND pass='$user_pass'";
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
       $_SESSION['login_user']=$user_name;
      header("Location: ../sentiment-analysis/index.php");

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>

<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>

    <style>
    .login-panel {
        margin-top: 150px;
    </style>
</head>
<body>

<h1 style="text-align:center">Sentiment Analysis System for Social Networking Sites</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
