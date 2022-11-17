<?php
$connection = mysqli_connect('localhost','root');


if ($connection) {
    echo"Connection Success";
}
else {
    echo "ERROR: Connection failed";
}

mysqli_select_db($connection,'authentication');

$email = $_POST['newsm'];


$s = "select * from news where EMAIL = '$email'";
$result = mysqli_query($connection,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo"Already Subscribed to our newsletter";
}
else
{
    $data = "INSERT INTO news (EMAIL) VALUES ('$email')";
    mysqli_query ($connection , $data);
    header('location:newss.php');
}



?>