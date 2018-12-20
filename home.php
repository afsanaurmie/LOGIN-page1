<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>
</style>
</head>
<body>

<div class="header">
    <h1>Home</h1>
    <h3>Welcome <?php echo @$_SESSION['yourname']; ?></h3>
</div>

</body>
</html>