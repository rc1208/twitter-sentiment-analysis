<?php
session_start();

if(!isset($_SESSION['login_user'])){
   echo "<script>alert('Please Login!')</script>";
   echo "<script>window.top.location='login.php'</script>";
}
?>


<!DOCTYPE html>
<head>

    <title>
        Registration
    </title>
</head>

<body>
<h1>Welcome</h1><br>



<h1><a href='logout.php'>Logout here</a> </h1>


</body>

</html>
