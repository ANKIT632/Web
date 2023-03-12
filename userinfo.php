<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}

else{
    echo "Not connected";
}

mysqli_select_db($con,'mydb');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query = " insert into userinfodata (user,email,mobile,comment) values('$user','$email','$mobile','$comment')"; 

mysqli_query($con,$query);

// after submit usse page per rhega.
header('location:index.php');

?>