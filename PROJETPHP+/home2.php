<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home2</title>
</head>
<body>
<span style='color:black'>
<?php
include("index.html");
echo 'Welcome to home 2, your informarion: <br>';
echo 'Email :' .$_SESSION['emailS']. '<br>';
echo 'Password :' .$_SESSION['passS']. '<br>';
?>
</span>
</body>
</html>