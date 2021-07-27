<?php

    session_start();
    $userName=$_SESSION['userName'] ;
?>
<DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1 ><?php echo "Welcome ".$userName; ?></h1>
    <br>
    <a href="Logout.php">Logout</a>
</body>
</html>